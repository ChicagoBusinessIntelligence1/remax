<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Morton-Grove-Il
class ApartmentsForRentInMortonGroveIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Morton, Grove, Il';
		$meta = 'Apartments, For, Rent, In, Morton, Grove, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_morton_grove_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}