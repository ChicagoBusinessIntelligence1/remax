<?php
 //LOCATION: remax/public/Single-Family-Homes-For-Sale-In-Glenview-Il
class SingleFamilyHomesForSaleInGlenviewIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		->where(function($query){$query->where('address', 'LIKE', '%glenview%');})
		->paginate(10);

		$title = 'Single, Family, Homes, For, Sale, In, Glenview, Il';
		$meta = 'Single, Family, Homes, For, Sale, In, Glenview, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_single_family_homes_for_sale_in_glenview_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}