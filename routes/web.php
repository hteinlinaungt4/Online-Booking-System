<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
// use Illuminate\Support\Facades\Auth;




Route::middleware(['admin_middleware'])->group(function () {
    Route::redirect('/', 'welcomePage');
    Route::get('welcomePage', [AuthController::class, 'welcomePage'])->name('welcome#page');
    Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
    Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');
});

//google login
Route::get('auth/google', [GoogleController::class, 'signInwithGoogle']);

Route::get('callback/google', [GoogleController::class, 'callbackToGoogle']);


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {


    // check user or admin
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    //admin home Page

    Route::middleware(['admin_middleware'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('home', [HomeController::class, 'homePage'])->name('home#page');
        });
    });


    //user home page

    Route::middleware(['user_middleware'])->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('home', [UserController::class, 'userHomePage'])->name('user#home');
        });
    });
});
