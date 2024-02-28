<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\CartDetail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\Cart;

class PaymentController extends Controller
{
    const PATH_VIEW  = 'clients.payments.';
    public function redirectToVnPay(Request $request)
    {
        $userID = session('user')->id;
        $totalMoney = $request->total_money;
        $address = $request->address;
        $paymentMethod = $request->payment_method;
        $status = $paymentMethod == 'Vnpay' ? Order::STATUS_PAID_PENDING_CONFIRM : Order::STATUS_PENDING_CONFIRM;
        DB::beginTransaction();
        try {
            $order = Order::query()->create([
                'user_id' => $userID,
                'total_money' => $totalMoney,
                'address' => $address,
                'payment_method' => $paymentMethod,
                'status' => $status
            ]);
            if ($order) {
                $orderId = $order->id;
                $transaction = Transaction::query()->create([
                    'order_id' => $orderId,
                    'total_money' => $totalMoney,
                    'note' => 'Don hang chua duoc thanh toan'
                ]);
                $cartDetails = CartDetail::with('cart')->whereHas('cart', function ($query) use ($userID) {
                    $query->where('user_id', $userID);
                })->get();
                foreach ($cartDetails as $cartDetail) {
                    $orderDetail = OrderDetail::query()->create([
                        'order_id' => $orderId,
                        'product_detail_id' => $cartDetail->product_detail_id,
                        'quantity' => $cartDetail->quantity,
                        'price' => ($cartDetail->productDetail->promotional_price) ? $cartDetail->productDetail->promotional_price : $cartDetail->productDetail->price
                    ]);
                    if (!$orderDetail) {
                        return response()->json([
                            'status' => 'error'
                        ]);
                    }
                }
                $orderDetails = OrderDetail::where('order_id', $orderId)->get();
                if ($orderDetails->isNotEmpty() && $transaction) {
                    DB::commit();
                    if ($request->payment_method == 'Vnpay') {

                        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
                        date_default_timezone_set('Asia/Ho_Chi_Minh');

                        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                        $vnp_Returnurl = route('payment.callback');
                        $vnp_TmnCode = "SQV72KG1"; // Mã website tại VNPAY 
                        $vnp_HashSecret = "STBBCNIDVVKBXKFLFAIPOUCWPGIWTPNX"; // Chuỗi bí mật

                        $vnp_TxnRef = $orderId; // Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                        $vnp_OrderInfo = 'Thanh toan hang hoa';
                        $vnp_OrderType = 'other';
                        $vnp_Amount = (int)($request->total_money) * 100;
                        $vnp_BankCode = 'NCB';
                        $vnp_IpAddr = $request->ip();
                        $inputData = array(
                            "vnp_Version" => "2.1.0",
                            "vnp_TmnCode" => $vnp_TmnCode,
                            "vnp_Amount" => $vnp_Amount,
                            "vnp_Command" => "pay",
                            "vnp_CreateDate" => date('YmdHis'),
                            "vnp_CurrCode" => "VND",
                            "vnp_IpAddr" => $vnp_IpAddr,
                            "vnp_Locale" => 'nv',
                            "vnp_OrderInfo" => $vnp_OrderInfo,
                            "vnp_OrderType" => $vnp_OrderType,
                            "vnp_ReturnUrl" => $vnp_Returnurl,
                            "vnp_TxnRef" => $vnp_TxnRef,
                            'vnp_BankCode' => $vnp_BankCode
                        );

                        ksort($inputData);
                        $query = http_build_query($inputData);
                        $hashdata = $query;

                        $vnp_Url = $vnp_Url . "?" . $query;
                        if (isset($vnp_HashSecret)) {
                            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
                            $vnp_Url .= '&vnp_SecureHash=' . $vnpSecureHash;
                        }

                        return response()->json([
                            'payment_url' => $vnp_Url,
                            'status' => 'success'
                        ]);
                    } else {
                        return response()->json([
                            'data' => $orderDetails,
                            'payment_success_url' => 'payment/success',
                            'status' => 'success'
                        ]);
                    }
                } else {
                    return response()->json([
                        'status' => 'error'
                    ]);
                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
    public function callBack(Request $request)
    {
        $validSignature = $this->isValidSignature($request);
        $orderId = $request->input('vnp_TxnRef');
        if (!$validSignature) {
            $order = Order::find($orderId);
            $order->delete();
            return response()->json(['message' => 'Invalid signature'], 400);
        }
        $updateOrder = Order::where('id', $orderId)->update([
            'status' => Order::STATUS_PAID_COMPLETE
        ]);
        $transactionIUpdate =  Transaction::where('order_id', $orderId)->update([
            'note' => 'Don hang da duoc thanh toan'
        ]);
        $orderDetails = OrderDetail::where('order_id', $orderId)->get();
        return redirect()->route('payment.success');
    }

    private function isValidSignature(Request $request)
    {
        $receivedSignature = $request->input('vnp_SecureHash');
        $data = $request->except('vnp_SecureHash');
        ksort($data);
        $hashData = http_build_query($data);
        $vnpHashSecret = 'STBBCNIDVVKBXKFLFAIPOUCWPGIWTPNX';
        $expectedSignature = hash_hmac('sha512', $hashData, $vnpHashSecret);
        return $receivedSignature === $expectedSignature;
    }
    public function paymentSuccess()
    {
        $order = Order::with('orderDetails.productDetail.product', 'user', 'transaction')->latest()->first();
        $cart = Cart::where('user_id', session('user')->id)->first();
        if ($cart) {
            $cart->delete();
        }
        return view(self::PATH_VIEW . __FUNCTION__, compact('order'));
    }
}
