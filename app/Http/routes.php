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
		Route::get('publicity', ['as' => 'publicity', 'uses' => 'TutorController@getPublicity']);
		Route::get('publish', ['as' => 'publish', 'uses' => 'TutorController@getPublish']);
		Route::get('unpublish', ['as' => 'unpublish', 'uses' => 'TutorController@getUnpublish']);
		Route::get('new-selection', ['as' => 'newSelection', 'uses' => 'TutorController@getNewSelection']);
		Route::get('create-selection/{id}', ['as' => 'createSelection', 'uses' => 'TutorController@createSelection']);
		Route::post('save-selection', ['as' => 'saveSelection', 'uses' => 'TutorController@saveSelection']);
		Route::get('list-selection', ['as' => 'listSelection', 'uses' => 'TutorController@getSelection']);
		Route::get('{id}/{atype}/get-audit-selection', ['as' => 'getAuditSelection', 'uses' => 'TutorController@getAuditSelection']);
		Route::put('audit-selection/{id}', ['as' => 'auditSelection', 'uses' => 'TutorController@auditSelection']);
		Route::get('create-result/{id}', ['as' => 'createResult', 'uses' => 'TutorController@createResult']);
		Route::post('save-result', ['as' => 'saveResult', 'uses' => 'TutorController@saveResult']);
		Route::get('create-adward/{id}', ['as' => 'createAdward', 'uses' => 'TutorController@createAdward']);
		Route::post('save-adward', ['as' => 'saveAdward', 'uses' => 'TutorController@saveAdward']);
		Route::get('create-project/{id}', ['as' => 'createProject', 'uses' => 'TutorController@createProject']);
		Route::post('save-project', ['as' => 'saveProject', 'uses' => 'TutorController@saveProject']);

		Route::get('list', ['as' => 'list', 'uses' => 'TutorController@getList']);
		Route::get('create/{user}', ['as' => 'create', 'uses' => 'TutorController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'TutorController@store']);
		Route::get('{zjhm}/{dslb}/{dsdl}/{ejxkdm}/{sfjzds}', ['as' => 'show', 'uses' => 'TutorController@show']);
		Route::get('{zjhm}/{dslb}/{dsdl}/{ejxkdm}/{sfjzds}/edit', ['as' => 'edit', 'uses' => 'TutorController@edit']);
		Route::put('{zjhm}/{dslb}/{dsdl}/{ejxkdm}/{sfjzds}', ['as' => 'update', 'uses' => 'TutorController@update']);
		Route::delete('{zjhm}/{dslb}/{dsdl}/{ejxkdm}/{sfjzds}', ['as' => 'delete', 'uses' => 'TutorController@delete']);
	});

	Route::group(['prefix' => 'statistics', 'as' => 'statistics.'], function () {
		Route::get('by-gender', ['as' => 'gender', 'uses' => 'StatisticsController@getStatisticsByGender']);
		Route::get('by-position', ['as' => 'position', 'uses' => 'StatisticsController@getStatisticsByPosition']);
		Route::get('by-degree', ['as' => 'degree', 'uses' => 'StatisticsController@getStatisticsByDegree']);
		Route::get('by-college', ['as' => 'college', 'uses' => 'StatisticsController@getStatisticsByCollege']);
		Route::get('by-discipline', ['as' => 'discipline', 'uses' => 'StatisticsController@getStatisticsByDiscipline']);
		Route::get('by-subdiscipline', ['as' => 'subdiscipline', 'uses' => 'StatisticsController@getStatisticsBySubdiscipline']);
	});

	Route::group(['prefix' => 'expert', 'as' => 'expert.'], function () {
		Route::get('list', ['as' => 'list', 'uses' => 'ExpertController@getList']);
		Route::get('new', ['as' => 'new', 'uses' => 'ExpertController@getNew']);
		Route::get('print', ['as' => 'print', 'uses' => 'ExpertController@getPrint']);
		Route::get('create', ['as' => 'create', 'uses' => 'ExpertController@create']);
		Route::post('store', ['as' => 'store', 'uses' => 'ExpertController@store']);
		Route::get('{id}', ['as' => 'show', 'uses' => 'ExpertController@show']);
		Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'ExpertController@edit']);
		Route::put('{id}', ['as' => 'update', 'uses' => 'ExpertController@update']);
		Route::delete('{id}', ['as' => 'delete', 'uses' => 'ExpertController@delete']);
	});

	Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
		Route::get('edit', ['as' => 'edit', 'uses' => 'SettingController@edit']);
		Route::put('update', ['as' => 'update', 'uses' => 'SettingController@update']);
	});
});