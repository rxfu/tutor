<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
	return redirect()->route('home');
});

Route::auth();

Route::group(['middleware' => ['auth']], function () {
	Route::get('dashboard', ['as' => 'home', 'uses' => 'HomeController@index']);

	Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
		Route::get('password', ['as' => 'password', 'uses' => 'UserController@showChangePasswordForm']);
		Route::put('change-password', ['as' => 'change', 'uses' => 'UserController@changePassword']);
	});

	Route::group(['prefix' => 'metadata', 'as' => 'metadata.'], function () {
		Route::group(['prefix' => 'gender', 'as' => 'gender.'], function () {
			Route::get('list', ['as' => 'list', 'uses' => 'MetadataController@getGenderList']);
			Route::get('create', ['as' => 'create', 'uses' => 'MetadataController@createGender']);
			Route::post('store', ['as' => 'store', 'uses' => 'MetadataController@storeGender']);
			Route::get('{gender}', ['as' => 'show', 'uses' => 'MetadataController@showGender']);
			Route::get('{gender}/edit', ['as' => 'edit', 'uses' => 'MetadataController@editGender']);
			Route::put('{gender}', ['as' => 'update', 'uses' => 'MetadataController@updateGender']);
			Route::delete('{gender}', ['as' => 'delete', 'uses' => 'MetadataController@deleteGender']);
		});
	});
});