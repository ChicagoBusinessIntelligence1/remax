<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Molton-Grove-Il
class ApartmentsForRentInMoltonGroveIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 0)
		->whereType_id(3)
		->where(function($query){$query->where('address', 'LIKE', '% %');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Molton, Grove, Il';
		$meta = 'Apartments, For, Rent, In, Molton, Grove, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_molton_grove_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}