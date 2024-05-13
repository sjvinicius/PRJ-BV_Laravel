<?php

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
