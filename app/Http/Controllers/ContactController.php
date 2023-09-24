<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class contactController extends Controller
{
    function index()
    {
        $contacts = ContactUs::get();
        return view('admin.pages.contact.all-contact', compact('contacts'));
    }
}
