<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'entries'], function () {
    Route::get('/', ['as' => 'posts.index', 'uses' => 'PostController@index']);
    Route::get('create', ['as' => 'posts.create', 'middleware' => 'auth', 'uses' => 'PostController@create']);
    Route::post('store', ['as' => 'posts.store', 'middleware' => 'auth', 'uses' => 'PostController@store']);
    Route::get('{id}', ['as' => 'posts.show', 'uses' => 'PostController@show']);
});

Route::auth();

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
