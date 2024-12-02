<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        // 名前検索
        if ($request->has('name') && $request->input('name') !== null) {
            $query->where(function ($query) use ($request) {
                $query->where('first_name', 'like', '%' . $request->input('name') . '%')
                      ->orWhere('last_name', 'like', '%' . $request->input('name') . '%');
            });
        }

        // 性別検索
        if ($request->has('gender') && $request->input('gender') !== 'all') {
            $query->where('gender', $request->input('gender'));
        }

        // カテゴリ検索
        if ($request->has('category_id') && $request->input('category_id') !== 'all') {
            $query->where('category_id', $request->input('category_id'));
        }

        // ページネーション
        $contacts = $query->paginate(7);

        return view('admin.index', compact('contacts'));
    }
}
