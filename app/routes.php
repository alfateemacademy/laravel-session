<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('id', '[1-9][0-9]*');

/*Route::get('/about', 'HomeController@about');

Route::get('/post/listing', 
	array('uses' => 'PostController@listing', 'as' => 'post.listing'));

Route::get('/post/detail/asdf/asdf/f/asfasd/fasdf/sdfas/fsdf/', 
	array('uses' => 'PostController@detail', 'as' => 'post.detail'));

Route::get('/post/{id}/{slug}', 
	array('uses' => 'PostController@show', 'as' => 'post.show'))
		->where(array('slug' => '[a-zA-Z-_]+'));

Route::post('/post/save', array('uses' => 'PostController@save', 'as' => 'post.save'));*/


Route::controller('category', 'CategoryController', 
	array(
		'getListing' => 'category.listing',
		'getMyHomepage' => 'home.page',
		'getContactUs' => 'post.detail'
	));

Route::controller('/', 'HomeController');

/*Route::get('/', function()
{
	return View::make('hello');
});*/
