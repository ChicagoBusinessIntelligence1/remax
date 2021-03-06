<?php
 //LOCATION: remax/public/Winnetka-Real-Estate-Listings
class WinnetkaRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Winnetka';
		$meta = 'Real Estate Properties in Winnetka. ONE STOP Comprehensive Real Estate service.';
		$city = 'Winnetka';
		
		$zipSale  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 1)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 0)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_winnetka')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60093() {

		$title = 'Houses, Condos for Sale in Winnetka at 60093';
		$meta = 'Houses, Condos for Sale in Winnetka at 60093. ONE STOP SERVICE';

		$city = 'Winnetka';
		$zip = 60093;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 1)
		->whereZip(60093)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_winnetka')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Winnetka';
		$meta = 'Single Families Homes for Sale in Winnetka. ONE STOP SERVICE';

		$city = 'Winnetka';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_winnetka')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Winnetka';
		$meta = 'Condos/Apartments for Sale in Winnetka. ONE STOP SERVICE';

		$city = 'Winnetka';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_winnetka')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60093() {

		$title = 'Houses and Apartments for rent in Winnetka at 60093';
		$meta = 'Houses and Apartments for rent in Winnetka at 60093. ONE STOP SERVICE';

		$city = 'Winnetka';
		$rzip = 60093;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 0)
		->whereZip(60093)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_winnetka')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Winnetka';
		$meta = 'Apartments for Rent in Winnetka. ONE STOP SERVICE';

		$city = 'Winnetka';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_winnetka')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Winnetka';
		$meta = 'Houses for Rent in Winnetka. ONE STOP SERVICE';

		$city = 'Winnetka';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Winnetka')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_winnetka')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}