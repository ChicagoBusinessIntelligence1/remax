<?php
 //LOCATION: remax/public/Parser-realtor
class ParserRealtorController extends BaseController {



	public function index()
	{
		
		$title = 'Make short sentence with Parser, realtor';
		$meta = 'Make short sentence with call to action in the END Parser, realtor';

		return View::make('seo.vw_parser_realtor')
		->with(compact('title', 'meta'));
	}

}