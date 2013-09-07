<?php
 //LOCATION: remax/public/Evanston-Rentals
class EvanstonRentalsController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%evanston%');})
		->paginate(10);

		$title = 'Evanston, Rentals';
		$meta = 'Evanston, RentalsONE STOP Real Estate SERVICE';

		return View::make('seo.vw_evanston_rentals')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}