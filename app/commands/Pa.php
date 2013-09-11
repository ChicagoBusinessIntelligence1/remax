<?php

include_once app_path().'/commands/Pa/Realtor.php';

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;



class Pa extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $http;
	protected $realtor;


	protected $name = 'command:pa';

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

		//$this->http = new Http();
		$this->realtor = new Realtor();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		// $clean = $this->confirm("Clean all images folder?");
		// if ($clean){
		// 	if (File::cleanDirectory(public_path().'/comp/img/images')){
		// 		$this->info('Images have been deleted');
		// 		} else {
					
		// 		$this->error('Maybe problem in images folder deletion');
		// 		}
		// 	}
		$issale = $this->argument('issale');


		$this->arrAllpages($issale);
	}

	protected function arrAllpages($issale)
	{

	$saleparses = Saleparse::all();
	if (count($saleparses)==0) {

	$this->info('Getting city Links to parse');
	$arrCityLinks = $this->realtor->getAllCityPages($issale);
	
	foreach ($arrCityLinks as $cityLink) {
		$this->info("started parsing $cityLink");
		$html = $this->realtor->get($cityLink);

		$houseLinks = $this->realtor->getHouseLinkArrays($html);

		foreach ($houseLinks as $url) {
			if (strpos($url, 'path/to/save/')!==false)
				continue;
			$full_url = $url;
			$saleparse = new Saleparse();
			$saleparse->url = $full_url;
			$saleparse->save();

			}
		}
	}
	$saleparses = Saleparse::all();
	$total = count($saleparses);
	$counter = 1;
	foreach ($saleparses as $saleparse) {
		$url = "http://www.realtor.com".$saleparse->url;
		$html = $this->realtor->get($url, $issale);
		
		if (strpos($html, "Blocked IP Address")!==false){
		die('Zablockirovali Pidorasy');
		}

		$this->realtor->realtor_sale($url, $html, $issale);
		$saleparse->delete();
		$this->info("Parsed  $counter out of $total");
		$counter++;

		if($counter%50==0)
			usleep(10000);

		}
	}


	



	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('issale', InputArgument::REQUIRED, '1-sale, 0, rent'),
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
			//array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}