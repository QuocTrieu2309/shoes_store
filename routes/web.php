<?php

use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Size\SizeController;
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

Route::group(['prefix'=> 'admin'], function (){
    Route::get('/dashboard',function(){
        return view('admins.layouts.master');
    })->name('dashboard');
    Route::group(['prefix'=> 'role'], function (){
        Route::get('/',[RoleController::class,'index'])->name('roles.index');
        Route::post('/toggle-status', [RoleController::class,'toggleStatus'])->name('toggle.status');
        Route::get('/create',[RoleController::class,'create'])->name('roles.create');
        Route::post('/store',[RoleController::class,'store'])->name('roles.store');
    });
    Route::group(['prefix'=> 'size'], function (){
        Route::get('/',[SizeController::class,'index'])->name('sizes.index');
        Route::get('/create',[SizeController::class,'create'])->name('sizes.create');
        Route::post('/store',[SizeController::class,'store'])->name('sizes.store');
        Route::get('/edit/{id}',[SizeController::class,'edit'])->name('sizes.edit');
        Route::put('/update/{id}',[SizeController::class,'update'])->name('sizes.update');
        Route::delete('/delete/{id}',[SizeController::class,'destroy'])->name('sizes.destroy');
    });
});