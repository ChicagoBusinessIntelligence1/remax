<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Loc extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:loc';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Command description.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$arrCities=[];
		$arrCities[] = 'Skokie';
		$arrCities[] = 'Niles';
		$arrCities[] = 'Evanston';
		$arrCities[] = 'Morton-Grove';
		$arrCities[] = 'Glenview';
		$arrCities[] = 'Park-Ridge';
		$arrCities[] = 'Lincolnwood';
		$arrCities[] = 'Wilmette';
		$arrCities[] = 'Winnetka';
		$arrCities[] = 'Lake-Forest';

		foreach ($arrCities as $city) {
			$this->start($city);
		/////////////////
			 
		}

	}

	public function start($city)
	{
		
		$viewName = $this->updateRouteController($city);
		$this->updateView($viewName, $city);
		$this->updateMaster($city);

		/////////

	}



protected function updateMaster($city)
{
		$masterPath = app_path().'\views\layouts\master.blade.php';
		$master = \File::get($masterPath, 'r');


		$strStart = "<!-- $city =location -->";
		$strFinish = "<!-- $city =locationEnd -->";
		
		
		//dd($master);
		$start = strpos($master, $strStart)+strlen($strStart);
		$finish = strpos($master, $strFinish);
		

		//dd($start . ' -- '. $finish);
		$masterP1 = substr($master, 0, $start); 
		$lcityRoute = strtolower($city).'-lists';

		//$masterP2 ="<!-- $city =location -->\n\r";
		$masterP2 = "\n\r\t\t\t\t\t\t<li>{{link_to_route('$lcityRoute', '$city');}}</li>\n\r";
 		//$masterP2 .="\t\t\t\t\t\t<!-- $city =locationEnd -->\n\r\n\r";
 		//$masterP2 .=$strStart."\n\r";

		$masterP3 = "\t\t\t\t\t\t".substr($master, $finish);

		$newMaster = $masterP1.$masterP2.$masterP3;

		File::put($masterPath, $newMaster);


}

	protected function updateView($viewName, $city)
	{
		$viewPath = app_path()."/views/estatelistings/$viewName.blade.php";
		$view = File::get(app_path().'/commands/Loc/ViewTemplate.txt');

		$lcity = strtolower($city);
		$url = "$city-Real-Estate-Listings";

		$view = str_replace('{{url}}', $url, $view);

		File::put($viewPath, $view);

	}

	protected function updateRouteController($city)
		{
		$title  = "Real Estate Properties in $city";
		$meta  = "Real Estate Properties in $city. ONE STOP Comprehensive Real Estate service.";


		$route = File::get(app_path().'/routes.php');
		$searchText = "/* $city Route */";
		$searchTextFinish = "/* $city Route End */";

		$start = strpos($route, $searchText);
		if ($start===false) {
			$this->error("$folder cannot be found in route");
			die();
		}
		$start+=strlen($searchText);
		$finish  = strpos($route, $searchTextFinish);
		
		$routePart1 = substr($route, 0, $start)."\n\r";
		$routePart2 = substr($route, $finish);

		$fullControllerName = $city.'RealEstateController';
		$fullControllerName = str_replace('-', '', $fullControllerName);


		$lcity = strtolower($city);
		$url = "$city-Real-Estate-Listings";


		//$addToRouteFile  = "/* $city Route */\n\r";

		$addToRouteFile = "Route::get('$url', array('as'=>'$lcity-lists', 'uses'=>'$fullControllerName@index'));\n\r";
		

		$arrSaleZips = $this->getArrOfZips($city, 1);

		$arrRentZips = $this->getArrOfZips($city, 0);
		
		$controller = File::get(app_path().'/commands/Loc/ContTemplate.txt')."\n\r\n\r";


		$viewName = "vw_real_estate_in_$lcity";
		$contStringToAdd = '';
		foreach ($arrSaleZips as $zip) {



			$addToRouteFile .= "Route::get('$city-Houses-Sale-$zip', array('as'=>'$lcity-houses-sale-$zip', 'uses'=>'$fullControllerName@sale_$zip'));\n\r";
			
			$contStringToAdd .= "\tpublic function sale_$zip() {\n\r\n\r";
			$contStringToAdd .="\t\t\$title = 'Houses, Condos for Sale in $city at $zip';\n\r";
			$contStringToAdd .="\t\t\$meta = 'Houses, Condos for Sale in $city at $zip. ONE STOP SERVICE';\n\r\n\r";
			$contStringToAdd .="\t\t\$city = '$city';\n\r";
			$contStringToAdd .="\t\t\$zip = $zip;\n\r";


			$contStringToAdd .= 	"\t\t\$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', '$city')
		->where ('houses.issale', '=', 1)
		->whereZip($zip)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);\n\r\n\r\n\r";
			$contStringToAdd .= "\t\treturn View::make('estatelistings.$viewName')
		->with(compact('houses', 'city', 'zip'))
		->with(compact('title', 'meta'));\n\r}\n\r\n\r";

		}

		$addToRouteFile .= "Route::get('$city-Single-Families-Homes-Sale', array('as'=>'$lcity-single-families-sale', 'uses'=>'$fullControllerName@sale_single_fam'));\n\r";
		$addToRouteFile .= "Route::get('$city-Condos-Sale', array('as'=>'$lcity-condos-sale', 'uses'=>'$fullControllerName@sale_condos'));\n\r";


///////////
		$contStringToAdd .= "\tpublic function sale_single_fam() {\n\r\n\r";
			$contStringToAdd .="\t\t\$title = 'Single Families Homes for Sale in $city';\n\r";
			$contStringToAdd .="\t\t\$meta = 'Single Families Homes for Sale in $city. ONE STOP SERVICE';\n\r\n\r";
			$contStringToAdd .="\t\t\$city = '$city';\n\r";
			$contStringToAdd .="\t\t\$type = 'single-families';\n\r";
			$contStringToAdd .="\t\t\$typeTitle = 'Single Families';\n\r";

			$contStringToAdd .= 	"\t\t\$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', '$city')
		->where ('houses.issale', '=', 1)
		->whereType_id (2)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);\n\r\n\r\n\r";
			$contStringToAdd .= "\t\treturn View::make('estatelistings.$viewName')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));\n\r}\n\r\n\r";
///////////////

		///////////
		$contStringToAdd .= "\tpublic function sale_condos() {\n\r\n\r";
			$contStringToAdd .="\t\t\$title = 'Condos/Apartments for Sale in $city';\n\r";
			$contStringToAdd .="\t\t\$meta = 'Condos/Apartments for Sale in $city. ONE STOP SERVICE';\n\r\n\r";
			$contStringToAdd .="\t\t\$city = '$city';\n\r";
			$contStringToAdd .="\t\t\$type = 'condos';\n\r";
			$contStringToAdd .="\t\t\$typeTitle = 'Condos';\n\r";

			$contStringToAdd .= 	"\t\t\$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', '$city')
		->where ('houses.issale', '=', 1)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);\n\r\n\r\n\r";
			$contStringToAdd .= "\t\treturn View::make('estatelistings.$viewName')
		->with(compact('houses', 'city', 'type', 'typeTitle'))
		->with(compact('title', 'meta'));\n\r}\n\r\n\r";
///////////////


		

		$addToRouteFile .= "Route::get('$city-Single-Families-Homes-Sale', array('as'=>'$lcity-single-families-sale', 'uses'=>'$fullControllerName@sale_single_fam'));\n\r";
		$addToRouteFile .= "Route::get('$city-Condos-Sale', array('as'=>'$lcity-condos-sale', 'uses'=>'$fullControllerName@sale_condos'));\n\r";



		foreach ($arrRentZips as $zip) {
			$addToRouteFile .= "Route::get('$city-Rentals-$zip', array('as'=>'$lcity-houses-rent-$zip', 'uses'=>'$fullControllerName@rent_$zip'));\n\r";
		
			$contStringToAdd .= "\tpublic function rent_$zip() {\n\r\n\r";
			$contStringToAdd .="\t\t\$title = 'Houses and Apartments for rent in $city at $zip';\n\r";
			$contStringToAdd .="\t\t\$meta = 'Houses and Apartments for rent in $city at $zip. ONE STOP SERVICE';\n\r\n\r";
			$contStringToAdd .="\t\t\$city = '$city';\n\r";
			$contStringToAdd .="\t\t\$rzip = $zip;\n\r";

			$contStringToAdd .= 	"\t\t\$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', '$city')
		->where ('houses.issale', '=', 0)
		->whereZip($zip)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);\n\r\n\r\n\r";
			$contStringToAdd .= "\t\treturn View::make('estatelistings.$viewName')
		->with(compact('houses', 'city', 'rzip'))
		->with(compact('title', 'meta'));\n\r}\n\r\n\r";

		}


		$addToRouteFile .= "Route::get('$city-Apartments-for-Rent', array('as'=>'$lcity-apartments-rent', 'uses'=>'$fullControllerName@rent_apartments'));\n\r";
				$contStringToAdd .= "\tpublic function rent_apartments() {\n\r\n\r";
			$contStringToAdd .="\t\t\$title = 'Apartments for Rent in $city';\n\r";
			$contStringToAdd .="\t\t\$meta = 'Apartments for Rent in $city. ONE STOP SERVICE';\n\r\n\r";
			$contStringToAdd .="\t\t\$city = '$city';\n\r";
			$contStringToAdd .="\t\t\$rtype = 'apartments';\n\r";
			$contStringToAdd .="\t\t\$rtypeTitle = 'Apartments';\n\r";

			$contStringToAdd .= 	"\t\t\$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', '$city')
		->where ('houses.issale', '=', 0)
		->whereType_id (1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);\n\r\n\r\n\r";
			$contStringToAdd .= "\t\treturn View::make('estatelistings.$viewName')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));\n\r}\n\r\n\r";




		$addToRouteFile .= "Route::get('$city-Houses-for-Rent', array('as'=>'$lcity-houses-rent', 'uses'=>'$fullControllerName@rent_houses'));\n\r";
		



		$contStringToAdd .= "\tpublic function rent_houses() {\n\r\n\r";
			$contStringToAdd .="\t\t\$title = 'Houses for Rent in $city';\n\r";
			$contStringToAdd .="\t\t\$meta = 'Houses for Rent in $city. ONE STOP SERVICE';\n\r\n\r";
			$contStringToAdd .="\t\t\$city = '$city';\n\r";
			$contStringToAdd .="\t\t\$rtype = 'houses';\n\r";
			$contStringToAdd .="\t\t\$rtypeTitle = 'Houses';\n\r";

			$contStringToAdd .= 	"\t\t\$houses  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->join('types', 'houses.type_id', '=', 'types.id')
		->where('cities.city', '=', '$city')
		->where ('houses.issale', '=', 0)
		->where ('type_id', '>', 1)
		->select('houses.id', 'houses.address', 'houses.price', 'types.type', 'houses.mls', 'houses.year', 
			'houses.baths','houses.description', 'houses.beds','houses.maximgid', 'houses.issale', 'cities.city')
		->paginate(10);\n\r\n\r\n\r";
			$contStringToAdd .= "\t\treturn View::make('estatelistings.$viewName')
		->with(compact('houses', 'city', 'rtype', 'rtypeTitle'))
		->with(compact('title', 'meta'));\n\r}\n\r\n\r";


		$controller.=$contStringToAdd;

		$controller = str_replace('{{url}}', $url, $controller);
		$controller = str_replace('{{ControllerName}}', $fullControllerName, $controller);
		$controller = str_replace('{{title}}', $title, $controller);
		$controller = str_replace('{{meta}}', $meta, $controller);
		$controller = str_replace('{{city}}', "'$city'", $controller);


		$controller = str_replace('{{viewName}}', $viewName, $controller);

	$controller.="\n\r}";

		/////////////////////
		File::put(app_path()."/controllers/estatelistings/$fullControllerName.php", $controller);
		


		$newRouteFile = $routePart1.$addToRouteFile.$routePart2;


		////////////////////////////////////////////////////
		if (File::put(app_path().'/routes.php', $newRouteFile))
			return $viewName;

		die('Routes cannot be written');

	}

	protected function getArrOfZips($city, $issale)
	{
		$zips  = DB::table('houses')
		->join('cities', 'houses.city_id', '=', 'cities.id')
		->where('cities.city', '=', $city)
		->where ('houses.issale', '=', $issale)
		->distinct('zip')
		->lists('zip');
		return $zips;

	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
	//		array('example', InputArgument::REQUIRED, 'An example argument.'),
			);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
	//		array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
			);
	}

}