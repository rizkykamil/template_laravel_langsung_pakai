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
/*
    contoh controller
        Route::group(['prefix' => 'nama-prefix'], function(){
            Route::get('/', [NamaController::class, 'indexFunction'])->name('namaprefix.index');    
            Route::get('/create', [NamaController::class, 'createFunction'])->name('namaprefix.create');
            Route::post('/store', [NamaController::class, 'storeFunction'])->name('namaprefix.store');
            Route::get('/edit/{id}', [NamaController::class, 'editFunction'])->name('namaprefix.edit');
            Route::put('/update/{id}', [NamaController::class, 'updateFunction'])->name('namaprefix.update');
            Route::get('/show/{id}', [NamaController::class, 'showFunction'])->name('namaprefix.show');
            Route::delete('/delete/{id}', [NamaController::class, 'destroyFunction'])->name('namaprefix.destroy');
        });
*/
Route::group(['prefix' => 'nama-prefix'], function () {
    Route::get('/nama-setelah-prefix', [NamaController::class, 'NamaFunction'])->name('label.nama');
});

Route::get('/', function () {
    return view('welcome');
});

