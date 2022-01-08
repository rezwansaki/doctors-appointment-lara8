<?php

use App\Http\Controllers\DoctorsAppointment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// setup the add at the first time 
Route::get('/firsttimesetup', [DoctorsAppointment::class, 'firstTimeSetup']);

// about page 
Route::get('/about', [DoctorsAppointment::class, 'about']);

// contact page 
Route::get('/contact', [DoctorsAppointment::class, 'contact']);

// doctorarea page 
Route::get('/doctorarea', [DoctorsAppointment::class, 'doctorArea']);

// assistantarea page
Route::get('/assistantarea', [DoctorsAppointment::class, 'assistantArea']);

// appointmentfail page
Route::get('/appointmentfail', [DoctorsAppointment::class, 'appointmentFail']);

// appointmentsuccess page
Route::get('/appointmentsuccess', [DoctorsAppointment::class, 'appointmentSuccess']);

// makeanappointment page
Route::get('/makeanappointment', [DoctorsAppointment::class, 'makeAnAppointment']);

// login
Route::get('/login', [DoctorsAppointment::class, 'login'])->middleware('guest')->name('login');
Route::get('/forgot-password', [DoctorsAppointment::class, 'forgotPassword'])->middleware('guest')->name('password.request');
Route::get('/register', [DoctorsAppointment::class, 'register'])->middleware('guest')->name('register');

// it comes from the breeze or spatie package automatically 
require __DIR__ . '/auth.php';
