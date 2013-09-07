<?php
 //LOCATION: remax/public/Apartments-For-Rent-In-Skokie-Il
class ApartmentsForRentInSkokieIlController extends BaseController {



	public function index()
	{
		$houses  = House::where('issale', '=', 0)
		->where(function($query){$query->where('address', 'LIKE', '%skokie%');})
		->paginate(10);

		$title = 'Apartments, For, Rent, In, Skokie, Il';
		$meta = 'Apartments, For, Rent, In, Skokie, IlONE STOP Real Estate SERVICE';

		return View::make('seo.vw_apartments_for_rent_in_skokie_il')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
	}

}