<?php
 //LOCATION: remax/public/Morton-Grove-Rentals
class MortonGroveRentalsController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'Morton, Grove, Rentals';
		$meta = 'Morton, Grove, Rentals ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_morton_grove_rentals')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}