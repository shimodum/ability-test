<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;

// お問い合わせフォーム入力ページ
Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

// お問い合わせフォーム確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contacts.confirm');

// サンクスページ
Route::post('/thanks', [ContactController::class, 'thanks'])->name('contacts.thanks');

// 管理画面
Route::get('/admin', function () {
    return '管理画面';
})->name('admin')->middleware('auth');

// ユーザー登録ページ
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// ログインページ
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
