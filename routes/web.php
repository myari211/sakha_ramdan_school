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
    Route::get('/', 'Guest\GuestController@index')->name('home');
    Route::get('/facilities', 'Guest\GuestController@facilites')->name('facilities');

    //form-pendaftaran
    Route::get('/forms', 'Guest\FormController@index')->name('forms');

    //galery
    Route::get('/gallery/tkj', 'Guest\GuestController@gallery_smk');
    Route::get('/gallery/tbsm', 'Guest\GuestController@gallery_tbsm');
    Route::get('/gallery/akl', 'Guest\GuestController@gallery_akl');

    //profile
    Route::get('/smk', 'Guest\GuestController@smk')->name('smk');
    Route::get('/smp', 'Guest\GuestController@smp')->name('smp');
    Route::get('/ut', 'Guest\GuestController@ut');

    //forms
    Route::post('/guest/send', 'Guest\GuestController@pendaftaran')->name('forms_pendaftaran');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin
Route::middleware('role:admin')->group( function() {
    Route::get('/admin/dashboard', 'Admin\AdminController@dashboard')->name('admin.page');
    Route::get('/admin/pendaftar', 'Admin\AdminController@pendaftar');
});

Route::get('user-page', function()  {
    return 'Halaman Untuk User';
});