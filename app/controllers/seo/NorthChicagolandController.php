<?php
 //LOCATION: remax/public/North-Chicagoland
class NorthChicagolandController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%Morton%');})
		->paginate(10);

		$title = 'North, Chicagoland';
		$meta = 'North, ChicagolandONE STOP Real Estate SERVICE';

		return View::make('seo.vw_north_chicagoland')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}