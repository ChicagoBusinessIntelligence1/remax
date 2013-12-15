<?php
 //LOCATION: remax/public/Homes-For-Rent-In-Skokie-Il
class HomesForRentInSkokieIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%skokie%');})
		->paginate(10);

		$title = 'Homes, For, Rent, In, Skokie, Il';
		$meta = 'Homes, For, Rent, In, Skokie, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_homes_for_rent_in_skokie_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}