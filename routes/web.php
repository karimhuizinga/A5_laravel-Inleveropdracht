<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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

  Route::get('/', function() {
    return view('guest');
  });
      // public routes
      Route::view('/band1', 'band1');
      Route::view('/bandtest', 'bandtest');
      Route::view('/guest', 'guest');
      Route::view('/password', 'password');
      Route::resource('bands', 'App\Http\Controllers\BandController');
      Route::resource('layouts', 'App\Http\Controllers\BandController');
      Route::get('/password', 'App\Http\Controllers\PasswordController@edit')->name('password');
      Route::post('/updatepassword/{id}', 'App\Http\Controllers\PasswordController@update')->name('updatepassword');
      Route::get('/password', 'App\Http\Controllers\NameController@edit')->name('password');
      Route::post('/updateusername/{id}', 'App\Http\Controllers\NameController@update')->name('updateusername');

  Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::get('/upload', 'App\Http\Controllers\UploadController@store')->name('upload');
  });
    Route::resource('contacts', 'App\Http\Controllers\ContactController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
