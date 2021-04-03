<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('login_form');
});

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
});
