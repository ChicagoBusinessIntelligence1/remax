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
		$this->arrAllpages();
	}

	protected function arrAllpages()
	{



	$this->info('Getting city Links to parse');
	$arrCityLinks = $this->realtor->getAllCityPages();
	
	foreach ($arrCityLinks as $cityLink) {
		$this->info("started parsing $cityLink");
		$html = $this->realtor->get($cityLink);

		$houseLinks = $this->realtor->getHouseLinkArrays($html);

		foreach ($houseLinks as $url) {
			$full_url = "http://www.realtor.com".$url;
			$this->info($full_url);
			$this->realtor->realtor_sale($full_url);
			
		}


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
			//array('example', InputArgument::REQUIRED, 'An example argument.'),
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