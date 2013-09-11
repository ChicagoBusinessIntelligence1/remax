<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Cv extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'command:cv';

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
		$folder = $this->argument('folder');
		$contname = $this->argument('contname');
		$issale = $this->argument('issale');
		$city = $this->argument('city');

		$fullControllerName =  $this->updateRoute($folder, $contname);
		$url = $folder.'-'.$contname;
		$viewPath =$this->updateController($url, $fullControllerName, $issale, $city);
		$this->updateView($viewPath);
		$this->generateLink($url);
	}

	protected function generateLink($url)
	{
		$linkTitle = ucwords(str_replace('-', ' ', $url));
		$linkRoute = "<li>{{link_to_route('$url', '$linkTitle');}}</li>";

		$path = app_path().'/views/CopyLinks.txt';

		if (File::put($path, $linkRoute))
			return true;
	}

	protected function updateView($viewPath)
	{
		$viewPathFull = app_path().'/views/'.str_replace('.', '/', $viewPath).".blade.php";
		
		$viewTemplate = File::get(app_path().'/commands/ViewTemplateNH.txt');

		$h1 = str_replace('.', ' ', $viewPath);
		$h1 = str_replace('vw', '', $h1);
		$h1 = str_replace(' ', '', $h1);
		$h1 = ucwords(str_replace('_', ' ', $h1));

		$viewTemplate = str_replace('{{H1}}', $h1, $viewTemplate);

		if (File::put($viewPathFull, $viewTemplate))
			return true;

		die('Controller cannot be written');

	}


	protected function updateController($url, $controllerName, $issale, $city)
	{
		$title = ucwords(str_replace('-', ' ', $url));
		$meta = $title.'. ONE STOP SERVICE!';

		$start = strpos($url, '-');
		$viewDir = substr($url, 0, $start);
		$viewName = str_replace('-', '_',substr($url, $start+1));
		$viewPath = "$viewDir.vw_$viewName"; 


		$controllerTemplate = File::get(app_path().'/commands/CVControllerTemplate.txt');

		$controllerTemplate = str_replace('{{url}}', $url, $controllerTemplate);
		$controllerTemplate = str_replace('{{issale}}', $issale, $controllerTemplate);
		$controllerTemplate = str_replace('{{city}}', $city, $controllerTemplate);
		
		$controllerTemplate = str_replace('{{controllerName}}', $controllerName, $controllerTemplate);
		$controllerTemplate = str_replace('{{title}}', $title, $controllerTemplate);
		$controllerTemplate = str_replace('{{meta}}', $meta, $controllerTemplate);
		$controllerTemplate = str_replace('{{viewPath}}', $viewPath, $controllerTemplate);
		
		$controllerPath = app_path()."/controllers/$viewDir/$controllerName.php";
		if (File::put($controllerPath, $controllerTemplate))
			return $viewPath;

		die('Controller cannot be written');


	}


	protected function updateRoute($folder, $contname)
	{
		$route = File::get(app_path().'/routes.php');
		$searchText = "/* =$folder */";
		$start = strpos($route, $searchText);
		if ($start===false) {
			$this->error("$folder cannot be found in route");
			die();
		}
		$start+=strlen($searchText);
		$routePart1 = substr($route, 0, $start)."\n\r";
		$routePart2 = substr($route, $start);

		$fullControllerName = str_replace(' ', '', ucwords(str_replace('-', ' ', $contname))).'Controller';

		$stringToAdd = "Route::get('$folder-$contname', array('as'=>'$folder-$contname', 'uses'=>'$fullControllerName@index'));\n\r";
		$newRouteFile = $routePart1.$stringToAdd.$routePart2;
		////////////////////////////////////////////////////
		if (File::put(app_path().'/routes.php', $newRouteFile))
			return $fullControllerName;

		die('Routes cannot be written');





	}
	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('folder', InputArgument::REQUIRED, 'Folder to generate controllers and views'),
			array('contname', InputArgument::REQUIRED, 'Controller and View Name'),
			array('issale', InputArgument::REQUIRED, 'Sale = 1, Rent = 0'),
			array('city', InputArgument::REQUIRED, 'City'),
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
			// array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
			);
	}

}