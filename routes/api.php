<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
    membuat contoh api
        Route::prefix('v1')->group(function () {
            Route::group(['prefix' => 'nama-prefix'], function () {
                Route::get('/', [NamaController::class, 'indexFunction'])->name('v1.namaprefix.index');
                Route::get('/create', [NamaController::class, 'createFunction'])->name('v1.namaprefix.create');
                Route::post('/store', [NamaController::class, 'storeFunction'])->name('v1.namaprefix.store');
                Route::get('/show/{id}', [NamaController::class, 'showFunction'])->name('v1.namaprefix.show');
                Route::put('/update/{id}', [NamaController::class, 'updateFunction'])->name('v1.namaprefix.update');
                Route::delete('/destroy/{id}', [NamaController::class, 'destroyFunction'])->name('v1.namaprefix.destroy');
            });
        }); 
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


