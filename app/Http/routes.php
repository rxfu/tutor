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
		Route::put('reset-password/{user}', ['as' => 'reset', 'uses' => 'UserController@resetPassword']);

		Route::get('list', ['as' => 'list', 'uses' => 'UserController@getList']);
		Route::get('create', ['as' => 'create', 'uses' => 'UserController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'UserController@store']);
		Route::get('{id}', ['as' => 'show', 'uses' => 'UserController@show']);
		Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'UserController@edit']);
		Route::put('{id}', ['as' => 'update', 'uses' => 'UserController@update']);
		Route::delete('{id}', ['as' => 'delete', 'uses' => 'UserController@delete']);
	});

	Route::group(['prefix' => 'role', 'as' => 'role.'], function () {
		Route::get('list', ['as' => 'list', 'uses' => 'RoleController@getList']);
		Route::get('create', ['as' => 'create', 'uses' => 'RoleController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'RoleController@store']);
		Route::get('{id}', ['as' => 'show', 'uses' => 'RoleController@show']);
		Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'RoleController@edit']);
		Route::put('{id}', ['as' => 'update', 'uses' => 'RoleController@update']);
		Route::delete('{id}', ['as' => 'delete', 'uses' => 'RoleController@delete']);
	});

	Route::group(['prefix' => 'metadata/{type}', 'as' => 'metadata.'], function () {
		Route::pattern('type', '(gender|country|nation|party|college|position|discipline|subdiscipline)');

		Route::get('list', ['as' => 'list', 'uses' => 'MetadataController@getList']);
		Route::get('create', ['as' => 'create', 'uses' => 'MetadataController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'MetadataController@store']);
		Route::get('{id}', ['as' => 'show', 'uses' => 'MetadataController@show']);
		Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'MetadataController@edit']);
		Route::put('{id}', ['as' => 'update', 'uses' => 'MetadataController@update']);
		Route::delete('{id}', ['as' => 'delete', 'uses' => 'MetadataController@delete']);
	});

	Route::group(['prefix' => 'tutor', 'as' => 'tutor.'], function () {
		Route::get('application', ['as' => 'application', 'uses' => 'TutorController@getApplication']);

		Route::get('list', ['as' => 'list', 'uses' => 'TutorController@getList']);
		Route::get('create/{user}', ['as' => 'create', 'uses' => 'TutorController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'TutorController@store']);
		Route::get('{id}', ['as' => 'show', 'uses' => 'TutorController@show']);
		Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'TutorController@edit']);
		Route::put('{id}', ['as' => 'update', 'uses' => 'TutorController@update']);
		Route::delete('{id}', ['as' => 'delete', 'uses' => 'TutorController@delete']);
	});
});