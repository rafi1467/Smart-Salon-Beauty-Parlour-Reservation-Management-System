<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/home', function () {
    return view('pages.home');
});

/*
|--------------------------------------------------------------------------
| Chatbot Routes
|--------------------------------------------------------------------------
*/

Route::get('/chat-bot', function () {
    return view('pages.chatbot');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/



Route::get('/admin', function () {
    return view('admin.bookings.index');
});

Route::get('/services', function () {
    return view('admin.services.create');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

/*
|--------------------------------------------------------------------------
| Appointment Routes
|--------------------------------------------------------------------------
*/

Route::get('/appointment/book', function () {
    return view('appointment.book');
});

Route::get('/appointment', function () {
    return view('appointment.booking');
});

/*
|--------------------------------------------------------------------------
| Bookings Routes
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

/*
|--------------------------------------------------------------------------
| Payment Routes
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/payment', function () {
    return view('sslpaymentgatway.exampleEasycheckout');
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END