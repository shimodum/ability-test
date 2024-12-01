<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    // 入力ページ
    public function index()
    {
        return view('contacts.index');
    }

    // 確認ページ
    public function confirm(ContactRequest $request)
    {
        $validatedData = $request->validated(); // バリデーション済みデータを取得

        return view('contacts.confirm', ['inputs' => $validatedData]);
    }



    // サンクスページ
    public function thanks()
    {
        return view('contacts.thanks');
    }
}
