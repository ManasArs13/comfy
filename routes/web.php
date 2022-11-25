<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServicController;

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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/catalog/{id}', [HomeController::class, 'catalog'])->name('catalog');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');

Route::get('/order/{id}', [OrderController::class, 'order'])->name('order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');


# Администрирование
Route::get('/admin', [OrderController::class, 'admin'])->middleware(['auth', 'verified'])->name('admin');

Route::resource('/admin/category', CategoryController::class)->middleware(['auth', 'verified']);
Route::resource('/admin/product', ProductController::class)->middleware(['auth', 'verified']);
//Route::resource('/admin/servic', ServicController::class)->middleware(['auth', 'verified']);

Route::get('admin/complete/order/{id}', [OrderController::class, 'orderComplete'])->middleware(['auth', 'verified'])->name('complete');
Route::get('admin/delete/order/{id}', [OrderController::class, 'orderReturn'])->middleware(['auth', 'verified'])->name('return');
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
require __DIR__.'/auth.php';
