<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AppointmentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/appointment/book', [AppointmentController::class,'book']);
Route::post('/appointment/cancel/{id}', [AppointmentController::class,'cancel']);
Route::post('/appointment/reschedule/{id}', [AppointmentController::class,'reschedule']);
