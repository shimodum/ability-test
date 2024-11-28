<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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
        $data = $request->all();

        // 確認画面にデータを渡す
        return view('contacts.confirm', ['data' => $data]);
    }

    // サンクスページ
    public function thanks()
    {
        return view('contacts.thanks');
    }
}
