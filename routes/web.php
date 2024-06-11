<?php

use App\Http\Controllers\AndShopController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CustomerMiddleware;
use App\Models\Brand;
use Illuminate\Support\Facades\Route;


Route::get('/',[AndShopController::class,'index'])->name('home');
Route::get('/product/category/{id}',[AndShopController::class,'category'])->name('category');
Route::get('/detail/{id}',[AndShopController::class,'detail'])->name('detail');


Route::get('/cart/show',[CartController::class,'index'])->name('cart.show');
Route::post('/cart/add/{id}',[CartController::class,'addCart'])->name('cart.add');
Route::post('/cart/update/{row_id}',[CartController::class,'cartUpdate'])->name('cart.update');
Route::post('/cart/remove/{row_id}',[CartController::class,'remove'])->name('cart.remove');


Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/customer-email-check',[CheckoutController::class,'customerEmailCheck'])->name('customer-email-check');

Route::post('/new/order',[CheckoutController::class,'newOrder'])->name('new.order');

Route::get('/oder/complete',[CheckoutController::class,'orderComplete'])->name('order.complete');
Route::get('/customer/logout',[CustomerAuthController::class,'logout'])->name('customer.logout');

Route::middleware([CustomerMiddleware::class])->group(function () {
    Route::get('customer/account',[CustomerAuthController::class,'customerAccount'])->name('customer.account');

});

Route::get('/customer/login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::post('/customer/logout',[CustomerAuthController::class,'loginCheck'])->name('customer.loginCheck');
Route::get('customer/register',[CustomerAuthController::class,'register'])->name('customer.register');
Route::post('customer/register',[CustomerAuthController::class,'newCustomer'])->name('customer.register');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    // Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('category',CategoryController::class);

    Route::resource('brand',BrandController::class);

    Route::resource('subCategory',SubCategoryController::class);

    Route::resource('banner',BannerController::class);

    Route::get('/extra/add',[ExtraController::class,'extra'])->name('extra.add');

    Route::get('user/create',[UserController::class,"create"])->name('user.create');
    Route::post('user/store',[UserController::class,"store"])->name('user.store');
    Route::get('user/manage',[UserController::class,"index"])->name('user.index');
    Route::get('user/edit/{id}',[UserController::class,"edit"])->name('user.edit');
    Route::post('user/update/{id}',[UserController::class,"update"])->name('user.update');
    Route::post('user/delete/{id}',[UserController::class,"delete"])->name('user.delete');

    Route::resource('unit',UnitController::class);
    Route::resource('product',ProductController::class);
    Route::get('/estea/product/grid/',[ExtraController::class,'productShow'])->name('product.grid');

    Route::get('/order/manage',[OrderController::class,'index'])->name('order.manage');
    Route::get('/order/detail/{id}',[OrderController::class,'detail'])->name('order.detail');
    Route::post('/order/edit/{id}',[OrderController::class,'edit'])->name('order.edit');
    Route::get('/order/invoice/{id}',[OrderController::class,'invoice'])->name('order.invoice');


});
