<?php
 //LOCATION: remax/public/Homes-For-Rent-In-Glenview-Il
class HomesForRentInGlenviewIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%glenview%');})
		->paginate(10);

		$title = 'Homes, For, Rent, In, Glenview, Il';
		$meta = 'Homes, For, Rent, In, Glenview, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_homes_for_rent_in_glenview_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}