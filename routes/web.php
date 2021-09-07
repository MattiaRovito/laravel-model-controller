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
    return view('home');
})->name('homepage');

Route::get('/characters', function () {
    return view('characters');
})->name('sezione-characters');

Route::get('/movies', function () {
    return view('movies');
})->name('sezione-movies');

Route::get('/tv', function () {
    return view('tv');
})->name('sezione-tv');

Route::get('/games', function () {
    return view('games');
})->name('sezione-games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('sezione-collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('sezione-videos');

Route::get('/fans', function () {
    return view('fans');
})->name('sezione-fans');




Route::get('/comics', function () {

    $comics = config('comics');
    $data = ['series' => $comics];


    return view('comics', $data);
})->name('sezione-comics');
