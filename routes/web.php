<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Public pages
|--------------------------------------------------------------------------
*/

// Home page (the nice “Welcome to Smart Salon”)
Route::get('/', function () {
    return view('home');   // resources/views/home.blade.php
})->name('home');

// Optional services page if you have one
Route::view('/services', 'services')->name('services');


/*
|--------------------------------------------------------------------------
| Booking routes
|--------------------------------------------------------------------------
*/

Route::prefix('bookings')->name('bookings.')->group(function () {
    // Booking history list
    Route::get('/', [BookingController::class, 'index'])->name('index');

    // (If you have a booking form)
    Route::get('/create', [BookingController::class, 'create'])->name('create');
    Route::post('/', [BookingController::class, 'store'])->name('store');

    // Booking confirmation / details
    Route::get('/{booking}', [BookingController::class, 'show'])->name('show');

    // Invoice
    Route::get('/{booking}/invoice', [BookingController::class, 'invoice'])->name('invoice');

    // Cancel booking
    Route::post('/{booking}/cancel', [BookingController::class, 'cancel'])->name('cancel');
});
