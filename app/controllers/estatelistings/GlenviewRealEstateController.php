<?php
 //LOCATION: remax/public/Glenview-Real-Estate-Listings
class GlenviewRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Glenview';
		$meta = 'Real Estate Properties in Glenview. ONE STOP Comprehensive Real Estate service.';
		$city = 'Glenview';
		
		$zipSale  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 0)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 1)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60025() {

		$title = 'Houses, Condos for Sale in Glenview at 60025';
		$meta = 'Houses, Condos for Sale in Glenview at 60025. ONE STOP SERVICE';

		$city = 'Glenview';
		$zip = 60025;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 0)
		->whereZip(60025)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_60026() {

		$title = 'Houses, Condos for Sale in Glenview at 60026';
		$meta = 'Houses, Condos for Sale in Glenview at 60026. ONE STOP SERVICE';

		$city = 'Glenview';
		$zip = 60026;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 0)
		->whereZip(60026)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Glenview';
		$meta = 'Single Families Homes for Sale in Glenview. ONE STOP SERVICE';

		$city = 'Glenview';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 0)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Glenview';
		$meta = 'Condos/Apartments for Sale in Glenview. ONE STOP SERVICE';

		$city = 'Glenview';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60026() {

		$title = 'Houses and Apartments for rent in Glenview at 60026';
		$meta = 'Houses and Apartments for rent in Glenview at 60026. ONE STOP SERVICE';

		$city = 'Glenview';
		$rzip = 60026;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 1)
		->whereZip(60026)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_60025() {

		$title = 'Houses and Apartments for rent in Glenview at 60025';
		$meta = 'Houses and Apartments for rent in Glenview at 60025. ONE STOP SERVICE';

		$city = 'Glenview';
		$rzip = 60025;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 1)
		->whereZip(60025)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Glenview';
		$meta = 'Apartments for Rent in Glenview. ONE STOP SERVICE';

		$city = 'Glenview';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Glenview';
		$meta = 'Houses for Rent in Glenview. ONE STOP SERVICE';

		$city = 'Glenview';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Glenview')
		->where ('listings.isRental', '=', 1)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_glenview')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}