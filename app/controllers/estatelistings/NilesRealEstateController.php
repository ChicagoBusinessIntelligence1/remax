<?php
 //LOCATION: remax/public/Niles-Real-Estate-Listings
class NilesRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Niles';
		$meta = 'Real Estate Properties in Niles. ONE STOP Comprehensive Real Estate service.';
		$city = 'Niles';
		
		$zipSale  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 1)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 0)
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
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 1)
		->whereZip(60714)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_607() {

		$title = 'Houses, Condos for Sale in Niles at 607';
		$meta = 'Houses, Condos for Sale in Niles at 607. ONE STOP SERVICE';

		$city = 'Niles';
		$zip = 607;
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 1)
		->whereZip(607)
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
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
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
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
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
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 0)
		->whereZip(60714)
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
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
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
		$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Niles')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_niles')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}