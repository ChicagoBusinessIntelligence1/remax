<?php
 //LOCATION: remax/public/Park-Ridge-Real-Estate-Listings
class ParkRidgeRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Park-Ridge';
		$meta = 'Real Estate Properties in Park-Ridge. ONE STOP Comprehensive Real Estate service.';
		$city = 'Park-Ridge';
		
		$zipSale  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 1)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 0)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_park-ridge')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60068() {

		$title = 'Houses, Condos for Sale in Park-Ridge at 60068';
		$meta = 'Houses, Condos for Sale in Park-Ridge at 60068. ONE STOP SERVICE';

		$city = 'Park-Ridge';
		$zip = 60068;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 1)
		->whereZip(60068)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_park-ridge')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Park-Ridge';
		$meta = 'Single Families Homes for Sale in Park-Ridge. ONE STOP SERVICE';

		$city = 'Park-Ridge';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_park-ridge')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Park-Ridge';
		$meta = 'Condos/Apartments for Sale in Park-Ridge. ONE STOP SERVICE';

		$city = 'Park-Ridge';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_park-ridge')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60068() {

		$title = 'Houses and Apartments for rent in Park-Ridge at 60068';
		$meta = 'Houses and Apartments for rent in Park-Ridge at 60068. ONE STOP SERVICE';

		$city = 'Park-Ridge';
		$rzip = 60068;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 0)
		->whereZip(60068)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_park-ridge')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Park-Ridge';
		$meta = 'Apartments for Rent in Park-Ridge. ONE STOP SERVICE';

		$city = 'Park-Ridge';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_park-ridge')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Park-Ridge';
		$meta = 'Houses for Rent in Park-Ridge. ONE STOP SERVICE';

		$city = 'Park-Ridge';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Park-Ridge')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_park-ridge')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}