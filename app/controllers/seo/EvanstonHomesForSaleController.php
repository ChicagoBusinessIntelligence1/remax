<?php
 //LOCATION: remax/public/Evanston-Homes-For-Sale
class EvanstonHomesForSaleController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		
		->where(function($query){$query->where('address', 'LIKE', '%evanston%');})
		->paginate(10);

		$title = 'Evanston, Homes, For, Sale';
		$meta = 'Evanston, Homes, For, Sale ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_evanston_homes_for_sale')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}