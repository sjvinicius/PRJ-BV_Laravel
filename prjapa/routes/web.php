<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\LayoutController;

// Route::get('/', function () {
//     return view('/system/layout');
// });
// ? Montagem do header e footer em um arquivo único
Route::view('/', "system.layout");
Route::view('/layout', "system.prelayout");

Route::get('/products', function () {

    return view('/application/products');
});

Route::get('/header', [HeaderController::class, 'index'])->name("header.index");