<?php

use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\front\BdoctorController;
use App\Http\Controllers\front\BmajorController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\DoctorController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\LoginController;
use App\Http\Controllers\front\MajorController as FrontMajorController;
use App\Http\Controllers\front\RegisterController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', [HomeController::class, 'index'])->name('home.index');

Route::get('/contact', [ContactController::class, 'index'])->name('new.index');
Route::post('/contact/create', [ContactController::class, 'store'])->name('store.index');



Route::get('/history', function () {
    return view('front.pages.history.index')->name('front.history');
});


// // login
// Route::post('/login', [CustomLoginController::class, 'login'])->name('login');
// Route::get('/login', [CustomLoginController::class, 'LoginView'])->name('login.view')->middleware('guest');

// Route::get('/logout', [CustomLoginController::class, 'logout'])->name('logout');


// Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

// MAjor
Route::get('/majors', [FrontMajorController::class, 'index'])->name('major.index');
Route::get('majors/show/{id}', [BmajorController::class, 'show'])->name('majors.show');




Route::get('/doctors', [DoctorController::class, 'index'])->name('doctor.all');
Route::get('/AddBooking/{id}', [BdoctorController::class, 'index'])->name('add.index');


Route::get('/this-doctor', function () {
    return view('front.pages.doctors.doctor')->name('front.doctor');
});
