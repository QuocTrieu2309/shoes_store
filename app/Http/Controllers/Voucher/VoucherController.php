<?php

namespace App\Http\Controllers\Voucher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Voucher\VoucherRequest as VoucherVoucherRequest;
use Illuminate\Http\Request;
use App\Models\Voucher;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\ProductDetail;
use App\Models\UserVoucher;
use App\Http\Requests\Voucher\VoucherRequest;
use Carbon\Carbon;

class VoucherController extends Controller
{
    const PATH_VIEW = 'admins.vouchers.';
    public function index()
    {
        $title = "Vouchers";
        $data = Voucher::where('deleted',0)->get();
        return view(self::PATH_VIEW.__FUNCTION__,compact('data','title'));
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
    public function create(){
    $title = "Create Voucher";
    return view(self::PATH_VIEW.__FUNCTION__,compact('title'));
    }
    public function store(VoucherRequest $request){
        $start_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start_time'))->format('Y-m-d H:i:s');
        $end_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('end_time'))->format('Y-m-d H:i:s');
        $voucher = Voucher::query()->create([
           'name'=> $request->name,
           'start_time' => $start_time,
           'end_time'=> $end_time,
           'quantity'=> $request->quantity,
           'type'=> $request->type,
           'reduced_value'=> $request->reduced_value,
           'minimum_amount'=> $request->minimum_amount
        ]);
        if(!$voucher){
         return back()->with('error','Tao moi khong thanh cong!');
        }
        return back()->with('msg','Tao moi voucher thanh cong!');
    }
    public function edit($id){
        $title = "Edit Voucher";
        $voucher = Voucher::find($id); 
        return view(self::PATH_VIEW.__FUNCTION__,compact('voucher','title'));
  
    }
    public function update(VoucherRequest $request,$id){
        $start_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start_time'))->format('Y-m-d H:i:s');
        $end_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('end_time'))->format('Y-m-d H:i:s');
        $voucher = Voucher::find($id);
        $voucher->update([
            'name'=> $request->name,
            'start_time' => $start_time,
            'end_time'=> $end_time,
            'quantity'=> $request->quantity,
            'type'=> $request->type,
            'reduced_value'=> $request->reduced_value,
            'minimum_amount'=> $request->minimum_amount
        ]);
        if(!$voucher){
            return back()->with('error','Update voucher khong thanh cong!');
           }
           return back()->with('msg','Update voucher thanh cong!');
    }
    public function destroy($id){
        $voucher = Voucher::find($id);
        if($voucher){
            $exists = UserVoucher::where('voucher_id', $voucher->id)->exists();
            if($exists){
                $voucher->deleted = Voucher::STATUS_DEL;
            }else{
                $voucher->delete();
            }
            return back()->with('msg','Xoa voucher thanh cong!');
        }else{
            return back()->with('error','Xoa voucher khong thanh cong!');
        }
    }
}
