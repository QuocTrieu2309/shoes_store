<?php

use App\Http\Controllers\Role\RoleController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix'=> 'shoes-store'], function (){
      Route::get('/home',function(){
          return view('clients.home');
      })->name('home');
});

Route::group(['prefix'=> 'admins'], function (){
    Route::get('/dashboard',function(){
        return view('admins.layouts.master');
    })->name('dashboard');
    Route::group(['prefix'=> 'roles'], function (){
        Route::get('/',[RoleController::class,'index'])->name('roles.index');
        Route::post('/toggle-status', [RoleController::class,'toggleStatus'])->name('toggle.status');
        Route::get('/create',[RoleController::class,'create'])->name('roles.create');
        Route::post('/store',[RoleController::class,'store'])->name('roles.store');
    });
});