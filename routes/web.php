<?php

use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\ItemController as FrontendItemController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\OrderController as FrontendOrderController;
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {
    Route::view('/', 'backend.master');

    Route::resource('menus', MenuController::class);
    Route::resource('items', ItemController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', UserController::class);
});

Route::get('/', function () {
    return view('frontend.index');
});

Route::group(['as' => 'f.'], function () {


    Route::get('menus', [FrontendMenuController::class, 'index'])->name('menus');
    Route::get('items', [FrontendItemController::class, 'index'])->name('items');

    Route::get('carts', [CartController::class, 'index'])->name('carts');
    Route::post('carts', [CartController::class, 'store'])->name('carts.store');
    Route::get('carts/{id}/delete', [CartController::class, 'destroy'])->name('carts.destroy');

    Route::resource('orders', FrontendOrderController::class);

    Route::get('profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
