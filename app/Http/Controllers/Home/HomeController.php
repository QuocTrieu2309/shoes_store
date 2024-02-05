<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;


class HomeController extends Controller
{
    const PATH_VIEW = 'clients.homes.';
    public function index(){
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
        ->paginate(3);
    return view(self::PATH_VIEW.__FUNCTION__,compact('data'));
    }
}
