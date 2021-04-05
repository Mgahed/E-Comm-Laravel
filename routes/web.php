<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\CartController;
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
Route::get('/', function () {
    return redirect()->route('products_home');
});

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
})->name('logout');

Route::get('/login', function () {
    return view('login');
})->name('login_form');

Route::get('/signup', function () {
    return view('login');
})->name('signup_form');

Route::group(['prefix' => 'user'], function () {
    Route::post('/login', [UserController::class, 'login'])->name('user_login');
});

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products_home');
    Route::get('details/{id}', [ProductController::class, 'details'])->name('product_details');
    Route::get('search', [ProductController::class, 'search'])->name('product_search');
    Route::post('add-to-cart', [ProductController::class, 'add_to_cart'])->name('product_add_to_cart');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CartController::class, 'cart_list'])->name('cart');
    Route::get('/remove/{id}', [CartController::class, 'cart_remove'])->name('cart_remove');
    Route::get('count', [CartController::class, 'cart_count'])->name('get_from_cart');
});
