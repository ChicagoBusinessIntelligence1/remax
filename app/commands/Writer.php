<?php 
namespace Commands;
/**
* 
*/

use Illuminate\Console\Command as C;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Writer 
{
	
	function __construct()
	{
		# code...
	}


	public function put($path, $content)
	{
	$f = fopen($path, 'a+');
	fwrite($f,"\n");
	fwrite($f,$content);
	return fclose($f);
	



	}
}

