<?php

namespace App\Http\Controllers\ProductDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\ProductDetail;
use App\Models\Image;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Http\Requests\ProductDetail\ProductDetailRequest;
use PhpParser\Node\Stmt\TryCatch;

class ProductDetailController extends Controller
{
    const PATH_VIEW = 'admins.productdetails.';
    public function index()
    {
        $title = ' Product Details';
        $data = session('productDetails');
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'data'));
    }
    public function show($id)
    {
        $title = 'Detail Product';
        $data = ProductDetail::with(['product','image','brand','category','material','size','color'])->find($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'title'));
    }
    public function postCreate(Request $request)
    {
        try {
            $productDetail = $request->all();
            session(['productDetail' => $productDetail]);
            return response()->json(['message' => 'Product details created successfully', 'redirectTo' => route('product_details.setting')]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function setting()
    {
        $title = "Setting Product Detail";
        $data = session('productDetail');
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'data'));
    }
    public function create($id){
        $title = "Create Product Detail";
        $data = ProductDetail::where('product_id',$id)->first();
        $size = Size::all();
        $color = Color::all();
        return  view(self::PATH_VIEW.__FUNCTION__,compact('title','size','color','data')); 
    }
    public function store(ProductDetailRequest $request)
    {

        DB::beginTransaction();
        try {
            $productDetail = ProductDetail::create([
                'product_id' => $request->product_id,
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'material_id' => $request->material_id,
                'size_id' => $request->size_id,
                'color_id' => $request->color_id,
                'image_id' => null,
                'sku' => $request->sku,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ]);
            $productDetailId = $productDetail->id;
            $path = $request->file('image_id')->store('images');
            $filename = basename($path);
            $image = Image::create([
                'product_detail_id' => $productDetailId,
                'url' =>  $filename,
            ]);
            $imageID = $image->id;
            $productDetail->image_id = $imageID;
            $productDetail->save();
            DB::commit();
            if(session()->has('productDetail')){
                session()->forget('productDetail');
                if ($productDetail) {
                    $data = session('productDetails');
                    foreach ($data as $key => $value) {
                        if ($request->size_id == $value['size_id'] && $request->color_id == $value['color_id']) {
                            unset($data[$key]);
                            $data = array_values($data);
                        }
                    }
                    if (empty($data)) {
                        session()->forget('productDetails');
                        return  redirect()->route('products.create')->with('msg', 'Thao tac thanh cong');
                    }
                    session(['productDetails' => $data]);
                }
                return  redirect()->route('product_details.index')->with('msg', 'Thao tac thanh cong');
            }
            return back()->with('msg','Tao moi thanh cong');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Thao tac thanh ko thanh cong cong');
        }
    }
    public function deleteSession(Request $request)
    {
        try {
            if (session()->has('productDetails')) {
                $data = session('productDetails');
                foreach ($data as $key => $value) {
                    if ($request->size == $value['size_id'] && $request->color == $value['color_id']) {
                        unset($data[$key]);
                        $data = array_values($data);
                    }
                }
                if (empty($data)) {
                    $productDetails = ProductDetail::where('product_id', $request->product_id)->get();

                    if ($productDetails->isEmpty()) {
                        $product = Product::find($request->product_id);
                        if ($product) {
                            $product->delete();
                        }
                    } 
                    session()->forget('productDetails');
                    return response()->json(['message' => 'Product details removed successfully', 'redirectTo' => route('products.create')]);
                }
                session(['productDetails' => $data]);
                return response()->json(['message' => 'Product details removed successfully', 'redirectTo' => route('product_details.index')]);
            } else {
                return response()->json(['message' => 'Session not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $title = "Edit Product Detail";
        $data = ProductDetail::find($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'data'));
    }
    public function update(ProductDetailRequest $request, $id)
    {
        $productDetail = ProductDetail::find($id);
        if($request->hasFile('image_id')){
            $path = $request->file('image_id')->store('images');
            $filename = basename($path);
            $image = Image::find($productDetail->image_id);
            $oldImage = $image->url;
            $image->url = $filename;
            $image->save();
            Storage::delete($oldImage);
        }
        $productDetail->fill([
            'sku' => $request->sku,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
        $productDetail->save();
        return back()->with('msg','Thao tac thanh cong');
    }
    public function destroy($id)
    {
       $productDetail = ProductDetail::find($id);
       $productDetail->delete;
    //    $productDetail->deleted  = ProductDetail::STATUS_DEL;
    //    $productDetail->save();
       return back()->with('msg','ban da xoa thanh cong!');
    }
}
