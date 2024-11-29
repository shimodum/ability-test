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
        // フォームから送信された全データを取得
        $inputs = $request->all();

        // 確認画面で使用するデータを整える
        $categoryName = $inputs['category']; // 選択したカテゴリ名を取得

        // ビューにデータを渡す
        return view('contacts.confirm', [
            'inputs' => $inputs,
            'category' => $categoryName,
        ]);
    }


    // サンクスページ
    public function thanks()
    {
        return view('contacts.thanks');
    }
}
