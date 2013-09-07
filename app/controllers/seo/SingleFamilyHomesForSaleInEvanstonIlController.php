<?php
 //LOCATION: remax/public/Single-Family-Homes-For-Sale-In-Evanston-Il
class SingleFamilyHomesForSaleInEvanstonIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		
		->where(function($query){$query->where('address', 'LIKE', '%evanston%');})
		->paginate(10);

		$title = 'Single, Family, Homes, For, Sale, In, Evanston, Il';
		$meta = 'Single, Family, Homes, For, Sale, In, Evanston, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_single_family_homes_for_sale_in_evanston_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}