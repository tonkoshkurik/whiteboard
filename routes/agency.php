<?php

Route::get('/dashboard', function () {
    
    $users = Auth::user();

    return view('agency.dashboard');
})->name('home');

