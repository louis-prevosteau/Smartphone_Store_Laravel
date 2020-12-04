<?php

use App\Smartphone;

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

Route::resource('smartphones', 'SmartphoneController');
Route::get('/search', 'SmartphoneController@search')->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apropos', 'HomeController@apropos')->name('apropos');
Route::get('/contact', 'HomeController@contact')->name('contact');

