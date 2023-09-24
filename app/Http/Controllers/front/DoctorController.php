<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    function index()
    {
        $doctors = Doctor::paginate(8);
        return view('front.pages.doctors.index', compact('doctors'));
    }
}
