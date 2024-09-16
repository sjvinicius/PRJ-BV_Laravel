<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Middleware\IsLogged;

Route::group([
    'prefix' => '',
    'as' => 'users.',
], function () {
    Route::get('/login', [LoginController::class, "InitLoginController"]);
    Route::redirect("/", "/products");
    Route::get('/', [LayoutController::class, "index"]);
});
Route::middleware([IsLogged::class])->group(function () {

    Route::get('/products', function () {

        return view('/application/products');
    })->name("products");

    Route::get('/myreservation', function () {

        return view('/application/myreservation');
    })->name("myreservation");

    Route::get('/admin', function () {

        return view('/application/admin');
    })->name("admin");

    // Route::get('/teste', function () {

    //     return view('/system/cart');
    // })->name("cart");
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {

    Route::get('newproduct', function () {
        return view("newproducts");
    })->name("newproduct");

});

Route::post("/login", [LoginController::class, "Authentic"])->name("login");

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::post('/admin', [ProductController::class, 'store'])->name('products.store');

Route::get("/myreservation/{id}", [ReservationsController::class, "destroy"])->name('myreservation.destroy');


