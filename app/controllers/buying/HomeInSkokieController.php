<?php
 //LOCATION: remax/public/buying-home-in-skokie
class HomeInSkokieController extends BaseController {



	public function index()
	{
		$zips  = DB::table('houses')
		->whereCity_id(1)
		->distinct('zip')
		->lists('zip');

		

		$title = 'Buying Home in Skokie with Remax 1st class';
		$meta = 'Buying Home In Skokie. ONE STOP SERVICE!';

		return View::make('buying.vw_home_in_skokie')
		->with(compact('zips'))
		->with(compact('title', 'meta'));
	}

	public function skokie_60076()
	{
		$zip = 60076;
		$houses  = House::with('City')
		->where('issale', '=', 1)
		->whereZip($zip)
		->whereCity_id(1)
		->paginate(10);

		


		$title = "Skokie Homes for Sale at $zip";
		$meta = "Skokie Homes for Sale at $zip. ONE STOP Real Estate SERVICE";

		return View::make('buying.vw_home_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta', 'zip'));
	}

	public function skokie_60077()
	{
		$zip = 60077;
		$houses  = House::with('City')
		->where('issale', '=', 1)
		->whereZip($zip)
		->whereCity_id(1)
		->paginate(10);

		$title = "Skokie Homes for Sale at $zip";
		$meta = "Skokie Homes for Sale at $zip. ONE STOP Real Estate SERVICE";

		return View::make('buying.vw_home_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta', 'zip'));
	}

	public function skokie_60203()
	{
		$zip = 60203;
		$houses  = House::with('City')
		->where('issale', '=', 1)
		->whereZip($zip)
		->whereCity_id(1)
		->paginate(10);

		$title = "Skokie Homes for Sale at $zip";
		$meta = "Skokie Homes for Sale at $zip. ONE STOP Real Estate SERVICE";

		return View::make('buying.vw_home_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta', 'zip'));
	}

}