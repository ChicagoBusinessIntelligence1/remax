<?php
//namespace CBI\SEO;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;



class SeoCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:seo';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generates seo stuff';

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
	 // 1. Add route

	$keywords = $this->argument('keywords');
	$this->addRoute($keywords);

	

	 // 2. Create Controller
	 // 3. Render View with seo keywords
	 // 4. Create view file
	 // 5. Notify  

	$this->info('+++++++Come to the END+++++++');	
	
	}
	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */

	protected function addRoute($keywords)
	{
	$keywords = str_replace(" ", "-", $keywords);
	$controllerNameArray = explode("-", $keywords);
	$controllerName= ucfirst($controllerNameArray[0]) . ucfirst($controllerNameArray[1]);  
	$this->info($controllerName);

		# code...
	// $f = fopen(app_path()."/routes2.php", 'a');
	// fwrite($f,"\n");
	// fwrite($f,$keywords);
	// fclose($f);
	// // $this->info('Commands is finished');

	}

	protected function getArguments()
	{
		return array(
		array('keywords', InputArgument::REQUIRED, 'seo important keywords'),
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