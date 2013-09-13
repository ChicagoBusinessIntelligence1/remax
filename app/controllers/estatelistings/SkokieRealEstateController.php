<?php
 //LOCATION: remax/public/Skokie-Real-Estate-Listings
class SkokieRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Skokie';
		$meta = 'Real Estate Properties in Skokie. ONE STOP Comprehensive Real Estate service.';
		$city = 'Skokie';
		
		$zipSale  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60077() {

		$title = 'Houses, Condos for Sale in Skokie at 60077';
		$meta = 'Houses, Condos for Sale in Skokie at 60077. ONE STOP SERVICE';

		$city = 'Skokie';
		$zip = 60077;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereZip(60077)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_60076() {

		$title = 'Houses, Condos for Sale in Skokie at 60076';
		$meta = 'Houses, Condos for Sale in Skokie at 60076. ONE STOP SERVICE';

		$city = 'Skokie';
		$zip = 60076;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereZip(60076)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_60203() {

		$title = 'Houses, Condos for Sale in Skokie at 60203';
		$meta = 'Houses, Condos for Sale in Skokie at 60203. ONE STOP SERVICE';

		$city = 'Skokie';
		$zip = 60203;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereZip(60203)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Skokie';
		$meta = 'Single Families Homes for Sale in Skokie. ONE STOP SERVICE';

		$city = 'Skokie';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Skokie';
		$meta = 'Condos/Apartments for Sale in Skokie. ONE STOP SERVICE';

		$city = 'Skokie';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60077() {

		$title = 'Houses and Apartments for rent in Skokie at 60077';
		$meta = 'Houses and Apartments for rent in Skokie at 60077. ONE STOP SERVICE';

		$city = 'Skokie';
		$rzip = 60077;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->whereZip(60077)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_60076() {

		$title = 'Houses and Apartments for rent in Skokie at 60076';
		$meta = 'Houses and Apartments for rent in Skokie at 60076. ONE STOP SERVICE';

		$city = 'Skokie';
		$rzip = 60076;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->whereZip(60076)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Skokie';
		$meta = 'Apartments for Rent in Skokie. ONE STOP SERVICE';

		$city = 'Skokie';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Skokie';
		$meta = 'Houses for Rent in Skokie. ONE STOP SERVICE';

		$city = 'Skokie';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}