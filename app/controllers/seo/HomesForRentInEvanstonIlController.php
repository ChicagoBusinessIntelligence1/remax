<?php
 //LOCATION: remax/public/Homes-For-Rent-In-Evanston-Il
class HomesForRentInEvanstonIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%evanston%');})
		->paginate(10);

		$title = 'Homes, For, Rent, In, Evanston, Il';
		$meta = 'Homes, For, Rent, In, Evanston, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_homes_for_rent_in_evanston_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}