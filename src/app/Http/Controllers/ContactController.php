<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 入力ページ
    public function index()
    {
        return view('contacts.index');
    }

    // 確認ページ
    public function confirm(Request $request)
    {
        // バリデーションを記述（後ほど詳細設定可能）
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:10,11', // 10桁または11桁の半角数字
            'content' => 'required|string|max:120',
        ]);

        // 確認画面にデータを渡す
        return view('contacts.confirm', ['data' => $validated]);
    }

    // サンクスページ
    public function thanks()
    {
        return view('contacts.thanks');
    }
}
