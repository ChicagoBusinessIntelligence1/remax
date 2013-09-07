<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Evanston-Il
class ApartmentsForRentInEvanstonIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%evanston%');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Evanston, Il';
		$meta = 'Apartments, For, Rent, In, Evanston, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_evanston_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}