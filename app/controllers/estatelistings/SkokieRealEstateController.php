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
	









		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereZip(60077)
		->paginate(10);



		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));










		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereZip(60076)
		->paginate(10);



		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));










		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereZip(60203)
		->paginate(10);



		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));











		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->paginate(10);



		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));











		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->paginate(10);



		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));










		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->whereZip(60077)
		->paginate(10);



		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));










		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->whereZip(60076)
		->paginate(10);



		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));











		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->paginate(10);



		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));











		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', 'Skokie')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->paginate(10);



		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));



