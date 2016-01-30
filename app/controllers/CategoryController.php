<?php

class CategoryController extends BaseController {

	public function getAbout()
	{
		return "about";
	}

	public function getListing()
	{
		return View::make('listing');
	}

	public function getMyHomepage()
	{
		return "My home page";
	}

	public function getContactUs()
	{
		return "about page";
	}

	public function postSave()
	{
		return "category saved";
	}

}