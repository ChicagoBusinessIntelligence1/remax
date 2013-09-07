<?php
 //LOCATION: remax/public/Single-Family-Homes-For-Sale-In-Skokie-Il
class SingleFamilyHomesForSaleInSkokieIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		
		->where(function($query){$query->where('address', 'LIKE', '%skokie%');})
		->paginate(10);

		$title = 'Single, Family, Homes, For, Sale, In, Skokie, Il';
		$meta = 'Single, Family, Homes, For, Sale, In, Skokie, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_single_family_homes_for_sale_in_skokie_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}