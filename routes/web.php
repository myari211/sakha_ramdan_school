<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//guest
Route::get('/', 'Guest\GuestController@index');
Route::get('/facilities', 'Guest\GuestController@facilites');

//form-pendaftaran
Route::get('/forms', 'Guest\FormController@index');