<?php
 //LOCATION: remax/public/Lake-Forest-Real-Estate-Listings
class LakeForestRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Lake-Forest';
		$meta = 'Real Estate Properties in Lake-Forest. ONE STOP Comprehensive Real Estate service.';
		$city = 'Lake-Forest';
		
		$zipSale  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 1)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 0)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_lake-forest')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60045() {

		$title = 'Houses, Condos for Sale in Lake-Forest at 60045';
		$meta = 'Houses, Condos for Sale in Lake-Forest at 60045. ONE STOP SERVICE';

		$city = 'Lake-Forest';
		$zip = 60045;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 1)
		->whereZip(60045)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lake-forest')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Lake-Forest';
		$meta = 'Single Families Homes for Sale in Lake-Forest. ONE STOP SERVICE';

		$city = 'Lake-Forest';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lake-forest')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Lake-Forest';
		$meta = 'Condos/Apartments for Sale in Lake-Forest. ONE STOP SERVICE';

		$city = 'Lake-Forest';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lake-forest')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60045() {

		$title = 'Houses and Apartments for rent in Lake-Forest at 60045';
		$meta = 'Houses and Apartments for rent in Lake-Forest at 60045. ONE STOP SERVICE';

		$city = 'Lake-Forest';
		$rzip = 60045;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 0)
		->whereZip(60045)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lake-forest')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Lake-Forest';
		$meta = 'Apartments for Rent in Lake-Forest. ONE STOP SERVICE';

		$city = 'Lake-Forest';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lake-forest')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Lake-Forest';
		$meta = 'Houses for Rent in Lake-Forest. ONE STOP SERVICE';

		$city = 'Lake-Forest';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Lake-Forest')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lake-forest')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}