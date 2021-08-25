<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', App\Http\Controllers\DashboardController::class);
    Route::resource('/users', App\Http\Controllers\UsersController::class);
    Route::resource('/digital-products', App\Http\Controllers\DigitalProductsController::class);
    Route::resource('/physical-products', App\Http\Controllers\PhysicalProductsController::class);
});
