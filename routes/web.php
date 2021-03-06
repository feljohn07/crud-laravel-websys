<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SearchController;

// Return the welcome.blade.php 
Route::get('/', function () {
    return view('appointment.home');
});

Route::get('/search', [SearchController::class, 'search'])->name('web.search');

// Returns the index() of AppointmentController that also
Route::resource('/appointment', AppointmentController::class);

// Returns the index() of ContactController that also
// Route::resource('/contact', ContactController::class);

// Returns the members.blade.php
Route::get('/members', function () {
    return view('members');
});