<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;


class ContactController extends Controller
{
    public function index()
  {
    return view('contacts.index');
  }

    public function confirm(Request $request)
  {
    $inputs = $request->all();
    return view('contacts.confirm', compact('inputs'));
  }

    public function store(Request $request)
    {
      return redirect('/thanks');
    }

    public function thanks()
  {
      return view('contacts.thanks');
  }

}
