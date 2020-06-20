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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@index')->name('search');

Route::resources([
    'clips' => 'ClipController',
    'streams' => 'StreamController',
    'games' => 'GameController',
    'themes' => 'ThemeController',
]);
