<?php
 //LOCATION: remax/public/Skokie-Rentals
class SkokieRentalsController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%skokie%');})
		->paginate(10);

		$title = 'Skokie, Rentals';
		$meta = 'Skokie, Rentals ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_skokie_rentals')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}