<?php

namespace App\Http\Controllers\Filter;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function index()
    {
        $data = Product::with('productDetails.image')
            ->where('deleted', 0)
            ->latest()
            ->selectRaw('products.*, CAST(price_range.max_price AS SIGNED) AS max_price, CAST(price_range.min_price AS SIGNED) AS min_price')
            ->leftJoinSub(
                function ($query) {
                    $query->select('product_id', DB::raw('MAX(price) as max_price, MIN(price) as min_price'))
                        ->from('product_details')
                        ->groupBy('product_id');
                },
                'price_range',
                function ($join) {
                    $join->on('products.id', '=', 'price_range.product_id');
                }
            )
            ->paginate(12);
        $colors = Color::all();
        $sizes = Size::all();
        return view('clients.shops.shop', compact('data', 'colors', 'sizes'));
    }
    public function filter(Request $request)
    {
        $filters = [];

        if ($request->has('price')) {
            if (!empty($request->price)) {
                $filters[] = ['price', '>=', $request->price[0]]; 
                $filters[] = ['price', '<=', $request->price[1]]; 
            }
        }

        if ($request->has('color_id')&& $request->color_id !== null) {
            $filters[] = ['color_id', '=', $request->color_id];
        }

        if ($request->has('size_id') && $request->size_id !== null) {
            $filters[] = ['size_id', '=', $request->size_id];
        }
        if($request->has('sort') && $request->sort =='price' ){
            $data = ProductDetail::with('size','color','product','image')->where($filters)->orderBy('price', 'asc')->get();

        }elseif($request->has('sort') && $request->sort =='price-desc' ){
            $data = ProductDetail::with('size','color','product','image')->where($filters)->orderBy('price', 'desc')->get();
        }else{
            $data = ProductDetail::with('size','color','product','image')->where($filters)->get();
        }
        return response()->json([
            'data' => $data,
            'status' => 'success'
        ]);
    }
}
