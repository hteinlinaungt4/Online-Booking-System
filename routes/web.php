<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;




Route::redirect('/', 'loginPage');
Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    //google login
    Route::get('auth/google', [GoogleController::class, 'signInwithGoogle'])->name('google#auth');

    Route::get('callback/google', [GoogleController::class, 'callbackToGoogle']);

    // check user or admin
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    //admin home Page
    Route::group(['prefix' => 'admin', 'middleware' => 'admin_middleware'], function () {
        Route::get('home', [HomeController::class, 'homePage'])->name('home#page');
    });


    //user home page
    Route::group(['prefix' => 'user', 'middleware' => 'user_middleware'], function () {
        Route::get('home', [UserController::class, 'userHomePage'])->name('user#home');
    });
});
