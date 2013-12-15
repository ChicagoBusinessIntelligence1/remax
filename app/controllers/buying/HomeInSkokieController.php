<?php
 //LOCATION: remax/public/buying-home-in-skokie
class HomeInSkokieController extends BaseController {



	public function index()
	{
		$zips  = DB::table('listings')
		->whereCity_id(1)
		->distinct('zip')
		->lists('zip');

		

		$title = 'Buying Home in Skokie with Remax 1st class';
		$meta = 'Buying Home In Skokie. ONE STOP SERVICE!';
		////////////////
		$zip = 60076;
		$count60076  = Listing::with('City')
		->where('issale', '=', 1)
		->whereZip($zip)
		->whereCity_id(1)->count();
		
		$zip = 60077;
		$count60077  = Listing::with('City')
		->where('issale', '=', 1)
		->whereZip($zip)
		->whereCity_id(1)->count();

		$zip = 60203;
		$count60203  = Listing::with('City')
		->where('issale', '=', 1)
		->whereZip($zip)
		->whereCity_id(1)->count();

		$type = 1;
		$countCondos  = Listing::with('City')
		->where('issale', '=', 1)
		->whereType_id($type)
		->whereCity_id(1)->count();
		
		$type = 2;
		$countSingle  = Listing::with('City')
		->where('issale', '=', 1)
		->whereType_id($type)
		->whereCity_id(1)->count();

		$counts = array($count60076, $count60077,$count60203,$countCondos,$countSingle);

		////////////////
		return View::make('buying.vw_home_in_skokie')
		->with(compact('zips'))
		->with(compact('counts'))
		->with(compact('title', 'meta'));
	}

	public function skokie_60076()
	{
		$zip = 60076;
		$houses  = Listing::with('City')
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
		$houses  = Listing::with('City')
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
		$houses  = Listing::with('City')
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

	public function skokie_single()
	{
		$type = 2;
		$houses  = Listing::with('City')
		->where('issale', '=', 1)
		->whereType_id($type)
		->whereCity_id(1)
		->paginate(10);

		$title = "Skokie Homes for Single Family";
		$meta = "Skokie Homes for Single Family. ONE STOP ESTATE SERVICE";

		return View::make('buying.vw_home_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta', 'type'));
	}

	public function skokie_condos()
	{
		
		$type = 1;
		$houses  = Listing::with('City')
		->where('issale', '=', 1)
		->whereType_id($type)
		->whereCity_id(1)
		->paginate(10);

		$title = "Skokie Condos for Sale";
		$meta = "Condos in Skokie for Sale. ONE STOP ESTATE SERVICE";

		return View::make('buying.vw_home_in_skokie')
		->with(compact('houses'))
		->with(compact('title', 'meta', 'type'));
	}

}