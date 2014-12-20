<?php

class HomeController extends BaseController {

	/**
         * 
         * @return 
         */
	public function showWelcome()
	{
		return View::make('home'); 
	}

}
