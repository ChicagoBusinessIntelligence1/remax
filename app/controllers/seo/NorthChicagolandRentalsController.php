<?php
 //LOCATION: remax/public/North-Chicagoland-Rentals
class NorthChicagolandRentalsController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		
		->where(function($query){$query->where('address', 'LIKE', '% %');})
		->paginate(10);

		$title = 'North, Chicagoland, Rentals';
		$meta = 'North, Chicagoland, Rentals ONE STOP Real Estate SERVICE';

		return View::make('seo.vw_north_chicagoland_rentals')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}