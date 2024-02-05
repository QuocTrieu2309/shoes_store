<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Image;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\Material;
use App\Http\Requests\Product\ProductRequest;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    const PATH_VIEW = 'admins.products.';
    public function index()
    {
        if(session()->has('productDetails.image')){
            $lastProduct = Product::latest()->first();
            $lastProductID  = $lastProduct->id;
            $productDetail = ProductDetail::find($lastProductID);
            if(!$productDetail){
                $lastProduct->delete();
            }
            session()->forget('productDetails');
        }
        $title = "Create Product";
        $data = Product::with(['productDetails.image','productDetails.brand','productDetails.category','productDetails.material','productDetails.size','productDetails.color'])
        ->where('deleted',0)->latest()->paginate(3);
        return view(self::PATH_VIEW . __FUNCTION__, compact(['title', 'data']));
    }
    public function show($id)
    {
        $title = "Products Details";
        $data = ProductDetail::with(['product','color','size','image'])->where('product_id', $id)->paginate(10);
        return view(self::PATH_VIEW . __FUNCTION__, compact(['title', 'data','id']));
    }
    public function create()
    {
        $title = "Create Product";
        $brand = Brand::all();
        $category = Category::all();
        $size = Size::all();
        $color = Color::all();
        $material = Material::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact(['title', 'brand', 'category', 'size', 'color', 'material']));
    }
    public function store(ProductRequest $request)
    {
        $data['name'] = $request->name;
        $data['description']  = $request->description;
        $sizes = $request->size_id;
        $colors = $request->color_id;
        $newProduct = Product::query()->create($data);
        $newId = $newProduct->id;
        $productDetails = [];
        foreach ($sizes as $size) {
            $sizeName = Size::find($size);
            foreach ($colors as $color) {
                $colorName = Color::find($color);
                $productDetails[] = [
                    'product_id' => $newId,
                    'brand_id' => $request->brand_id,
                    'category_id' => $request->category_id,
                    'material_id' => $request->material_id,
                    'size_id' => $size,
                    'color_id' => $color,
                    'color' => $colorName->name,
                    'size' => $sizeName->name,
                ];
            }
        }
        session(['productDetails' => $productDetails]);
        return redirect()->route('product_details.index');
    }
    public function edit($id)
    {
        $title = "Edit Product";
        $data  = Product::find($id);
        $brand = Brand::all();
        $category = Category::all();
        $material = Material::all();
        $productDetail = ProductDetail::where('product_id', $id)->first();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'title', 'productDetail','brand','category','material'));
    }
    public function update(ProductRequest $request,$id)
    {
        $product  = Product::find($id);
        $product->update([
        'name'=> $request->name,
        'description'=>$request->description
        ]);
        $productDetails = ProductDetail::where('Product_id',$id)->get();
        foreach($productDetails as $productDetail){
            $productDetail->fill([
                'category_id'=>$request->category_id,
                'brand_id'=>$request->brand_id,
                'material_id'=>$request->material_id,
            ]);
            $productDetail->save();
        }
        return back()->with('msg', "Update san pham thanh cong!");
    }
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index');
        }     
        if ($product->productDetails()->exists()) {
            $product->deleted = Product::STATUS_DEL;
            $product->save();
        } else {
            $product->delete();
        }
        
        return redirect()->route('products.index');
    }
}
