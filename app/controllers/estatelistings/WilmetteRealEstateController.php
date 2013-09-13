<?php
 //LOCATION: remax/public/Wilmette-Real-Estate-Listings
class WilmetteRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Wilmette';
		$meta = 'Real Estate Properties in Wilmette. ONE STOP Comprehensive Real Estate service.';
		$city = 'Wilmette';
		
		$zipSale  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 1)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 0)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_wilmette')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60091() {

		$title = 'Houses, Condos for Sale in Wilmette at 60091';
		$meta = 'Houses, Condos for Sale in Wilmette at 60091. ONE STOP SERVICE';

		$city = 'Wilmette';
		$zip = 60091;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 1)
		->whereZip(60091)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_wilmette')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Wilmette';
		$meta = 'Single Families Homes for Sale in Wilmette. ONE STOP SERVICE';

		$city = 'Wilmette';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_wilmette')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Wilmette';
		$meta = 'Condos/Apartments for Sale in Wilmette. ONE STOP SERVICE';

		$city = 'Wilmette';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_wilmette')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60091() {

		$title = 'Houses and Apartments for rent in Wilmette at 60091';
		$meta = 'Houses and Apartments for rent in Wilmette at 60091. ONE STOP SERVICE';

		$city = 'Wilmette';
		$rzip = 60091;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 0)
		->whereZip(60091)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_wilmette')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Wilmette';
		$meta = 'Apartments for Rent in Wilmette. ONE STOP SERVICE';

		$city = 'Wilmette';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_wilmette')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Wilmette';
		$meta = 'Houses for Rent in Wilmette. ONE STOP SERVICE';

		$city = 'Wilmette';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Wilmette')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_wilmette')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}