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
    Route::get('/',\App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.main.index');
});
Route::group(['prefix'=>'admin/categories'], function () {
    Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
    Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
    Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
    Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
    Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
    Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
    Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');
});
Auth::routes();

