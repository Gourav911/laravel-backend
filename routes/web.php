<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserControler;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserControler::class,'login'] );

Route::get('/',[ProductController::class,"index"])->middleware(UserAuth::class);