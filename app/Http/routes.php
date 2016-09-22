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
//Route::get('suggest/{type?}', 'TestController@form')->where(['type' => '[a-z]+']);
//Route::get('suggest/index', 'TestController@index')->middleware(['suggest']);
Route::get('suggest/index',[
   'uses' => 'TestController@index',
])->middleware(['suggest']);
//Route::get('suggest/add', 'TestController@form');
Route::get('suggest/add',[
   'middleware' => 'suggest',
   'uses' => 'TestController@form',
]);

Route::post('suggest/store', 'TestController@store');

Route::get('/', 'TestController@test');
Route::get('contact', 'ControlText@contact');

Route::get('blog/{id}', 'ControlText@blog');//在url传入id变量
Route::get('create', 'ControlText@create');//创建表单实验

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('home', 'HomeController@index')->middleware(['suggest']);
