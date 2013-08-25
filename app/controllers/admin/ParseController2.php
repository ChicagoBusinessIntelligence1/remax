<?php
//LOCATION: remax/public/parse

class ParseController extends BaseController {



public function realtor_sale()
{
$html = file_get_contents(app_path().'\controllers\admin\realtor_sale.html');
$arr_schools = $this->getSchools($html);


return '===== END =====';
}


protected function getSchools($html)	
{
	$start = strpos($html, 'School Information');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$ul = substr($html, $start, $finish - $start);
	$this->lisToArray($ul);

	

}

protected function lisToArray($lists)
{
	$arr_lists = explode("</li>", $lists);
	foreach ($arr_lists as $list) {
		
		$list = explode(">", $list)[1];
		
	}
	return $arr_lists;
}

public function index()
{
$html = file_get_contents( 'http://www.remax-ni.net/realestatehomesforsale/60076-p001.html');

$resPosStart = strpos($html, 'js-listview')+13;
$resPosFinish = strpos($html, '</ol>', $resPosStart);
$elements = substr($html, $resPosStart, $resPosFinish - $resPosStart);
$start=0;
$finish =0;

echo '===== BEGINING =====<br/>';
$counter = 1;

while (strpos($elements, "itemprop=\"Address\"", $start)>0) {
$start = strpos($elements, "itemprop=\"Address\"", $start)+18;
$start = strpos($elements, ">", $start)+1;
$finish = strpos($elements, "<", $start);

$street = substr( $elements, $start, $finish - $start);

$start = strpos($elements, "itemprop=\"City\"", $start)+15;
$start = strpos($elements, ">", $start)+1;
$finish = strpos($elements, "<", $start);

$city = substr( $elements, $start, $finish - $start);

$start = strpos($elements, "itemprop=\"State\"", $start)+15;
$start = strpos($elements, ">", $start)+1;
$finish = strpos($elements, "<", $start);

$state = substr( $elements, $start, $finish - $start);

$start = strpos($elements, "itemprop=\"Zip\"", $start)+15;
$start = strpos($elements, ">", $start)+1;
$finish = strpos($elements, "<", $start);

$zip = substr( $elements, $start, $finish - $start);
$start = $finish;

echo $street . ' '. $city.' '. $state . ' ' .$zip.'<br/>';

}

return '===== END =====';
}

}