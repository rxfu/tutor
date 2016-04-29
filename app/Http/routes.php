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

	Route::group(['prefix' => 'metadata/{type}', 'as' => 'metadata.'], function () {
		Route::get('list', ['as' => 'list', 'uses' => 'MetadataController@getList']);
		Route::get('create', ['as' => 'create', 'uses' => 'MetadataController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'MetadataController@store']);
		Route::get('{id}', ['as' => 'show', 'uses' => 'MetadataController@show']);
		Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'MetadataController@edit']);
		Route::put('{id}', ['as' => 'update', 'uses' => 'MetadataController@update']);
		Route::delete('{id}', ['as' => 'delete', 'uses' => 'MetadataController@delete']);
		/*
			foreach (['gender', 'country', 'nation', 'party', 'college', 'position', 'discipline', 'subdiscipline'] as $type) {
				Route::group(['prefix' => $type, 'as' => $type . '.'], function () use ($type) {
					Route::get('list', ['as' => 'list', 'uses' => 'MetadataController@get' . str_plural(ucfirst($type))]);
					Route::get('create', ['as' => 'create', 'uses' => 'MetadataController@create' . ucfirst($type)]);
					Route::post('store', ['as' => 'store', 'uses' => 'MetadataController@store' . ucfirst($type)]);
					Route::get('{' . $type . '}', ['as' => 'show', 'uses' => 'MetadataController@show' . ucfirst($type)]);
					Route::get('{' . $type . '}/edit', ['as' => 'edit', 'uses' => 'MetadataController@edit' . ucfirst($type)]);
					Route::put('{' . $type . '}', ['as' => 'update', 'uses' => 'MetadataController@update' . ucfirst($type)]);
					Route::delete('{' . $type . '}', ['as' => 'delete', 'uses' => 'MetadataController@delete' . ucfirst($type)]);
				});
		*/
	});
});