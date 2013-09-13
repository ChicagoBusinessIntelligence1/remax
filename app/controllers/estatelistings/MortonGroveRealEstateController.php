<?php
 //LOCATION: remax/public/Morton-Grove-Real-Estate-Listings
class MortonGroveRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Morton-Grove';
		$meta = 'Real Estate Properties in Morton-Grove. ONE STOP Comprehensive Real Estate service.';
		$city = 'Morton-Grove';
		
		$zipSale  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 1)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 0)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_morton-grove')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60053() {

		$title = 'Houses, Condos for Sale in Morton-Grove at 60053';
		$meta = 'Houses, Condos for Sale in Morton-Grove at 60053. ONE STOP SERVICE';

		$city = 'Morton-Grove';
		$zip = 60053;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 1)
		->whereZip(60053)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_morton-grove')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Morton-Grove';
		$meta = 'Single Families Homes for Sale in Morton-Grove. ONE STOP SERVICE';

		$city = 'Morton-Grove';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_morton-grove')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Morton-Grove';
		$meta = 'Condos/Apartments for Sale in Morton-Grove. ONE STOP SERVICE';

		$city = 'Morton-Grove';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_morton-grove')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60053() {

		$title = 'Houses and Apartments for rent in Morton-Grove at 60053';
		$meta = 'Houses and Apartments for rent in Morton-Grove at 60053. ONE STOP SERVICE';

		$city = 'Morton-Grove';
		$rzip = 60053;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 0)
		->whereZip(60053)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_morton-grove')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Morton-Grove';
		$meta = 'Apartments for Rent in Morton-Grove. ONE STOP SERVICE';

		$city = 'Morton-Grove';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_morton-grove')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Morton-Grove';
		$meta = 'Houses for Rent in Morton-Grove. ONE STOP SERVICE';

		$city = 'Morton-Grove';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Morton-Grove')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_morton-grove')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}