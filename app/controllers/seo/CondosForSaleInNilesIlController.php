<?php
 //LOCATION: remax/public/Condos-For-Sale-In-Niles-Il
class CondosForSaleInNilesIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 1)
		->whereType_id(3)
		->where(function($query){$query->where('address', 'LIKE', '%niles%');})
		->paginate(10);

		$title = 'Condos, For, Sale, In, Niles, Il';
		$meta = 'Condos, For, Sale, In, Niles, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_condos_for_sale_in_niles_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}