<?php
 //LOCATION: remax/public/Skokie-Homes-For-Sale
class SkokieHomesForSaleController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 1)
		
		->where(function($query){$query->where('address', 'LIKE', '%skokie%');})
		->paginate(10);

		$title = 'Skokie, Homes, For, Sale';
		$meta = 'Skokie, Homes, For, Sale ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_skokie_homes_for_sale')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}