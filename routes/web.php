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

//Route::get('https://developers.zomato.com/api/v2.1/categories')

Route::prefix('users')->group(function(){
    //users home
    Route::get('/', 'HomeController@index')->name('user.dashboard');

    //orders
    Route::get('/orders', 'OrderController@index')->name('user.order');
    Route::get('/orders/{$id}', 'OrderController@show')->name('user.detail.order');
    Route::get('/orders/create', 'OrderController@create')->name('user.showCreateOrder');
    Route::post('/orders/create', 'OrderController@store')->name('user.submitOrder');

    //ordersdetail
    Route::get('/orders/success', 'OrderController@success')->name('user.order.success');
    Route::get('/orders/progress', 'OrderController@progress')->name('user.order.progress');
    Route::get('/orders/failed', 'OrderController@failed')->name('user.order.failed');

    //users logout
    Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
});


Route::prefix('ac2017')->group(function(){
  //admins home
  Route::get('/', 'AdminMenuController@index')->name('admin.dashboard');

  //admin register
  Route::get('/register', 'Auth\AdminLoginController@showRegistrationForm')->name('admin.register');
  Route::post('/register', 'Auth\AdminLoginController@register')->name('admin.register.submit');

  //admin login
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

  //admin logout
  Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  //admin password reset
  Route::get('/password/reset', 'Auth\AdminLoginController@logout')->name('admin.reset');

  //admins order
  Route::get('/order', 'AdminOrderController@index')->name('admin.order');
  Route::get('/order/{$id}', 'AdminOrderController@show')->name('admin.detail.order');

  //admin orders detail
  Route::get('/order/success', 'AdminOrderController@success')->name('admin.order.success');
  Route::get('/order/progress', 'AdminOrderController@progress')->name('admin.order.progress');
  Route::get('/order/failed', 'AdminOrderController@failed')->name('admin.order.failed');

});

Route::prefix('curtners')->group(function(){
  //curtner home
  Route::get('/', 'MenuController@index')->name('curtner.dashboard');

  //curtner register
  Route::get('/register', 'Auth\CurtnerLoginController@showRegistrationForm')->name('curtner.register');
  Route::post('/register', 'Auth\CurtnerLoginController@register')->name('curtner.register.submit');

  //curtner login
  Route::get('/login', 'Auth\CurtnerLoginController@showLoginForm')->name('curtner.login');
  Route::post('/login', 'Auth\CurtnerLoginController@login')->name('curtner.login.submit');

  //curtner logout
  Route::get('/logout', 'Auth\CurtnerLoginController@logout')->name('curtner.logout');
});
