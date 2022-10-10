<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/auth', [AuthController::class, 'auth']);

Route::get('/shops', [ShopController::class, 'index'])->name('shops.index');
Route::post('/shops', [ShopController::class, 'store'])->name('shops.store');
Route::put('/shops/{shop}', [ShopController::class, 'update'])->name('shops.update');
Route::get('/shops/{shop}', [ShopController::class, 'show'])->name('shops.show');
Route::post('/shops/{shop}/agent', [ShopController::class, 'attach'])->name('shops.agent.attach');


Route::get('/agents', [AgentController::class, 'index'])->name('agents.index');
Route::get('/agents/{agent}', [AgentController::class, 'show'])->name('agents.show');
Route::post('/agents', [AgentController::class, 'store'])->name('agents.store');



// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

});

Route::get('/test', function (Request $request) {
    return collect([
        'the-true' => 'i have $500,000'
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
