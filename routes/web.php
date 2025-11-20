<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('home');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');