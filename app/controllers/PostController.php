<?php

class PostController extends BaseController {

	public function listing()
	{
		return View::make('listing');
	}

	public function detail()
	{
		return View::make('detail');
	}

	public function show($id)
	{
		return "Show ID: " . $id;
	}

	public function save()
	{
		return "Saved";
	}

}