<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    const PATH_VIEW = "admins.sizes.";
    public function index()
    {
        $title = "Sizes";
        $data = Size::where('deleted',0)->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function create()
    {
        $title = "Create Size";
        return view(self::PATH_VIEW . __FUNCTION__, compact('title'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|unique:sizes|numeric|between:35,45'],
            [
                'name.required' => 'Không được để trống Sizename',
                'name.unique' => 'Sizename đã tồn tại',
                'name.numeric' => 'Sizename phải là số',
                'name.between' => 'Sizename phải nằm trong khoảng :min - :max',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        Size::query()->create($data);
        return back()->with('msg', 'Thêm mới thành công!');
    }
    public function edit($id)
    {
        $title = "Edit Size";
        $data = Size::find($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|numeric|between:35,45|unique:sizes,name,' . $id,],
            [
                'name.required' => 'Không được để trống Sizename',
                'name.unique' => 'Sizename đã tồn tại',
                'name.numeric' => 'Sizename phải là số',
                'name.between' => 'Sizename phải nằm trong khoảng :min - :max',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        $size = Size::find($id);

        if ($size) {
            $size->update($data);
            return back()->with('msg', 'Cập nhật thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần cập nhật.');
        }
    }
    public function destroy($id)
    {
        $size = Size::find($id);
        if ($size) {
            $size->deleted = Size::STATUS_DEL;
            $size->save();
            return back()->with('msg', 'Xóa thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần xóa.');
        }
    }
}
