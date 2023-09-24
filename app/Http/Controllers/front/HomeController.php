<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $doctors = Doctor::get();
        $majors = Major::get();
        return view('front.pages.home.index', compact('majors', 'doctors'));
    }
}
