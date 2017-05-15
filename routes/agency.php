<?php

Route::get('/dashboard', 'DashboardController@index' )->name('agency.dashboard');

Route::post('/profile', 'ProfileController@store')->name('store.profile');


