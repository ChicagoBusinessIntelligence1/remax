<?php
 //LOCATION: remax/public/Skokie-Real-Estate-Listings
class SkokieRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Skokie';
		$meta = 'Real Estate Properties in Skokie. ONE STOP Comprehensive Real Estate service.';

		$zipSale  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 0 )
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=',1 )
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('zips'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60077() {

		$title = 'Homes, Condos for Sale in Skokie at 60077';
		$meta = 'Homes, Condos for Sale in Skokie at 60077. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 0)
		->whereZip ('houses.zip', '=', 60077)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function sale_60076() {

		$title = 'Homes, Condos for Sale in Skokie at 60076';
		$meta = 'Homes, Condos for Sale in Skokie at 60076. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 0)
		->whereZip ('houses.zip', '=', 60076)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function sale_60203() {

		$title = 'Homes, Condos for Sale in Skokie at 60203';
		$meta = 'Homes, Condos for Sale in Skokie at 60203. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 0)
		->whereZip ('houses.zip', '=', 60203)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Skokie';
		$meta = 'Single Families Homes for Sale in Skokie. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 0)
		->whereType_id (2)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Skokie';
		$meta = 'Condos/Apartments for Sale in Skokie. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 0)
		->whereType_id (1)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function rent_60077() {

		$title = 'Houses and Apartments for rent in Skokie at 60077';
		$meta = 'Houses and Apartments for rent in Skokie at 60077. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 1)
		->whereZip ('houses.zip', '=', 60077)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function rent_60076() {

		$title = 'Houses and Apartments for rent in Skokie at 60076';
		$meta = 'Houses and Apartments for rent in Skokie at 60076. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 1)
		->whereZip ('houses.zip', '=', 60076)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Skokie';
		$meta = 'Apartments for Rent in Skokie. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 1)
		->whereType_id (1)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Skokie';
		$meta = 'Houses for Rent in Skokie. ONE STOP SERVICE';

		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Skokie')
		->where ('listings.isRental', '=', 1)
		->where ('type_id', '>', 1)
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta'));
}


}