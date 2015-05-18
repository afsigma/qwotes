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





Route::get('/', 'WelcomeController@index');

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('new', ['as' => 'new', 'uses' => 'QwoteController@index']);

Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'QwoteController@edit']);

Route::delete('delete/{id}', ['as' => 'delete', 'uses' => 'QwoteController@destroy']);

Route::put('update/{id}', ['as' => 'update', 'uses' => 'QwoteController@update']);

Route::get('settings', ['as' => 'settings', 'uses' => 'SettingController@index']);

Route::put('settings_update/{id}', ['as' => 'settings_update', 'uses' => 'SettingController@update']);

Route::post('create', 'QwoteController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);