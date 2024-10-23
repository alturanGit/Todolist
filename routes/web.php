<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('/demo', function() {
    return view('tododemo');
})->name('demo');

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginAuth'])->name('login.auth');
Route::get('/todo', [LoginController::class, 'showTodo'])->middleware('auth')->name('todo');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/email/verify', function() {
    return view('Auth.verifyemail');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:3,1'])->name('verification.send');






Route::post('/task/store', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');

Route::post('/task/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');








