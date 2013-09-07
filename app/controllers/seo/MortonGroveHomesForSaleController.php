<?php
 //LOCATION: remax/public/Morton-Grove-Homes-For-Sale
class MortonGroveHomesForSaleController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'Morton, Grove, Homes, For, Sale';
		$meta = 'Morton, Grove, Homes, For, Sale ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_morton_grove_homes_for_sale')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}