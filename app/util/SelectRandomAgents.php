<?php 
//LOCATION: remax/public  
class SelectRandomAgents 
{
	public static function choose($arrayAgents, $numberAgents)
	{

		$maxNumber = count($arrayAgents);
		$arrIds = array();
		for ($i=0; $i < $maxNumber; $i++) { 
			$arrIds[]=$i;
		}
		shuffle($arrIds);
		$arrayFinal = array();	
		for ($i=0; $i < $numberAgents && $i<$maxNumber; $i++) { 
			$arrayFinal[]= $arrayAgents[$arrIds[$i]];	
		}
		return $arrayFinal;
	}

	
	
}