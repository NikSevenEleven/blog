<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',\App\Http\Controllers\Main\IndexController::class);

Route::group(['prefix'=>'admin'], function () {
    Route::get('/',\App\Http\Controllers\Admin\Main\IndexController::class);
});
Auth::routes();

