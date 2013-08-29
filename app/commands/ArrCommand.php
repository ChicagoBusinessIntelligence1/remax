<?php
namespace Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;



class ArrCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:arr';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generates arr check';
	protected $writer;	

	public function __construct($writer)
	{

		parent::__construct();
		$this->writer = $writer;
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
	 	$html  = \File::get(__DIR__.'\ac.txt');
		
	 	$start = 0;
	 	$finish=0;
	 	$methodFinal = '';
	 	$counter=0;

	 	while (true) {
	 	

	 	$finish = strpos($html,'];', $start)+2;
	 	if ($finish==2){
			$end = substr($html, $start, strlen($html)-$start);
			$methodFinal.=$end;
	 		break;
	 	}

		$method = substr($html, $start, $finish-$start);
		$rmethod = strrev($method);
		
		$index = strrev(substr($rmethod, 2,strpos($rmethod, '[')-2));
		 

		$start2 = strpos($rmethod,'$')+1;
		$start3 = strpos($rmethod,'[')+1;
		$arr_nameTemp = strrev(substr($rmethod, $start3, $start2-$start3));
		// dd($arr_nameTemp);
		
		
		if (!strpos($rmethod,'$')) {
			var_dump($start);
			dd($finish);
			$methodFinal.= substr($html, $finish, strlen($html)-$finish);
			break;
		}

		$start2 = strpos($rmethod,'$', $start2)+1;
		
		$arr_name = $arr_nameTemp;
		$line = strrev(substr($rmethod, 0, $start2));
		//dd($method);
		
		

		$method = substr($method, 0, strlen($method)-strlen($line));
		
		$methodFinal.=$method;

		//$finish = strlen($method)+strlen($line);
		$start=$finish; 

		//dd($test);

		$methodFinal .= "\n\tif(array_key_exists($index, $arr_name))";
		$methodFinal .= "\n\t".$line;
		
	}
		\File::put(__DIR__.'ac_changed.txt', $methodFinal);
		



		$this->info('+++++++ ARR Seems no mistakes +++++++');	

	}



	protected function getArguments()
	{
		return array(
//			array('keywords', InputArgument::REQUIRED, 'seo important keywords'),
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