<?php
//LOCATION: remax/public
include_once app_path() . '/util/TextOperations.php';
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
	public function index()
	{

	$title = 'homes sale, houses rent remax skokie, real estate niles, evanstone';
	$meta= 'Comprehensive Real Estate Services, Buy House, Get approved for Home Loan, 
	Rent, Sell, Invest in Real Estate. ONE STOP SERVICE!';		
	return View::make('home.vw_home')
	->with(compact('title', 'meta'));
	}
}