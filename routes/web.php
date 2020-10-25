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
Route::prefix('smartphones')->group(function (){
    Route::get('/smartphones', 'SmartphoneController@index')->name('smartphones.index');
    Route::get('/smartphones/{id}?action=show', 'SmartphoneController@show');
});
