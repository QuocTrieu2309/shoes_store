<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    const PATH_VIEW = 'admins.roles.';
    public function index(){
      $data = Role::all();
      $title = "Roles";
      return view(self::PATH_VIEW.__FUNCTION__,compact(['data','title']));
    }

    public function create(){
        $title= "Create Role";
        return view(self::PATH_VIEW.__FUNCTION__,compact('title'));
    }
    public function toggleStatus(Request $request)
    {
        try {
            $roleId = $request->input('role_id');
            $role = Role::find($roleId);
            if ($role) {
                $role->status = ($role->status == Role::STATUS_ACTIVE) ? Role::STATUS_INACTIVE : Role::STATUS_ACTIVE;
                $role->save();
    
                return response()->json(['status' => 'success', 'new_status' => $role->status]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    public function store(Request $request){
        $data = $request->all();
        $validator =  Validator::make(
          $data,
          ['name'=>'required'],
          ['name.required'=>'Không được để trống tên Role.']
        );
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Thêm mới thất bại. Vui lòng kiểm tra lại thông tin.');
        }
        Role::query()->create($data);
        return back()->with('msg', "Thêm mới thành công!");
    }
}
