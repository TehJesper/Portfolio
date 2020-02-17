<?php

Route::get('/', 'TestController@showhome');
Route::get('/test/{test}', 'TestController@showtest');
Route::get('/about', 'TestController@showabout');

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticlesController@update');
Route::get('/articles/{article}/destroy', 'ArticlesController@destroy')->name('articles.destroy');
Route::get('/randomarticle', 'ArticlesController@random');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::post('/dashboard', 'DashboardController@store');
Route::get('/dashboard/createcourse', 'DashboardController@createcourse')->name('dashboard.createcourse');
Route::get('/dashboard/createassignment', 'DashboardController@createassignment')->name('dashboard.createassignment');
Route::get('/dashboard/{dashboard}/edit', 'DashboardController@edit')->name('dashboard.edit');
Route::put('/dashboard/{dashboard}', 'DashboardController@update');
Route::get('/dashboard/{dashboard}/destroy', 'DashboardController@destroy')->name('dashboard.destroy');

