<?php
 //LOCATION: remax/public/North-Chicagoland-Homes-For-Sale
class NorthChicagolandController extends BaseController {



	public function index()
	{
		
		$houses  = House::where('issale', '=', 1)->paginate(10);

		$title = 'Homes and Appartments for Sale in North Chicagoland';
		$meta = 'Real Estate services in Chicagoland Area from Remax. ONE STOP SERVICE';

		return View::make('seo.vw_north_chicagoland')
		->with(compact('title', 'meta'))
		->with(compact('houses'))
		->with('gents', parent::getRandomAgents());
	}

}