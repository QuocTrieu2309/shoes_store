<?php

namespace App\Http\Controllers\Voucher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\ProductDetail;
use App\Models\UserVoucher;

class VoucherController extends Controller
{
    const PATH_VIEW = 'admins.vouchers.';
    public function index()
    {
    }
    public function check(Request $request)
    {
        $userID  = 3;
        $voucher  = Voucher::with('userVouchers')->where('name', $request->name)
            ->whereHas('userVouchers', function ($query) use ($userID) {
                $query->where('user_id', $userID);
            })
            ->where('status', 'Còn Hạn')->first();
        $cart = Cart::with('cartDetails.productDetail')->where('user_id', $userID)->first();
        if($voucher){
            if ($voucher->type == 'Sản Phẩm') {
                foreach ($cart->cartDetails as $cartDetail) {
                    if ($cartDetail->productDetail->promotional_price !== null) {
                        if ($cartDetail->productDetail->promotional_price >= $voucher->minimum_amount) {
                            return response()->json([
                                'data' => $voucher,
                                'status' => 'success'
                            ]);
                        }
                    } else {
                        if ($cartDetail->productDetail->price >= $voucher->minimum_amount) {
                            return response()->json([
                                'data' => $voucher,
                                'status' => 'success'
                            ]);
                        }
                    }
                }
                return response()->json([
                    'data' => $cart,
                    'status' => 'error'
                ]);
            } elseif ($voucher->type == 'Đơn Hàng') {
                $totalPrice = 0;
                foreach ($cart->cartDetails as $cartDetail) {
                    if ($cartDetail->productDetail->promotional_price !== null) {
                        $totalPrice += ($cartDetail->productDetail->promotional_price)*($cartDetail->quantity);
                    } else {
                        $totalPrice += ($cartDetail->productDetail->price)*($cartDetail->quantity);
                    }
                }
                if($totalPrice >= $voucher->minimum_amount){
                    return response()->json([
                        'data' => $voucher,
                        'status' => 'success'
                    ]);
                }else{
                    return response()->json([
                        'data' => $voucher,
                        'status' => 'error'
                    ]);
                }
            }
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
