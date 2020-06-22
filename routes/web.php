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



// Auth::routes(['register' => false]);
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

Auth::routes(['register' => false]);

// Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', 'AdminController@openAdminIndex');
        Route::prefix('/teams')->group(function () {
            Route::get('/categories', 'teams\TeamController@OpenCategoryPage');
            Route::post('/categories', 'teams\TeamController@SaveNewCategory');
            Route::get('/leagues', 'teams\LeagueController@OpenLeaguesPage');
            Route::post('/leagues', 'teams\LeagueController@CreateNewLeague');
            Route::get('/leagues/{league_id}', 'teams\LeagueController@ViewLeagueTeams');
            Route::post('/leagues/{league_id}', 'teams\TeamController@AddNewTeam');
        });
    });
});

Route::post('/lang', 'misc\LanguageController@SetLanguage');
