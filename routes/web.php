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

// Index Page
Route::get('/', 'PageController@getIndex')->name('index');

// filter
Route::get('/filters/{filter_id}', 'PageController@getFilterPage')->name('filter');


// Google Sheets Callback
Route::get('/google-sheets-callback', 'SocialAuthController@googleSheetsCallback')->name('google-sheets-callback');

