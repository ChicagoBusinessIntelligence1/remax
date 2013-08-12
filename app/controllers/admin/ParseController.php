<?php
//LOCATION: remax/public/parse

class ParseController extends BaseController {

/*
|--------------------------------------------------------------------------
| Default Home Controller
|--------------------------------------------------------------------------
|
| You may wish to use controllers instead of, or in addition to, Closure
| based routes. That's great! Here is an example controller method to
| get you started. To route to this controller, just add the route:
|
| Route::get('/', 'HomeController@showWelcome');
|
*/

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