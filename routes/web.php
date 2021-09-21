<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register', 'register');
Route::post('/login',[UserController::class,'login']); //Route for Login customer.
Route::post('/register',[UserController::class,'register']);
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}', [ProductController::class, 'detail']); //Route for product Details.
Route::get('search', [ProductController::class, 'search']); //Route for product Search.
Route::post('add_to_cart', [ProductController::class, 'addToCart']); //Route for Add to Cart.
Route::get('cartlist', [ProductController::class, 'cartList']); //Route for Cartlist.
Route::get('removecart/{id}', [ProductController::class, 'removeCart']); //Remove Product.
Route::get('ordernow', [ProductController::class, 'orderNow']); //Order now. 
Route::post('orderplace', [ProductController::class, 'orderPlace']); //For Place order
Route::get('myorders', [ProductController::class, 'myOrders']); //
