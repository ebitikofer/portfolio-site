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

Route::get('/', 'PagesController@index');
Route::get('/blog', 'PagesController@blog');
Route::get('/portfolio', 'PortfolioController@index');
Route::get('/art', 'ArtController@index');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio/create', 'PortfolioController@create');
Route::get('/portfolio/store', 'PortfolioController@store');
