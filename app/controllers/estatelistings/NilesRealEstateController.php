<?php
 //LOCATION: remax/public/Niles-Real-Estate-Listings
class NilesRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Niles';
		$meta = 'Real Estate Properties in Niles. ONE STOP Comprehensive Real Estate service.';
		$city = 'Niles';
		
		$zipSale  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 0)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 1)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60714() {

		$title = 'Houses, Condos for Sale in Niles at 60714';
		$meta = 'Houses, Condos for Sale in Niles at 60714. ONE STOP SERVICE';

		$city = 'Niles';
		$zip = 60714;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 0)
		->whereZip(60714)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Niles';
		$meta = 'Single Families Homes for Sale in Niles. ONE STOP SERVICE';

		$city = 'Niles';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 0)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Niles';
		$meta = 'Condos/Apartments for Sale in Niles. ONE STOP SERVICE';

		$city = 'Niles';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60714() {

		$title = 'Houses and Apartments for rent in Niles at 60714';
		$meta = 'Houses and Apartments for rent in Niles at 60714. ONE STOP SERVICE';

		$city = 'Niles';
		$rzip = 60714;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 1)
		->whereZip(60714)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Niles';
		$meta = 'Apartments for Rent in Niles. ONE STOP SERVICE';

		$city = 'Niles';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Niles';
		$meta = 'Houses for Rent in Niles. ONE STOP SERVICE';

		$city = 'Niles';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Niles')
		->where ('listings.isRental', '=', 1)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}