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
      // 修正リンクからの遷移時に値を渡す
    return view('contacts.index', [
        'inputs' => $request->all(),
        ]);
  }

    public function confirm(ContactRequest $request)
  {
    $contact = $request->all();
    return view('contacts.confirm', compact('contact'));
  }

    public function store(ContactRequest $request)
  {
    Contact::create($request->all());
    return redirect('/thanks');
  }

    public function thanks()
  {
        return view('contact.thanks');
  }

}
