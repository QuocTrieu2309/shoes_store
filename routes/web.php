<?php

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
});