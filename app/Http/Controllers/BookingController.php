<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    function index()
    {
        $doctors = Doctor::get();
        $bookings = Booking::get();
        return view('admin.pages.booking.all-booking', compact('bookings', 'doctors'));
    }

    function create()
    {
        $doctors = Doctor::get();
        $bookings = Booking::get();
        return view('admin.pages.booking.create', compact('bookings', 'doctors'));
    }

    function store(Request $request)
    {
        Booking::create($request->all());
        session()->flash('success', ' Success added New Booking');
        return redirect()->route('booking.index');
    }
    function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('booking.index');
    }
}
