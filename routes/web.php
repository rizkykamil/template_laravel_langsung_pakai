<?php

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

Route::group(['prefix' => 'nama-prefix'], function () {
    Route::get('/nama-setelah-prefix', [NamaController::class, 'NamaFunction'])->name('label.nama');
});

Route::get('/', function () {
    return view('welcome');
});