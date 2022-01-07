<?php

use App\Http\Controllers\DoctorsAppointment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// setup the add at the first time 
Route::get('/firsttimesetup', [DoctorsAppointment::class, 'firstTimeSetup']);

require __DIR__ . '/auth.php';
