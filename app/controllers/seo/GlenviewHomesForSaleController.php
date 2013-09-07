<?php
 //LOCATION: remax/public/Glenview-Homes-For-Sale
class GlenviewHomesForSaleController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		->where(function($query){$query->where('address', 'LIKE', '%glenview%');})
		->paginate(10);

		$title = 'Glenview, Homes, For, Sale';
		$meta = 'Glenview, Homes, For, SaleONE STOP Real Estate SERVICE';

		return View::make('seo.vw_glenview_homes_for_sale')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}