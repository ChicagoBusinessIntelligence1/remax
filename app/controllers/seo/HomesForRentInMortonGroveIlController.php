<?php
 //LOCATION: remax/public/Homes-For-Rent-In-Morton-Grove-Il
class HomesForRentInMortonGroveIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'Homes, For, Rent, In, Morton, Grove, Il';
		$meta = 'Homes, For, Rent, In, Morton, Grove, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_homes_for_rent_in_morton_grove_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}