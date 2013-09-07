<?php
 //LOCATION: remax/public/Niles-Rentals
class NilesRentalsController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%niles%');})
		->paginate(10);

		$title = 'Niles, Rentals';
		$meta = 'Niles, RentalsONE STOP Real Estate SERVICE';

		return View::make('seo.vw_niles_rentals')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}