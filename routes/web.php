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

Route::GET('/', 'Auth\LoginController@showLoginForm');
Route::GET('/logout', 'Auth\LoginController@logout')
     ->NAME('Logout');

Auth::routes();

Route::group(['middleware' => ['UserMiddleware']], function () {
  Route::get('/home', 'UserController@Home')
      ->NAME('Home');
  // Kategori
  Route::GET('/kategori', 'UserController@DataKategori')
      ->NAME('Data-Kategori');
  Route::POST('/kategori', 'UserController@SubmitTambahDataKategori')
      ->NAME('Post-Tambah-Data-Kategori');
  Route::GET('/kategori/{id}/hapus', 'UserController@HapusDataKategori')
      ->NAME('Delete-Data-Kategori');
  Route::POST('/kategori/{id}/edit', 'UserController@SubmitEditDataKategori')
      ->NAME('Post-Edit-Data-Kategori');
  // Supplier
  Route::GET('/supplier', 'UserController@DataSupplier')
      ->NAME('Data-Supplier');
});

Route::GET('/blank', function() {
  return view('user.Blank');
});


// Route::GET('/home', 'HomeController@index')->name('home');
