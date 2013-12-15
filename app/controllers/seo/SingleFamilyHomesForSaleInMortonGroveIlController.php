<?php
 //LOCATION: remax/public/Single-Family-Homes-For-Sale-In-Morton-Grove-Il
class SingleFamilyHomesForSaleInMortonGroveIlController extends BaseController {



	public function index()
	{
		$houses  = Listing::where('issale', '=', 1)
		
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'Single, Family, Homes, For, Sale, In, Morton, Grove, Il';
		$meta = 'Single, Family, Homes, For, Sale, In, Morton, Grove, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_single_family_homes_for_sale_in_morton_grove_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}