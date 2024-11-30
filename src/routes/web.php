<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

// お問い合わせフォーム入力ページ
Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

// お問い合わせフォーム確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contacts.confirm');

// サンクスページ
Route::post('/thanks', [ContactController::class, 'thanks'])->name('contacts.thanks');

// 管理画面
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/search', [AdminController::class, 'search'])->name('search');
    Route::get('/export', [AdminController::class, 'export'])->name('export');
    Route::get('/{id}', [AdminController::class, 'show'])->name('show');
});

// ユーザー登録ページ
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// ログインページ（表示用）
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// ログイン処理
Route::post('/login', [LoginController::class, 'login']);

// ログアウト処理
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
