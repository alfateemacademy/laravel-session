<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return "yes";
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function about()
	{
		return "about page";
	}

	public function getServices()
	{

	}

	public function getMission()
	{

	}

	public function getContact()
	{
		// show the contact form
		return "contact page";
	}

	public function postContact()
	{
		// submit the contact form
		return "contact page submitted";
	}

	public function getAsdfsdafasd()
	{
		return "new page";
	}

}
