<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');


Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('user.store');


Route::get('verification', function(){
    return view ('Auth.verify-email');
})->name('verification.notice');

Route::get('login', [LoginController::class, 'show'])->name('login');

