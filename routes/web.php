<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');


Route::get('register', [RegisterController::class, 'show'])->name('register');
Route::get('login', [LoginController::class, 'show'])->name('login');

