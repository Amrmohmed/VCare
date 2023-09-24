<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\UserController;
use App\Models\ContactUs;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Admin - Dashboard
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.index');
    // Majors
    Route::get('/all-majors',  [MajorController::class, 'index'])->name('majors.index');
    Route::get('major/create', [MajorController::class, 'create'])->name('major.create');
    Route::get('/majors/{id}', [MajorController::class, 'edit'])->name('major.edit');
    Route::put('majors/{id}', [MajorController::class, 'update'])->name('major.update');
    Route::post('/majors', [MajorController::class, 'store'])->name('major.store');
    Route::delete('/majors/{id}', [MajorController::class, 'destroy'])->name('major.delete');
    Route::get('major/show/{id}', [MajorController::class, 'show'])->name('majors.show.all');


    // Doctors
    Route::get('/all-doctors',  [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('doctors/show/{id}',  [DoctorController::class, 'show'])->name('doctor.show');
    Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('/store', [DoctorController::class, 'store'])->name('doctor.add');
    Route::get('/doctors/{id}',  [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::put('/doctors/{id}',  [DoctorController::class, 'update'])->name('doctor.update');
    Route::delete('/delete/{id}', [DoctorController::class, 'destroy'])->name('doctors.delete');



    // Users
    Route::get('/all-users',  [UserController::class, 'index'])->name('user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('user/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');


    // Booking
    Route::get('/all-booking',  [BookingController::class, 'index'])->name('booking.index');
    Route::get('booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::delete('booking/delete/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');


    // contact us
    Route::get('/all-contact',  [contactController::class, 'index'])->name('contact.index');
});




// Route::get('/contact', [contactController::class, 'index'])->name('contact.index');
