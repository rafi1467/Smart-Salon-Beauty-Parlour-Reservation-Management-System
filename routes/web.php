<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('bookings.index');
});

/*
|--------------------------------------------------------------------------
| Booking Routes
|--------------------------------------------------------------------------
*/
Route::get('/chat-bot', function () {
    return view('pages.chatbot');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/admin', function () {
    return view('admin.bookings.index');
});

Route::get('/services', function () {
    return view('admin.services.create');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/bookings', [BookingController::class, 'index'])
    ->name('bookings.index');

Route::get('/bookings/{booking}', [BookingController::class, 'show'])
    ->name('bookings.show');

Route::get('/bookings/{booking}/invoice', [BookingController::class, 'invoice'])
    ->name('bookings.invoice');

Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])
    ->name('bookings.cancel');
