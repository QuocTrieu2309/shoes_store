<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    const PATH_VIEW = "admins.brands.";
    public function index()
    {
        $title = "Brands";
        $data = Brand::where('deleted',0)->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function create()
    {
        $title = "Create Brand";
        return view(self::PATH_VIEW . __FUNCTION__, compact('title'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|unique:brands|regex:/[a-zA-Z]/'],
            [
                'name.required' => 'Không được để trống Brandname',
                'name.unique' => 'Brandname đã tồn tại',
                'name.regex' => 'Brandname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        Brand::query()->create($data);
        return back()->with('msg', 'Thêm mới thành công!');
    }
    public function edit($id)
    {
        $title = "Edit Brand";
        $data = Brand::find($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|regex:/[a-zA-Z]/|unique:brands,name,'. $id],
            [
                'name.required' => 'Không được để trống Brandname',
                'name.unique' => 'Brandname đã tồn tại',
                'name.regex' => 'Brandname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        $brand = Brand::find($id);

        if ($brand) {
            $brand->update($data);
            return back()->with('msg', 'Cập nhật thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần cập nhật.');
        }
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $brand->deleted = Brand::STATUS_DEL;
            $brand->save();
            return back()->with('msg', 'Xóa thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần xóa.');
        }
    }
}
