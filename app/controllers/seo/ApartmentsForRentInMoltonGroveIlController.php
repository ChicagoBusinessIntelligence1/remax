<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Molton-Grove-Il
class ApartmentsForRentInMoltonGroveIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Molton, Grove, Il';
		$meta = 'Apartments, For, Rent, In, Molton, Grove, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_molton_grove_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}