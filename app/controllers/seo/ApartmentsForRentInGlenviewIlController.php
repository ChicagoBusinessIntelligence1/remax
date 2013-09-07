<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Glenview-Il
class ApartmentsForRentInGlenviewIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%glenview%');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Glenview, Il';
		$meta = 'Apartments, For, Rent, In, Glenview, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_glenview_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}