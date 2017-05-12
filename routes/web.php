<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'agency'], function () {
  Route::get('/login', 'AgencyAuth\LoginController@showLoginForm');
  Route::post('/login', 'AgencyAuth\LoginController@login');
  Route::post('/logout', 'AgencyAuth\LoginController@logout');

  Route::get('/register', 'AgencyAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AgencyAuth\RegisterController@register');

  Route::post('/password/email', 'AgencyAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AgencyAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AgencyAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AgencyAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'client'], function () {
  Route::get('/login', 'ClientAuth\LoginController@showLoginForm');
  Route::post('/login', 'ClientAuth\LoginController@login');
  Route::post('/logout', 'ClientAuth\LoginController@logout');

  Route::get('/register', 'ClientAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'ClientAuth\RegisterController@register');

  Route::post('/password/email', 'ClientAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'ClientAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'ClientAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'ClientAuth\ResetPasswordController@showResetForm');
});

// Route::group(['prefix' => 'admin'], function () {
//   Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
//   Route::post('/login', 'AdminAuth\LoginController@login');
//   Route::post('/logout', 'AdminAuth\LoginController@logout');

//   Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
//   Route::post('/register', 'AdminAuth\RegisterController@register');

//   Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
//   Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
//   Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
//   Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
// });
