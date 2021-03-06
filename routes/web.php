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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/layout', [App\Http\Controllers\HomeController::class, 'layout'])->name('layout');
Route::get('/cotizacion', [App\Http\Controllers\HomeController::class, 'cotizacion'])->name('cotizacion');
Route::get('/rfq', [App\Http\Controllers\HomeController::class, 'rfq'])->name('rfq');
