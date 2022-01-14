<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Return the welcome.blade.php 
// Route::get('/', function () {
//     return view('welcome');
// });

// Returns the index() of ContactController that also
Route::resource('/contact', ContactController::class);

// Returns the members.blade.php
Route::get('/members', function () {
    return view('members');
});