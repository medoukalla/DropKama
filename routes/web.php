<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\FrontendController;
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

// index page
route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

// vendre page 
Route::get('vendre', [FrontendController::class, 'vendre'])->name('frontend.vendre');

// Echange 
Route::get('echange', [FrontendController::class, 'echange'])->name('frontend.echange');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('{user}/profile', [backendController::class, 'profile'])->name('seller.profile');

    // reset password
    Route::get('forgot-password', [backendController::class, 'forgot_password'])->middleware('guest')->name('password.request');
    Route::post('forgot-password', [backendController::class, 'reset_password'])->middleware('guest')->name('password.reset');
    Route::post('update-password', [backendController::class, 'update_password'])->middleware('guest')->name('password.update');

});
