<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;


class ContactController extends Controller
{
    public function index(Request $request)
  {
    $inputs = $request->query();
    return view('contacts.index', compact('inputs'));
  }

    public function confirm(ContactRequest $request)
  {
    $inputs = $request->all();
    $category = Category::find($inputs['category'])->content;
    $genders = [
        1 => '男性',
        2 => '女性',
        3 => 'その他'
    ];
    return view('contacts.confirm', compact('inputs', 'category', 'genders'));
  }

    public function store(ContactRequest $request)
  {
    $data = $request->all();
    dd('storeメソッドが実行されました');
    $data['tel'] = $data['tel1'] . $data['tel2'] . $data['tel3'];
    Contact::create($data);
    return redirect('/thanks');
  }

    public function thanks()
  {
        return view('contacts.thanks');
  }

}
