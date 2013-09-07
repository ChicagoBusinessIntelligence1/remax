<?php
 //LOCATION: remax/public/Condos-For-Sale-In-Evanston-Il
class CondosForSaleInEvanstonIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		->where(function($query){$query->where('address', 'LIKE', '%evanston%');})
		->paginate(10);

		$title = 'Condos, For, Sale, In, Evanston, Il';
		$meta = 'Condos, For, Sale, In, Evanston, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_condos_for_sale_in_evanston_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}