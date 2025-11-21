<?php

use Illuminate\Support\Facades\Route;

// Home: redirect to booking history
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/chat-bot', function () {
    return view('pages.chatbot');
});