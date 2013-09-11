<?php 

/**
* 
*/

class DcParser
{
	
	function __construct()
	{
			
	}

public function getBathrooms($html)	
{
	$start = strpos($html, 'Bathrooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	if(!is_numeric($start))
		return "";
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	$arrFullHalf = [];
	$fullBath = 0;
	$halfBath = 0; 


	$arrBathrooms = $this->lisToArray($element);
	foreach ($arrBathrooms as $bath) {
		
		if (!(strpos($bath, 'Full Bathrooms:')===false)){
			$tempArr = explode(':', $bath);
			 
			try {
			$fullBath = intval($tempArr[1]);
			} catch (Exception $e) {
			}
		}

		if (!(strpos($bath, 'Half Bathrooms:')===false)){
			$tempArr = explode(':', $bath);
			try {
			$halfBath = intval($tempArr[1]);
			} catch (Exception $e) {
			}
		}

	}
	$arrFullHalf['full'] = $fullBath;
	$arrFullHalf['half'] = $halfBath;

	return $arrFullHalf;
}

public function getBedrooms($html)	
{
	$start = strpos($html, 'Bedrooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	$temp = $this->lisToArray($element)[0];
	$beds=0;
	try {
	$arrBeds = explode(':', $temp);
	if (array_key_exists(1, $arrBeds))
	$beds = intval($arrBeds[1]);
	} catch (Exception $e) {
		
	}
	return $beds;
}

public function getLotSize($html)	
{
	$start = strpos($html, 'Lot Size');
	if ($start===false)
		return 0;

	$start = strpos($html, '<span', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, ' ', $start);
	$element = str_replace(',','',substr($html, $start, $finish - $start));
	return intval(trim($element));
	
}

public function getHouseSize($html)	
{
	$start = strpos($html, 'House Size');
	if ($start===false)
		return 0;

	$start = strpos($html, '<span', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, ' ', $start);
	$element = str_replace(',','',substr($html, $start, $finish - $start));
	return intval(trim($element));
	
}

protected function lisToArray($lists)
{

	$arr_new =[];
	$arr_lists = explode("</li>", $lists);
	foreach ($arr_lists as $list) {

		if(strpos('>', $list))
			continue;

		$list2 = explode(">", $list);
		if (count($list2)>1){
			$arr_new[]=trim($list2[1]);	
		}
	}
	return $arr_new;
}

}