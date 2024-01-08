<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    const PATH_VIEW = "admins.categories.";
    public function index()
    {
        $title = "Categories";
        $data = Category::where('deleted',0)->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function create()
    {
        $title = "Create Category";
        return view(self::PATH_VIEW . __FUNCTION__, compact('title'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|unique:categories|regex:/[a-zA-Z]/'],
            [
                'name.required' => 'Không được để trống Categoryname',
                'name.unique' => 'Categoryname đã tồn tại',
                'name.regex' => 'Categoryname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        Category::query()->create($data);
        return back()->with('msg', 'Thêm mới thành công!');
    }
    public function edit($id)
    {
        $title = "Edit Category";
        $data = Category::find($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|regex:/[a-zA-Z]/|unique:categories,name,'. $id],
            [
                'name.required' => 'Không được để trống Categoryname',
                'name.unique' => 'Categoryname đã tồn tại',
                'name.regex' => 'Categoryname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        $category = Category::find($id);

        if ($category) {
            $category->update($data);
            return back()->with('msg', 'Cập nhật thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần cập nhật.');
        }
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->deleted = Category::STATUS_DEL;
            $category->save();
            return back()->with('msg', 'Xóa thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần xóa.');
        }
    }
}
