<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Niles-Il
class ApartmentsForRentInNilesIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%niles%');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Niles, Il';
		$meta = 'Apartments, For, Rent, In, Niles, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_niles_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}