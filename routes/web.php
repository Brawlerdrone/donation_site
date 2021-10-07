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

Route::get('','pagesController@home');
Route::get('mission', 'pagesController@mission_page');
Route::get('projects','pagesController@projects');
Route::get('donate','pagesController@donate');
Route::get('volunteer','pagesController@volunteer');
Route::get('gallery','pagesController@gallery');
Route::get('contact','pagesController@contact');
