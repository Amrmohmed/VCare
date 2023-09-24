<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class BmajorController extends Controller
{
    //
    function show($id)
    {
        $major = Major::find($id);
        return view('front.pages.majors.brows', compact('major'));
    }
}
