<?php
 //LOCATION: remax/public/Niles-Homes-For-Sale
class NilesHomesForSaleController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		->where(function($query){$query->where('address', 'LIKE', '%niles%');})
		->paginate(10);

		$title = 'Niles, Homes, For, Sale';
		$meta = 'Niles, Homes, For, SaleONE STOP Real Estate SERVICE';

		return View::make('seo.vw_niles_homes_for_sale')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}