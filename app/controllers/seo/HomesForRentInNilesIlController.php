<?php
 //LOCATION: remax/public/Homes-For-Rent-In-Niles-Il
class HomesForRentInNilesIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%niles%');})
		->paginate(10);

		$title = 'Homes, For, Rent, In, Niles, Il';
		$meta = 'Homes, For, Rent, In, Niles, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_homes_for_rent_in_niles_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}