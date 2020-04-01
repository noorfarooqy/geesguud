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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/contact', 'pagesController@openContactUsPage');
    Route::get('/about', 'pagesController@openAboutUsPage');
    Route::get('/membership', 'pagesController@openComingSoonPage');
    Route::get('/news', 'pagesController@openComingSoonPage');
    Route::get('/culture', 'pagesController@openComingSoonPage');
    Route::get('/teams', 'pagesController@openComingSoonPage');
});
