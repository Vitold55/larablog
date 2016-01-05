<?php

Route::get('/', [
	'as' => 'main',
	'uses' => 'IndexController@index'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('about-us', [
	'as' => 'about',
	'uses' => 'IndexController@about'
]);

Route::get('projects', [
	'as' => 'projectsList',
	'uses' => 'IndexController@projectsList'
]);

Route::get('project/{slug}', [
	'as' => 'projectCart',
	'uses' => 'IndexController@projectCart'
]);

Route::get('blog', [
	'as' => 'blog',
	'uses' => 'BlogController@index'
]);

Route::get('blog/{slug}', [
	'as' => 'blog.record',
	'uses' => 'BlogController@record'
]);