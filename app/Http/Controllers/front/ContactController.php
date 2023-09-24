<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function index()
    {

        return view('front.pages.contact.index');
    }

    function store(Request $request)
    {
        ContactUs::create($request->all());
        session()->flash('success', ' success send massage');
        return redirect()->route('new.index');
    }
}
