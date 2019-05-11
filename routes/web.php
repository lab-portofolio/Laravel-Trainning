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

// Route Group For Basic Website
Route::prefix('basic-website')->group(function() {
    
    // Load View Home
    Route::get('/', 'BasicWebsiteController@index')->name('basic-index');
    // Load View About
    Route::get('/about', 'BasicWebsiteController@about')->name('basic-about');
    // Load View Services
    Route::get('/services', 'BasicWebsiteController@services')->name('basic-services');

});