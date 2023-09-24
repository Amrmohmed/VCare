<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    function index()
    {
        // dd(Auth::user());
        $user_count = User::count();
        $doctors_count = Doctor::count();
        $majors_count = Major::count();
        $booking_count = Booking::count();
        return view(
            'admin.pages.home.index',
            compact('user_count', 'doctors_count', 'majors_count', 'booking_count')
        );
    }
}
