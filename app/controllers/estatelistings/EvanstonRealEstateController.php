<?php
 //LOCATION: remax/public/Evanston-Real-Estate-Listings
class EvanstonRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Evanston';
		$meta = 'Real Estate Properties in Evanston. ONE STOP Comprehensive Real Estate service.';
		$city = 'Evanston';
		
		$zipSale  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 0)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 1)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60201() {

		$title = 'Houses, Condos for Sale in Evanston at 60201';
		$meta = 'Houses, Condos for Sale in Evanston at 60201. ONE STOP SERVICE';

		$city = 'Evanston';
		$zip = 60201;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 0)
		->whereZip(60201)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_60202() {

		$title = 'Houses, Condos for Sale in Evanston at 60202';
		$meta = 'Houses, Condos for Sale in Evanston at 60202. ONE STOP SERVICE';

		$city = 'Evanston';
		$zip = 60202;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 0)
		->whereZip(60202)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_60203() {

		$title = 'Houses, Condos for Sale in Evanston at 60203';
		$meta = 'Houses, Condos for Sale in Evanston at 60203. ONE STOP SERVICE';

		$city = 'Evanston';
		$zip = 60203;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 0)
		->whereZip(60203)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Evanston';
		$meta = 'Single Families Homes for Sale in Evanston. ONE STOP SERVICE';

		$city = 'Evanston';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 0)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Evanston';
		$meta = 'Condos/Apartments for Sale in Evanston. ONE STOP SERVICE';

		$city = 'Evanston';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60201() {

		$title = 'Houses and Apartments for rent in Evanston at 60201';
		$meta = 'Houses and Apartments for rent in Evanston at 60201. ONE STOP SERVICE';

		$city = 'Evanston';
		$rzip = 60201;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 1)
		->whereZip(60201)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_60202() {

		$title = 'Houses and Apartments for rent in Evanston at 60202';
		$meta = 'Houses and Apartments for rent in Evanston at 60202. ONE STOP SERVICE';

		$city = 'Evanston';
		$rzip = 60202;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 1)
		->whereZip(60202)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Evanston';
		$meta = 'Apartments for Rent in Evanston. ONE STOP SERVICE';

		$city = 'Evanston';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Evanston';
		$meta = 'Houses for Rent in Evanston. ONE STOP SERVICE';

		$city = 'Evanston';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Evanston')
		->where ('listings.isRental', '=', 1)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_evanston')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}