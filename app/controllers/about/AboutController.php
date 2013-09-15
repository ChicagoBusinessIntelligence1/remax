<?php

class AboutController extends BaseController {

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

	public function index()
	{
		return View::make('about.vw_about');
	}

	 public function allAgents()
    {
    
    $allAgents = Agent::orderBy('lastname')->get();
    return View::make('about.vw_remax_agent')
    ->with(compact('allAgents'));
    }

}