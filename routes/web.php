<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

// Home: redirect to booking history
Route::get('/', function () {
    return redirect()->route('bookings.index');
});

// NO auth middleware for now
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');
