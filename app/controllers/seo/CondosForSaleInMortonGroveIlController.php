<?php
 //LOCATION: remax/public/Condos-For-Sale-In-Morton-Grove-Il
class CondosForSaleInMortonGroveIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 1)
		->whereType_id(3)
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'Condos, For, Sale, In, Morton, Grove, Il';
		$meta = 'Condos, For, Sale, In, Morton, Grove, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_condos_for_sale_in_morton_grove_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}