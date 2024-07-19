<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
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

// Achat 
Route::get('achat', [FrontendController::class, 'achat'])->name('frontend.achat');
Route::get('achat-classique', [FrontendController::class, 'achat_classique'])->name('frontend.achat.classique');
Route::get('achat-touch', [FrontendController::class, 'achat_touch'])->name('frontend.achat.touch');
Route::get('achat-retro', [FrontendController::class, 'achat_retro'])->name('frontend.achat.retro');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('{user}/profile', [backendController::class, 'profile'])->name('seller.profile');

    // reset password
    Route::get('forgot-password', [backendController::class, 'forgot_password'])->middleware('guest')->name('password.request');
    Route::post('forgot-password', [backendController::class, 'reset_password'])->middleware('guest')->name('password.reset');
    Route::post('update-password', [backendController::class, 'update_password'])->middleware('guest')->name('password.update');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    // Achat step 2 ( quantity )
    Route::get('achat/{server}/{name}', [FrontendController::class, 'achat_quantity'])->name('frontend.achat.quantity');

    // Achat step 3 ( Payment )
    Route::get('achat/payment', [FrontendController::class, 'achat_payment'])->name('frontend.achat.payment');

    // Order details 
    Route::get('order_details/{ref}', [FrontendController::class, 'order_details'])->name('frontend.order.details');
});

require __DIR__.'/auth.php';
