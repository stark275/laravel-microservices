<?php

use App\Http\Controllers\OperationController;
use App\Http\Controllers\SessionController;
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

// Route::get('/products', [ProductController::class, 'index']); // ok
// Route::post('/products', [ProductController::class, 'store']); // ok
// Route::get('/products/{id}', [ProductController::class, 'show']); // ok
// Route::put('/products/{id}', [ProductController::class, 'update']); // ok

Route::get('/shops/{shop}/sessions', [SessionController::class, 'index'])->name('sessions.index'); // ok
Route::post('/shops/{shop}/sessions', [SessionController::class, 'store'])->name('sessions.store'); // ok
Route::post('/shops/{shop}/sessions/{session}/close', [SessionController::class, 'close'])->name('sessions.close'); // ok


Route::get('/sessions/{session}/operations',[OperationController::class, 'index'])->name('operations.index');
Route::post('/sessions/{session}/operations',[OperationController::class, 'store'])->name('operations.store');





Route::get('/test', function (Request $request) {
    return collect([
        'the-true' => 'i have $500,000'
    ]);
});


