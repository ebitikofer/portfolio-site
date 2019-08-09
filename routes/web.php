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

// Portfolio (navigation and management of projects)
Route::get('/portfolio/create', 'PortfolioController@create');
Route::get('/portfolio/{id}', 'PortfolioController@show');
Route::post('/portfolio/store', 'PortfolioController@store');

// Project (navigation and management of photos and project info)
Route::get('/project/create/{id}', 'ProjectController@create');
Route::get('/project/{id}', 'ProjectController@show');
Route::post('/project/store', 'ProjectController@store');
Route::delete('/project/{id}', 'ProjectController@destroy');
