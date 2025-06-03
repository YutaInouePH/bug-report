<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \Illuminate\Support\Facades\Mail::raw('This is a test email', function ($message) {
        $message->to('test@test.com')->subject('Test Email');
    });

    return 'Message Sent!';
});
