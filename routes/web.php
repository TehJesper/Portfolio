<?php

//if (env('APP_ENV') === 'production') {
//    URL::forceSchema('https');
//}

Route::get('/', 'TestController@showhome')->middleware('auth');
//Route::get('/test/{test}', 'TestController@showtest');
Route::get('/about', 'TestController@showabout')->middleware('auth');

Route::group(['middleware' => ['auth']], function (){
    Route::get('/articles', 'ArticlesController@index')->name('articles.index');
    Route::post('/articles', 'ArticlesController@store');
    Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
    Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
    Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
    Route::put('/articles/{article}', 'ArticlesController@update');
    Route::get('/articles/{article}/destroy', 'ArticlesController@destroy')->name('articles.destroy');
    Route::get('/randomarticle', 'ArticlesController@random');
});
Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    //Route::get('/dashboard/{dashboard}/edit', 'DashboardController@edit')->name('dashboard.edit');
    //Route::put('/dashboard/{dashboard}', 'DashboardController@update');
    Route::get('/dashboard/{dashboard}/destroy', 'DashboardController@destroy')->name('dashboard.destroy');

    Route::post('/dashboard/createcourse', 'CourseController@store');
    Route::get('/dashboard/createcourse', 'CourseController@create')->name('dashboard.createcourse');
    Route::get('/dashboard/{course}/editcourse', 'CourseController@edit');
    Route::put('/dashboard/{course}', 'CourseController@update');

    Route::post('/dashboard/{assignment}/createassignment', 'AssignmentController@store');
    Route::get('/dashboard/{assignment}/createassignment', 'AssignmentController@create')->name('dashboard.createassignment');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

