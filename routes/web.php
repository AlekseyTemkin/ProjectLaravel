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

Route::get('/', 'PostController@showindex');

Route::get('/blog', 'PostController@showblog');

Route::get('/about', 'PostController@showabout');

Route::get('/contact', 'PostController@showcontact');

Route::get('/location', 'PostController@showlocation');

Route::get('/project', 'PostController@showproject');

Route::get('/services', 'PostController@showservices');
