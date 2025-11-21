<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
// Home: redirect to booking history
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/chat-bot', function () {
    return view('pages.chatbot');
});

Route::get('/', function () {
    return redirect()->route('bookings.index');
});

// Booking routes
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

// Booking confirmation / details
Route::get('/bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');

// Booking invoice
Route::get('/bookings/{booking}/invoice', [BookingController::class, 'invoice'])->name('bookings.invoice');

// Cancel booking
Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

