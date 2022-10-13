<?php

use App\Http\Controllers\Operation\OperationController;
use App\Http\Controllers\Operation\SellController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\User\AdminController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/shops', [ShopController::class, 'index'])->name('admin.shops.index');
Route::get('/admin/shops/create', [ShopController::class, 'create'])->name('admin.shops.create');
Route::get('/admin/shops/show/{id}', [ShopController::class, 'show'])->name('admin.shops.show');
Route::post('/admin/shops/show/{id}', [ShopController::class, 'update'])->name('admin.shops.update');
Route::post('/admin/shops/show/{id}/agents/attach', [ShopController::class, 'attach'])->name('admin.shops.agents.attach');

Route::post('/admin/shops', [ShopController::class, 'store'])->name('admin.shops.store');

Route::get('/admin/shops/{id}/operations', [OperationController::class, 'index'])->name('operations.index');
Route::get('/admin/shops/{id}/operations/sells', [SellController::class, 'index'])->name('operations.sells.index');

Route::get('/admin/accounts/{id}/products', [ProductController::class, 'index'])->name('accounts.products.index');
Route::get('/admin/accounts/{id}/products/create', [ProductController::class, 'create'])->name('accounts.products.create');
Route::post('/admin/accounts/{id}/products/store', [ProductController::class, 'store'])->name('accounts.products.store');





Route::get('/test', function (Request $request) {

    // $res = Http::accept('application/json')
    //             ->withToken('7|EoJu83V2RripUsbE9RerTcYQn13Q9swg1GHPrTHn')
                 // ->post('http://127.0.0.1:8001/api/logout');
    // $res = Http::accept('application/json')
    //             ->get('http://127.0.0.1:8001/api/get');

    dd(Session::get('apiUser'));
});
