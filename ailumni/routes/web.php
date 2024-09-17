<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomRegisterController;
use App\Http\Controllers\Auth\CustomLoginController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register', [CustomRegisterController::class, 'showRegistrationForm'])->name('register.custom');
Route::post('register', [CustomRegisterController::class, 'register']);

Route::get('login', [CustomLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomLoginController::class, 'login'])->name('login.custom');
Route::post('logout', [CustomLoginController::class, 'logout'])->name('logout');



