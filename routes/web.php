<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin.forms');
// });

;
// Route::get('/admin/category-form',[AdminController::class, 'categoryForm'])->name('form');
// Route::get('/admin/category-list',[AdminController::class, 'categoryList'])->name('list');

Route::prefix('/admin')->name('admin.')->group(function(){

    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');

    Route::prefix('/category')->name('category.')->group(function(){
        Route::get('/form',[AdminController::class, 'categoryForm'])->name('form');
        Route::get('/list',[AdminController::class, 'categoryList'])->name('list');
    });
    Route::prefix('/product')->name('product.')->group(function(){
        Route::get('/form',[AdminController::class, 'productForm'])->name('form');
        Route::get('/list',[AdminController::class, 'productList'])->name('list');
    });
});