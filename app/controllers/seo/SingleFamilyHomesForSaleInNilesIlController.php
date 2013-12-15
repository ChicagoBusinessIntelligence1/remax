<?php
 //LOCATION: remax/public/Single-Family-Homes-For-Sale-In-Niles-Il
class SingleFamilyHomesForSaleInNilesIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 1)
		
		->where(function($query){$query->where('address', 'LIKE', '%niles%');})
		->paginate(10);

		$title = 'Single, Family, Homes, For, Sale, In, Niles, Il';
		$meta = 'Single, Family, Homes, For, Sale, In, Niles, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_single_family_homes_for_sale_in_niles_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}