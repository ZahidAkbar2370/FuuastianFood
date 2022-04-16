<?php

use Illuminate\Support\Facades\Auth;
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
Route::middleware([App\Http\Middleware\CheckLogin::class])->group(function(){
Route::get('/admin-layout', function () {
    return view('Admin.admin_layout');
});

// Admin Products

Route::get('/product', function () {
    return view('Admin.Product.add_product');
});
Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct');
Route::get('/view-products', [App\Http\Controllers\ProductController::class, 'viewProduct'])->name('viewProduct');
Route::get('/destroy-product/{id}', [App\Http\Controllers\ProductController::class, 'destroyproduct'])->name('destroy-product');
Route::get('/edit-product/{id}', [App\Http\Controllers\ProductController::class, 'editproduct'])->name('edit-product');
Route::post('/update-product', [App\Http\Controllers\ProductController::class, 'updateproduct'])->name('update-product');

// orders

Route::get('/view-orders', [App\Http\Controllers\OrderController::class, 'viewOrder']);
Route::get('/view-order-history', [App\Http\Controllers\OrderController::class, 'viewOrderHistory']);
Route::get('/order-deleverd/{id}', [App\Http\Controllers\OrderController::class , 'deleverd']);
});

// Home

Route::get("logout",function(){
        Auth::logout();
        return redirect('/');
});

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);  
Route::get('cart', [App\Http\Controllers\LandingController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\LandingController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\LandingController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\LandingController::class, 'remove'])->name('remove.from.cart');

Route::get('checkout', [App\Http\Controllers\LandingController::class, 'checkout']);
Route::post('checkout', [App\Http\Controllers\LandingController::class, 'saveCheckout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
