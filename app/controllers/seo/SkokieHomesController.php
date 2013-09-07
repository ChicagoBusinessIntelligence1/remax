<?php
 //LOCATION: remax/public/Skokie-Homes-For-Sale
class SkokieHomesController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 1)
		->where(function($query){$query->where('address', 'LIKE', '%skokie%');})
		->paginate(10);

		$title = 'Skokie, Homes, For, Sale';
		$meta = 'Skokie, Homes, For, SaleONE STOP Real Estate SERVICE';

		return View::make('seo.vw_skokie_homes')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}