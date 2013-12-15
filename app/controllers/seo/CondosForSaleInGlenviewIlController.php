<?php
 //LOCATION: remax/public/Condos-For-Sale-In-Glenview-Il
class CondosForSaleInGlenviewIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 1)
		->whereType_id(3)
		->where(function($query){$query->where('address', 'LIKE', '%glenview%');})
		->paginate(10);

		$title = 'Condos, For, Sale, In, Glenview, Il';
		$meta = 'Condos, For, Sale, In, Glenview, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_condos_for_sale_in_glenview_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}