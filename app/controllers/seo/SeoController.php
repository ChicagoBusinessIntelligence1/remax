<?php
 //LOCATION: remax/public/homes-sale-skokie-il
class SeoController extends BaseController {

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

	public function home_sale_skokie()
	{
		$skokie_houses = House::where('city', '=', 'Skokie')->get();
		$title = 'Homes for Sale in Skokie, IL';
		$meta = 'Houses, Appartments, Vacand Land in Skokie IL. HOME LOANS AVALIABLE!';
		return View::make('seo.vw_home_sale_skokie')
		->with(compact($skokie_houses))
		->with(compact('title', 'meta'));
	}

}