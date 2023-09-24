<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    //
    function index()
    {
        $majors = Major::get();
        return view('front.pages.majors.index', compact('majors'));
    }
}
