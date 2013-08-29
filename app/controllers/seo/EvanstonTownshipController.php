<?php
 //LOCATION: remax/public/Evanston-township-high-school
class EvanstonTownshipController extends BaseController {



	public function index()
	{
		
		$title = 'Make short sentence with Evanston, township, high, school';
		$meta = 'Make short sentence with call to action in the END Evanston, township, high, school';

		return View::make('seo.vw_evanston_township')
		->with(compact('title', 'meta'));
	}

}