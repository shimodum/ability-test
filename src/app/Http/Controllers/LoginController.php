<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // ログインページのビューを返す
    }

    public function login(LoginRequest $request)
    {
        // バリデーション済みデータを取得
        $validated = $request->validated();

        // ログイン処理
        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            // ログイン成功時
            return redirect()->route('admin.index');
        }

        // ログイン失敗時
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
