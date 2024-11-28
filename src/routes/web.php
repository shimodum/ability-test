<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;





Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/admin', function () {
    return '管理画面';
})->name('admin')->middleware('auth');