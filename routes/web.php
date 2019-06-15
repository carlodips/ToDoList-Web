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

//Homepage
Route::get('/', 'PagesController@index');


Auth::routes();

Route::group(['namespace' => 'Tasks', 'prefix' => 'tasks'], function() {
	Route::get('all', 'TasksController@dashboard');
	Route::post('store', 'TasksController@store');
});

Route::group(['namespace' => 'Categories', 'prefix' => 'categories'], function() {
		Route::get('{category}', 'CategoriesController@show');
});

