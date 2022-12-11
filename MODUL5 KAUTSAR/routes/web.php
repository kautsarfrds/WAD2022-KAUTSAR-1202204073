<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('HomeafterKautsar');
});

Route::get('RegisterKautsar', [UserController::class, 'RegisterKautsar'])->name('RegisterKautsar');
Route::post('RegisterKautsar', [UserController::class, 'RegisterKautsar_action'])->name('RegisterKautsar.action');
Route::get('LoginKautsar', [UserController::class, 'LoginKautsar'])->name('LoginKautsar');
Route::post('LoginKautsar', [UserController::class, 'LoginKautsar_action'])->name('LoginKautsar.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::resource('product', ProductController::class);