<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;


class AuthController extends Controller
{
    const PATH_VIEW  = 'clients.auths.';
    public function login(){
     return view(self::PATH_VIEW.__FUNCTION__);
    }
    public function checkLogin(Request $request){
        $credentials = $request->only('email','password');
        $validator = Validator::make(
            $credentials,
            [
                'email'=> 'required|email',
                'password'=>'required|min:6'
            ],
            [
                'email.required'=>'Email khong duoc de trong.',
                'email.email' => 'Truong nay phai la Email',
                'password' => 'Password khong duoc de trong.',
                'password.min' => 'Password co do dai toi thiu la :min ki tu'
            ]
        );

        if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['user' => $user]);
            return redirect()->route('home');
        } else {
            return back()->with(['error' => 'Email hoac mat khau khong dung.'])->withInput();;
        }
    
    }
    public function register(){
        return view(self::PATH_VIEW.__FUNCTION__);
    }
    public function checkRegister(Request $request){
        $credentials = $request->all();
        $validator = Validator::make(
            $credentials,
            [
                'name'=> 'required',
                'email'=> 'required|email',
                'phone'=> 'required',
                'address' => 'required',
                'password'=> 'required|min:6',
                'password_confirmation'=>'required|min:6|same:password'
            ]
        );
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $nameRole = 'client';
        $role = Role::where('name',$nameRole)->first();
        if($role){
            $roleId = $role->id;
            $user = User::query()->create([
                'role_id'=>$roleId,
                'name'=>$request->name,
                'email' => $request->email,
                'phone'=> $request->phone,
                'address' => $request->address,
                'password'=> Hash::make($request->password)
            ]);
            if($user){
                return redirect()->route('login');
            }
            return back()->with('error', 'Dang ky khong thanh cong vui long thu lai sau.');
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
