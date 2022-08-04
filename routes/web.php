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

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('central.index');
Route::get('/register', [App\Http\Controllers\HomeController::class,'register'])->name('central.register');
Route::post('/register', [App\Http\Controllers\Central\RegisterController::class,'create'])->name('central.register.create');
Route::get('/contact', [App\Http\Controllers\HomeController::class,'contact'])->name('central.contact');



