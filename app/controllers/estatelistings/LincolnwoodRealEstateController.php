<?php
 //LOCATION: remax/public/Lincolnwood-Real-Estate-Listings
class LincolnwoodRealEstateController extends BaseController {



	public function index()
	{
		$title = 'Real Estate Properties in Lincolnwood';
		$meta = 'Real Estate Properties in Lincolnwood. ONE STOP Comprehensive Real Estate service.';
		$city = 'Lincolnwood';
		
		$zipSale  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 0)
		->distinct('zip')
		->lists('zip');
		

			$zipRent  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 1)
		->distinct('zip')
		->lists('zip');

		////////////////
		
		$zips = ['saleZips'=>$zipSale,
				'rentZips'=>$zipRent];


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('zips', 'city'))
		->with(compact('title', 'meta'));
	}
	

	public function sale_60712() {

		$title = 'Houses, Condos for Sale in Lincolnwood at 60712';
		$meta = 'Houses, Condos for Sale in Lincolnwood at 60712. ONE STOP SERVICE';

		$city = 'Lincolnwood';
		$zip = 60712;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 0)
		->whereZip(60712)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_60645() {

		$title = 'Houses, Condos for Sale in Lincolnwood at 60645';
		$meta = 'Houses, Condos for Sale in Lincolnwood at 60645. ONE STOP SERVICE';

		$city = 'Lincolnwood';
		$zip = 60645;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 0)
		->whereZip(60645)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));
}

	public function sale_single_fam() {

		$title = 'Single Families Homes for Sale in Lincolnwood';
		$meta = 'Single Families Homes for Sale in Lincolnwood. ONE STOP SERVICE';

		$city = 'Lincolnwood';
		$type = 'single-families';
		$typeTitle = 'Single Families';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 0)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function sale_condos() {

		$title = 'Condos/Apartments for Sale in Lincolnwood';
		$meta = 'Condos/Apartments for Sale in Lincolnwood. ONE STOP SERVICE';

		$city = 'Lincolnwood';
		$type = 'condos';
		$typeTitle = 'Condos';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_60712() {

		$title = 'Houses and Apartments for rent in Lincolnwood at 60712';
		$meta = 'Houses and Apartments for rent in Lincolnwood at 60712. ONE STOP SERVICE';

		$city = 'Lincolnwood';
		$rzip = 60712;
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 1)
		->whereZip(60712)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));
}

	public function rent_apartments() {

		$title = 'Apartments for Rent in Lincolnwood';
		$meta = 'Apartments for Rent in Lincolnwood. ONE STOP SERVICE';

		$city = 'Lincolnwood';
		$rtype = 'apartments';
		$rtypeTitle = 'Apartments';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}

	public function rent_houses() {

		$title = 'Houses for Rent in Lincolnwood';
		$meta = 'Houses for Rent in Lincolnwood. ONE STOP SERVICE';

		$city = 'Lincolnwood';
		$rtype = 'houses';
		$rtypeTitle = 'Houses';
		$houses  = DB::table('listings')
		->join('cities', 'listings.city_id', '=', 'cities.id')
		
		->where('cities.CityName', '=', 'Lincolnwood')
		->where ('listings.isRental', '=', 1)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.CityName')
		->paginate(10);


		return View::make('estatelistings.vw_real_estate_in_lincolnwood')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));
}


}