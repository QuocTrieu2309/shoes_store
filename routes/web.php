<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Color\ColorController;
use App\Http\Controllers\Material\MaterialController;
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

Route::group(['prefix' => 'shoes-store'], function () {
    Route::get('/home', function () {
        return view('clients.home');
    })->name('home');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admins.layouts.master');
    })->name('dashboard');
    Route::group(['prefix' => 'role'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('roles.index');
        Route::post('/toggle-status', [RoleController::class, 'toggleStatus'])->name('toggle.status');
        Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/store', [RoleController::class, 'store'])->name('roles.store');
    });
    Route::group(['prefix' => 'size'], function () {
        Route::get('/', [SizeController::class, 'index'])->name('sizes.index');
        Route::get('/create', [SizeController::class, 'create'])->name('sizes.create');
        Route::post('/store', [SizeController::class, 'store'])->name('sizes.store');
        Route::get('/edit/{id}', [SizeController::class, 'edit'])->name('sizes.edit');
        Route::put('/update/{id}', [SizeController::class, 'update'])->name('sizes.update');
        Route::delete('/delete/{id}', [SizeController::class, 'destroy'])->name('sizes.destroy');
    });
    Route::group(['prefix' => 'color'], function () {
        Route::get('/', [ColorController::class, 'index'])->name('colors.index');
        Route::get('/create', [ColorController::class, 'create'])->name('colors.create');
        Route::post('/store', [ColorController::class, 'store'])->name('colors.store');
        Route::get('/edit/{id}', [ColorController::class, 'edit'])->name('colors.edit');
        Route::put('/update/{id}', [ColorController::class, 'update'])->name('colors.update');
        Route::delete('/delete/{id}', [ColorController::class, 'destroy'])->name('colors.destroy');
    });
    Route::group(['prefix' => 'material'], function () {
        Route::get('/', [MaterialController::class, 'index'])->name('materials.index');
        Route::get('/create', [MaterialController::class, 'create'])->name('materials.create');
        Route::post('/store', [MaterialController::class, 'store'])->name('materials.store');
        Route::get('/edit/{id}', [MaterialController::class, 'edit'])->name('materials.edit');
        Route::put('/update/{id}', [MaterialController::class, 'update'])->name('materials.update');
        Route::delete('/delete/{id}', [MaterialController::class, 'destroy'])->name('materials.destroy');
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });
});
