<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartDetail;

class CartController extends Controller
{
    const PATH_VIEW = 'clients.carts.';
    public function index(){
        $title = 'Cart';
        $userID = session('user')->id;
        $data = Cart::with(['cartDetails.productDetail.image','cartDetails.productDetail.product','cartDetails.productDetail.size','cartDetails.productDetail.color'])
        ->where('user_id',$userID)->first();
        if ($data) {
          return view(self::PATH_VIEW.__FUNCTION__,compact('title','data'));
        }
        return back()->with('error','Cart chua co san pham nao');
    }
    public function update(Request $request){
        $cartDetail = CartDetail::where('id',$request->cart_detail_id)->update(['quantity'=>$request->quantity]);
        if($cartDetail){
            return response()->json(['status'=>'success']);
        }
    }
    public function destroy(Request $request){
        $cartDetail  = CartDetail::where('id',$request->cart_detail_id)->delete();
        if($cartDetail){
            return response()->json(['status'=>'success']);
        }

    }
    public function checkout(){
        $title = "Checkout";
        $userID = session('user')->id;
        $data = Cart::with(['cartDetails.productDetail.product','cartDetails.productDetail.size','cartDetails.productDetail.color'])
        ->where('user_id',$userID)->first();
        if($data){
            return view(self::PATH_VIEW.__FUNCTION__,compact('title','data'));
        }
        return back()->with('error','Checkout khong thanh cong. Vui long thu lai sau');
    }
}
