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


/**
 * Route dell'HomeController
 */
Route::get('/', 'HomeController@home') ->name('homepage');

Route::get('/characters', 'HomeController@characters')->name('sezione-characters');

Route::get('/movies', 'HomeController@movies')->name('sezione-movies');

Route::get('/tv', 'HomeController@tv')->name('sezione-tv');

Route::get('/games', 'HomeController@games')->name('sezione-games');

Route::get('/collectibles', 'HomeController@collectibles')->name('sezione-collectibles');

Route::get('/videos', 'HomeController@videos')->name('sezione-videos');

Route::get('/fans', 'HomeController@fans')->name('sezione-fans');




/**
 * Route del ComicsController
 */

Route::get('/comics', 'ComicController@comics')->name('sezione-comics');


Route::get('/detail/{id}', 'ComicController@show')->name('sezione-details');
