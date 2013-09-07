<?php
 //LOCATION: remax/public/Condos-For-Sale-In-Skokie-Il
class CondosForSaleInSkokieIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		->whereType_id(3)
		->where(function($query){$query->where('address', 'LIKE', '%skokie%');})
		->paginate(10);

		$title = 'Condos, For, Sale, In, Skokie, Il';
		$meta = 'Condos, For, Sale, In, Skokie, Il ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_condos_for_sale_in_skokie_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}