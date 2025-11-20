<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

// Home: for now just redirect to booking history
Route::get('/', function () {
    return redirect()->route('bookings.index');
});

// Protect these with auth if your team has login set up
Route::middleware('auth')->group(function () {
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');
});

// If you DON'T have auth yet and it gives an error,
// you can temporarily remove "middleware('auth')" and just keep:
// Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
// Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

