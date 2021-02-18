<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageItemController;
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

/**
 * get,post,patch,put,delete,options
 */
Route::get('/', [FrontendController::class, 'index']);
Route::get('/profile', [FrontendController::class, 'profile']);

/**
 * Admin Part
 * DRY
 */
Route::group(['prefix' => 'admin'], function () {
    Route::group([], function () {
        Route::resource('package', PackageController::class);
        Route::resource('package-item', PackageItemController::class);
    });
});
