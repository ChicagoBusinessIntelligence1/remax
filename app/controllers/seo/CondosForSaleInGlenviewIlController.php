<?php
 //LOCATION: remax/public/Condos-For-Sale-In-Glenview-Il
class CondosForSaleInGlenviewIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		->where(function($query){$query->where('address', 'LIKE', '%glenview%');})
		->paginate(10);

		$title = 'Condos, For, Sale, In, Glenview, Il';
		$meta = 'Condos, For, Sale, In, Glenview, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_condos_for_sale_in_glenview_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}