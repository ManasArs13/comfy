<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog/{id}', [HomeController::class, 'catalog'])->name('catalog');

Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/product', ProductController::class);
Route::resource('/admin/servic', ServicController::class);
Route::get('admin/complete/order/{id}', [HomeController::class, 'orderComplete'])->name('complete');
Route::get('admin/delete/order/{id}', [HomeController::class, 'orderReturn'])->name('return');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
