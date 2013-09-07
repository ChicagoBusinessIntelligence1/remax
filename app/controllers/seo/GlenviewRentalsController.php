<?php
 //LOCATION: remax/public/Glenview-Rentals
class GlenviewRentalsController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%glenview%');})
		->paginate(10);

		$title = 'Glenview, Rentals';
		$meta = 'Glenview, Rentals ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_glenview_rentals')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}