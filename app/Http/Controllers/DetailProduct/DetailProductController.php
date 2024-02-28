<?php

namespace App\Http\Controllers\DetailProduct;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Size;
use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Support\Carbon;

class DetailProductController extends Controller
{
    const PATH_VIEW = 'clients.detailproducts.';
    public function index($id)
    {
        $title  = "Product Detail";
        $product = Product::with('productDetails.image')->where('deleted', 0)->find($id);
        $productDetails = ProductDetail::with('color', 'size')->where('product_id', $id)->get();
        $listColor = [];

        foreach ($productDetails as $productDetail) {
            $colorName = $productDetail->color->name;
            $sizeName = $productDetail->size->name;
            $priceAll['price'] = $productDetail->price;
            $priceAll['promotional_price'] = $productDetail->promotional_price;
            if (!isset($listColor[$colorName])) {
                $listColor[$colorName] = [
                    'sizes' => [$sizeName],
                ];
            } else {
                $listColor[$colorName]['sizes'][] = $sizeName;
            }
        }
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'product', 'listColor'));
    }
    public function getPrice(Request $request)
    {
        $color = Color::where('name', $request->color)->first();
        $color_id  = $color->id;
        $size = Size::where('name', $request->size)->first();
        $size_id  = $size->id;
        $product_id = $request->product_id;
        $productDetail = ProductDetail::where('product_id', $product_id)
            ->where('color_id', $color_id)
            ->where('size_id', $size_id)->first();
        $price['old_price']  = $productDetail->price;
        $price['product_detail_id']  = $productDetail->id;
        $price['promotional_price'] = $productDetail->promotional_price;
        return response()->json(['price' => $price]);
    }
    public function addCart(Request $request)
    {
        $createdDate = now();
        $createdDate = $createdDate->toDateString();
        $userID = session('user')->id;
        $cart = Cart::where('user_id',$userID)->first();
        if ($cart) {
            $cart_id = $cart->id;
            if(isset($request->product_id)){
                $productDetail  = ProductDetail::where('product_id',$request->product_id)->first();
                $cart_detail = CartDetail::where('cart_id', $cart_id)
                ->where('product_detail_id', $productDetail->id)->first();
                if ($cart_detail) {
                    $cart_detail->increment('quantity', $request->quantity);
                }else{
                    $cart_detail =  CartDetail::query()->create([
                        'cart_id' => $cart_id,
                        'product_detail_id' => $productDetail->id,
                        'quantity'=> $request->quantity
                    ]);
                }

            }else{
                $cart_detail = CartDetail::where('cart_id', $cart_id)
                    ->where('product_detail_id', $request->product_detail_id)->first();
                if ($cart_detail) {
                    $cart_detail->increment('quantity', $request->quantity);
                }else{
                    $cart_detail =  CartDetail::query()->create([
                        'cart_id' => $cart_id,
                        'product_detail_id' => $request->product_detail_id,
                        'quantity'=> $request->quantity
                    ]);
                }
            }
            return response()->json([
                'status' => $cart_detail ? 'success' : 'error',
                'data' => $cart_detail ?? null,
            ]);
        } else {
            $cart = Cart::query()->create([
                'user_id' => $userID,
                'created_date' => $createdDate
            ]);
            if ($cart) {
                $cart_id = $cart->id;
                if(isset($request->product_id)){
                    $productDetail  = ProductDetail::where('product_id',$request->product_id)->first();
                    $cart_detail =  CartDetail::query()->create([
                        'cart_id' => $cart_id,
                        'product_detail_id' => $productDetail->id,
                        'quantity'=> $request->quantity
                    ]);
                }else{
                    $cart_detail =  CartDetail::query()->create([
                        'cart_id' => $cart_id,
                        'product_detail_id' => $request->product_detail_id,
                        'quantity'=> $request->quantity
                    ]);
                }
                return response()->json([
                            'status' => !$cart_detail ? 'success' : 'error',
                             'data' => $cart_detail ?? null,
                        ]);
            }
        }
    }
}
