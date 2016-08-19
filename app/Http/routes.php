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
Route::get('test{name?}', 'TestController@test');

Route::get('/', 'ControlText@index');
Route::get('contact', 'ControlText@contact');

Route::get('blog/{id}', 'ControlText@blog');//在url传入id变量
Route::get('create', 'ControlText@create');//创建表单实验
