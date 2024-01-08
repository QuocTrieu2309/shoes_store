<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Material;

class MaterialController extends Controller
{
    const PATH_VIEW = "admins.materials.";
    public function index()
    {
        $title = "Materials";
        $data = Material::where('deleted',0)->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function create()
    {
        $title = "Create Material";
        return view(self::PATH_VIEW . __FUNCTION__, compact('title'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|unique:materials|regex:/[a-zA-Z]/'],
            [
                'name.required' => 'Không được để trống Materialname',
                'name.unique' => 'Materialname đã tồn tại',
                'name.regex' => 'Materialname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        Material::query()->create($data);
        return back()->with('msg', 'Thêm mới thành công!');
    }
    public function edit($id)
    {
        $title = "Edit Material";
        $data = Material::find($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|regex:/[a-zA-Z]/|unique:materials,name,'. $id],
            [
                'name.required' => 'Không được để trống Materialname',
                'name.unique' => 'Materialname đã tồn tại',
                'name.regex' => 'Materialname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        $material = Material::find($id);

        if ($material) {
            $material->update($data);
            return back()->with('msg', 'Cập nhật thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần cập nhật.');
        }
    }
    public function destroy($id)
    {
        $material = Material::find($id);
        if ($material) {
            $material->deleted = Material::STATUS_DEL;
            $material->save();
            return back()->with('msg', 'Xóa thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần xóa.');
        }
    }
}