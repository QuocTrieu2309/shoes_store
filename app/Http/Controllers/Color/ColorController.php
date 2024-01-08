<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    const PATH_VIEW = "admins.colors.";
    public function index()
    {
        $title = "Colors";
        $data = Color::where('deleted',0)->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function create()
    {
        $title = "Create Color";
        return view(self::PATH_VIEW . __FUNCTION__, compact('title'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|unique:colors|regex:/[a-zA-Z]/'],
            [
                'name.required' => 'Không được để trống Colorname',
                'name.unique' => 'Colorname đã tồn tại',
                'name.regex' => 'Colorname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        Color::query()->create($data);
        return back()->with('msg', 'Thêm mới thành công!');
    }
    public function edit($id)
    {
        $title = "Edit Color";
        $data = Color::find($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact(['data', 'title']));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            ['name' => 'required|regex:/[a-zA-Z]/|unique:colors,name,'. $id],
            [
                'name.required' => 'Không được để trống Colorname',
                'name.unique' => 'Colorname đã tồn tại',
                'name.regex' => 'Colorname phải là chữ',
            ]
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        $Color = Color::find($id);

        if ($Color) {
            $Color->update($data);
            return back()->with('msg', 'Cập nhật thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần cập nhật.');
        }
    }
    public function destroy($id)
    {
        $Color = Color::find($id);
        if ($Color) {
            $Color->deleted = Color::STATUS_DEL;
            $Color->save();
            return back()->with('msg', 'Xóa thành công!');
        } else {
            return back()->with('error', 'Không tìm thấy bản ghi cần xóa.');
        }
    }
}
