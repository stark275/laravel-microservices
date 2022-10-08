<?php

use App\Http\Controllers\ShopController;
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



// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// Route::get('/admin/shops', [ShopController::class, 'index'])->name('admin.shops.index');

// Route::get('/admin/shops/{id}/operations', [OperationController::class, 'index'])->name('operations.index');
// Route::get('/admin/shops/{id}/operations/sells', [SellController::class, 'index'])->name('operations.sells.index');



Route::get('/', function () {
    return view('welcome');
});
