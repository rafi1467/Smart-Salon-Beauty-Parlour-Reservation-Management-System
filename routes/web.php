<?php

use Illuminate\Support\Facades\Route;

// Home: redirect to booking history
Route::get('/', function () {
    return redirect()->route('bookings.index');
});