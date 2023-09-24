<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BdoctorController extends Controller
{
    function index($id)
    {
        $doctors = Doctor::find($id);
        return view('front.pages.doctors.doctor', compact('doctors'));
    }
}
