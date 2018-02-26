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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
  Route::get('home', 'Admin\AdminController@index')->name('admin.dashboard');
  //----------------------------------
  Route::get('login', 'Admin\AdminLoginController@login')->name('admin.login');
  Route::post('login', 'Admin\AdminLoginController@loginAdmin')->name('admin.login.submit');
  Route::post('logout', 'Admin\AdminLoginController@logout')->name('admin.logout');
  Route::get('register', 'Admin\AdminLoginController@create')->name('admin.register');
  Route::post('register', 'Admin\AdminLoginController@store')->name('admin.register.submit');
  /*----------------------------------
  Route::get('password/reset', 'Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('password/email', 'Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

  Route::get('password/reset/{token}', 'Admin\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  Route::post('password/reset', 'Admin\AdminResetPasswordController@reset')->name('admin.password.reset.submit');
  */
});

Route::prefix('curtner')->group(function () {
  Route::get('home', 'Curtner\CurtnerController@index')->name('curtner.dashboard');
  //----------------------------------
  Route::get('login', 'Curtner\CurtnerLoginController@login')->name('curtner.login');
  Route::post('login', 'Curtner\CurtnerLoginController@loginCurtner')->name('curtner.login.submit');
  Route::post('logout', 'Curtner\CurtnerLoginController@logout')->name('curtner.logout');
  Route::get('register', 'Curtner\CurtnerLoginController@create')->name('curtner.register');
  Route::post('register', 'Curtner\CurtnerLoginController@store')->name('curtner.register.submit');
  /*----------------------------------
  Route::get('password/reset', 'Curtner\CurtnerForgotPasswordController@showLinkRequestForm')->name('curtner.password.request');
  Route::post('password/email', 'Curtner\CurtnerForgotPasswordController@sendResetLinkEmail')->name('curtner.password.email');

  Route::get('password/reset/{token}', 'Curtner\CurtnerResetPasswordController@showResetForm')->name('curtner.password.reset');
  Route::post('password/reset', 'Curtner\CurtnerResetPasswordController@reset')->name('curtner.password.reset.submit');
  */
});

Route::prefix('customer')->group(function () {
  Route::get('home', 'Customer\CustomerController@index')->name('customer.dashboard');
  //----------------------------------
  Route::get('login', 'Customer\CustomerLoginController@login')->name('customer.login');
  Route::post('login', 'Customer\CustomerLoginController@loginCustomer')->name('customer.login.submit');
  Route::post('logout', 'Customer\CustomerLoginController@logout')->name('customer.logout');
  Route::get('register', 'Customer\CustomerLoginController@create')->name('customer.register');
  Route::post('register', 'Customer\CustomerLoginController@store')->name('customer.register.submit');
  /*----------------------------------
  Route::get('password/reset', 'Curtner\CurtnerForgotPasswordController@showLinkRequestForm')->name('curtner.password.request');
  Route::post('password/email', 'Curtner\CurtnerForgotPasswordController@sendResetLinkEmail')->name('curtner.password.email');

  Route::get('password/reset/{token}', 'Curtner\CurtnerResetPasswordController@showResetForm')->name('curtner.password.reset');
  Route::post('password/reset', 'Curtner\CurtnerResetPasswordController@reset')->name('curtner.password.reset.submit');
  */
});
