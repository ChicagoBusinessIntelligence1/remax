<?php
namespace Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DcCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:dc';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Change Realtor Parsing';

	protected $parser;

	public function __construct($dcParser)
	{
		parent::__construct();
		$this->parser = $dcParser;

	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$houses = \House::all();

		foreach ($houses as $house) {
			$houseDescription = $house->description;

			$baths = $this->parser->getBathrooms($houseDescription);
	//-----------
			$halfBath = $baths['half'];
			$fullBath = $baths['full'] + 0.5*$halfBath;
			$beds = $this->parser->getBedrooms($houseDescription);
			$lotSize = $this->parser->getLotsize($houseDescription);
			$houseSize = $this->parser->getHousesize($houseDescription);
	 //-----------


			$house->baths=$fullBath;
			$house->halfbaths=$halfBath;
			$house->beds=$beds;
			$house->size = $houseSize; 
			$house->lotsize = $lotSize; 
			$house->save();
	//------------------
			$this->info($house->id);
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