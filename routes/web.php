<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\User\ProductController as UserProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('user/products', [UserProductController::class, 'index'])->name('user.products.index');
Route::get('user/products/{id}', [UserProductController::class, 'show'])->name('user.products.show');

Route::get('/admin/products/', [AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::get('/admin/products/{id}', [AdminProductController::class, 'show'])->name('admin.products.show');
Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [AdminProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');