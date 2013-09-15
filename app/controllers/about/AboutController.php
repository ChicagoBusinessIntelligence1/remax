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

	public function hiring()
	{
	$title = 'Remax 1st Class is Hiring Brokers';
	$meta = 'Remax 1st Class is Hiring Licenced and new Brokers.Providing Office Space, 
	Agent Websites. Support in BROKER EXAM PREPARATION.'; 
	return View::make('about.vw_hiring')->with(compact('title', 'meta'));
	}
	public function index()
	{
	$title = 'Remax 1st Class Realty in Skokie'; 
	$meta = 'Remax 1st Class Realty in Skokie. Who we are? And why we are superior than other Real Estate Companies'; 
	return View::make('about.vw_about')->with(compact('title', 'meta'));
	}

	 public function allAgents()
    {
    $title = 'Remax 1st Class Realty Agents'; 
    $meta = 'Remax 1st Class Realty Agents.'; 
    
    


    $allAgents = Agent::orderBy('lastname')->get();
    return View::make('about.vw_remax_agent')
    ->with(compact('allAgents'))->with(compact('title', 'meta'));
    }

}