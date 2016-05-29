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

Route::get('qwotes', ['as' => 'qwotes', 'uses' => 'WelcomeController@index']);

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('new', ['as' => 'new', 'uses' => 'QwoteController@index']);

Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'QwoteController@edit']);

Route::delete('delete/{id}', ['as' => 'delete', 'uses' => 'QwoteController@destroy']);

Route::put('update/{id}', ['as' => 'update', 'uses' => 'QwoteController@update']);

Route::get('settings', ['as' => 'settings', 'uses' => 'SettingController@index']);

Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@index']);

Route::put('profile_update/{id}', ['as' => 'profile_update', 'uses' => 'ProfileController@update']);

Route::put('settings_update/{id}', ['as' => 'settings_update', 'uses' => 'SettingController@update']);

Route::post('create', 'QwoteController@store');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role']], function()
{
    
Route::get('index', ['as' => 'admin', 'uses' => 'AdminController@index']);

Route::get('users', ['as' => 'users', 'uses' => 'UsersController@index']);

Route::put('update/{id}', ['as' => 'admin/update', 'uses' => 'AdminController@update']);

Route::put('qwick_update/{id}', ['as' => 'admin/qwick_update', 'uses' => 'AdminController@qwick_update']);

Route::get('edit/{id}', ['as' => 'admin/edit', 'uses' => 'AdminController@edit']);

});

