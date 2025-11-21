<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');   // loads resources/views/home.blade.php
})->name('home');


/*
|--------------------------------------------------------------------------
| Services Page (Fix for services.index error)
|--------------------------------------------------------------------------
|
| Make sure you have: resources/views/services.blade.php
| If your teammate made a services page, it will now work.
|
*/

Route::get('/services', function () {
    return view('services');
})->name('services.index');


/*
|--------------------------------------------------------------------------
| Booking Routes
|--------------------------------------------------------------------------
*/

Route::get('/bookings', [BookingController::class, 'index'])
    ->name('bookings.index');

Route::get('/bookings/{booking}', [BookingController::class, 'show'])
    ->name('bookings.show');

Route::get('/bookings/{booking}/invoice', [BookingController::class, 'invoice'])
    ->name('bookings.invoice');

Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])
    ->name('bookings.cancel');
