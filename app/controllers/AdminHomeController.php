<?php

class AdminHomeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('admin.home.index')->with('title', 'Home Page');
	}


}
