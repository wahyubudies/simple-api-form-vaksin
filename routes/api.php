<?php

use App\Http\Controllers\VaksinController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('vaksin', [VaksinController::class, 'index'])->name('vaksin.index');
Route::post('vaksin', [VaksinController::class, 'store'])->name('vaksin.store');
Route::put('vaksin/{id}', [VaksinController::class, 'update'])->name('vaksin.update');
Route::delete('vaksin/{id}', [VaksinController::class, 'destroy'])->name('vaksin.destroy');
