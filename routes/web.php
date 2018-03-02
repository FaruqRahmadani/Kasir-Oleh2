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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::group(['middleware' => ['UserMiddleware']], function () {
  Route::get('/home', 'UserController@Home')
      ->name('Home');
});


// Route::get('/home', 'HomeController@index')->name('home');
