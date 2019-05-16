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

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add/category', 'CategoryController@add_category');
Route::post('/save/category', 'CategoryController@save_category');
Route::get('/manage/category', 'CategoryController@manage_category');
