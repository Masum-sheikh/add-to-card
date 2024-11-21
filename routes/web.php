<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\categoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrondendController;
use Illuminate\Support\Facades\Auth;


use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\CartController;
//add to cart
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');




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

Route::get('/', [FrondendController::class, 'welcome'])->name('welcome');
Route::get('/frontend/details/{id}', [FrondendController::class, 'details'])->name('details');

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('categori', categoriController::class);
Route::resource('products', ProductController::class);
