<?php

use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
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
Route::get('/products', [ProductController::class, 'index']); // ok
Route::post('/products', [ProductController::class, 'store']); // ok
Route::get('/products/{id}', [ProductController::class, 'show']); // ok
Route::put('/products/{id}', [ProductController::class, 'update']); // ok

Route::get('/products/{product}/prices', [PriceController::class, 'index']); // ok
Route::post('/products/{product}/prices', [PriceController::class, 'store']); // ok


Route::get('/test', function (Request $request) {
    return collect([
        'the-true' => 'i have $500,000'
    ]);
});
