<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Evanston-Il
class ApartmentsForRentInEvanstonIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 0)
		->whereType_id(3)
		->where(function($query){$query->where('address', 'LIKE', '%evanston%');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Evanston, Il';
		$meta = 'Apartments, For, Rent, In, Evanston, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_evanston_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}