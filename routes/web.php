<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CustomLoginController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [MainController::class, 'getLogin']);

Route::get('/login',[CustomLoginController::class,'login'])->name('login');
Route::post('/login-post',[CustomLoginController::class,'loginPost']);
Route::get('/logout',[CustomLoginController::class,'signOut']);

Route::get('beer', [MainController::class, 'getIndex']);
Route::post('beer', [MainController::class, 'getIndex2'])->name('postBeer');
