<?php

use App\Http\Controllers\Brand\BrandController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Color\ColorController;
use App\Http\Controllers\Material\MaterialController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ProductDetail\ProductDetailController;
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
    Route::group(['prefix' => 'brand'], function () {
        Route::get('/', [BrandController::class, 'index'])->name('brands.index');
        Route::get('/create', [BrandController::class, 'create'])->name('brands.create');
        Route::post('/store', [BrandController::class, 'store'])->name('brands.store');
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brands.edit');
        Route::put('/update/{id}', [BrandController::class, 'update'])->name('brands.update');
        Route::delete('/delete/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    });
    Route::group(['prefix' => 'product_detail'], function () {
        Route::get('/', [ProductDetailController::class, 'index'])->name('product_details.index');
        Route::get('/product/{id}/create', [ProductDetailController::class, 'create'])->name('product_details.create');
        Route::get('/setting', [ProductDetailController::class, 'setting'])->name('product_details.setting');
        Route::post('/create', [ProductDetailController::class, 'postCreate'])->name('product_details.postCreate');
        Route::post('/delete-session', [ProductDetailController::class, 'deleteSession'])->name('product_details.postRemove');
        Route::get('/{id}', [ProductDetailController::class, 'show'])->name('product_details.show');
        Route::post('/store', [ProductDetailController::class, 'store'])->name('product_details.store');
        Route::get('/edit/{id}', [ProductDetailController::class, 'edit'])->name('product_details.edit');
        Route::put('/update/{id}', [ProductDetailController::class, 'update'])->name('product_details.update');
        Route::delete('/delete/{id}', [ProductDetailController::class, 'destroy'])->name('product_details.destroy');
    });

});
