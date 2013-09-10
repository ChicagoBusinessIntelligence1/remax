<?php 
include_once 'Http.php';
include_once 'DcParser.php';


class Realtor
{
protected $parser;

public function __construct()
	{
	$this->parser = new DcParser();
	}


public function getAllCityPages()
{
	$arrLinks = [];

	$arrCities=[];

	$mLink = 'http://www.realtor.com/realestateandhomes-search/{{city}}?pgsz=300';

	$arrCities[] = 'Skokie_IL';
	$arrCities[] = 'Niles_IL';
	$arrCities[] = 'Evanston_IL';
	$arrCities[] = 'Morton-Grove_IL';
	$arrCities[] = 'Glenview_IL';
	$arrCities[] = 'Park-Ridge_IL';
	$arrCities[] = 'Lincolnwood_IL';
	$arrCities[] = 'Wilmette_IL';
	$arrCities[] = 'Winnetka_IL';
	$arrCities[] = 'Lake-Forest_IL';

	

	foreach ($arrCities as $city) {
		$link = str_replace('{{city}}', $city, $mLink);
		$arrLinks[] = $link;

///////////////////////////////////
	//	break;
///////////////////////////////////

		$html = $this->get($link);
		if (strpos($html,'pg-2')!==false)
			$arrLinks[] = $link.'&pg=2';


	}



	return $arrLinks;
}
public function get($url)
{
	$opts = array('http' =>
    array(
        'method'  => 'GET',
        'user_agent '  => "Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2) Gecko/20100301 Ubuntu/9.10 (karmic) Firefox/3.6",
        'header' => array(
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*\/*;q=0.8
'
        ), 
    )
);
$context  = stream_context_create($opts);


		$html =  file_get_contents($url, false, $context);
return $html;
}

public function getHouseLinkArrays($html)
	{

	$arrLinks = [];		


	$iter = 1;
	$start = 0;
	while (true) {

	$start = strpos($html, "listing-wrap", $start);
	if ($start===false)
	break;

	$start = strpos($html, '<a href="', $start)+strlen('<a href="');
	$finish = strpos($html, '"', $start);

	$element = trim(substr($html, $start, $finish - $start));
		$arrLinks[]= $element;
	$start = $finish;
	}

	return $arrLinks;
	}

public function getAddressArr($url, $house)
{
	$st = 'detail/';
	$start = strpos($url, $st)+strlen($st);
	$finish = strpos($url, '_', $start);
	$strAddress = substr($url, $start, $finish - $start);
	

	$strArr = explode('-', $strAddress);
	////
	if (count($strArr)<3)
		return;
	
	$street = $strArr[1].' '.$strArr[2];
	
		$streetObj = Street::whereStreet($street)->first();
		if ($streetObj){
			$house->street()->associate($streetObj);
		} else {
			$nStreet = new Street();
			$nStreet->street = $street;
			$nStreet->save();			
			$nStreet->house()->save($house);
		}

	///
	$streetAddress_txt = str_replace('-', ' ', $strAddress);
	$house->street_txt = $streetAddress_txt;

	$start = $finish+1;
	$finish = strpos($url, '_', $start);
	
	////
	$city = substr($url, $start, $finish - $start);
	$cityObj = City::whereCity($city)->first();
		if ($cityObj){
			$house->city()->associate($cityObj);
		} else {
			$nCity = new City();
			$nCity->city = $city;
			$nCity->save();			
			$nCity->house()->save($house);
		}

	///
	$start = $finish+1;
	$finish = strpos($url, '_', $start);
	
	////
	$state = substr($url, $start, $finish - $start);
	$stateObj = State::whereState($state)->first();
		if ($stateObj){
			$house->state()->associate($stateObj);
		} else {
			$nState = new State();
			$nState->state = $state;
			$nState->save();			
			$nState->house()->save($house);
		}



	$start = $finish+1;
	$finish = strpos($url, '_', $start);
	
	////
	$zip = intval(substr($url, $start, $finish - $start));
	$house->zip = $zip;
	$house->save();
}


public function realtor_sale($url)
	{
		$this->getAddress($url);

		$html = $this->get($url);


		$house = new House();
		
		$type = $this->getPropertyType($html);
		if (strpos($type, 'Single')===false && strpos($type, 'Condo')===false)
			return;

		$house->realtor_url = $url;	
		$house->save();
		
		$this->getAddressArr($url, $house);



		$searchType = Type::whereType($type)->first();
		if ($searchType){
			$house->type()->associate($searchType);
		} else {
			$newType = new Type();
			$newType->type = $type;
			$newType->save();			
			$newType->house()->save($house);
		}
		


		$status = $this->getStatus($html);
			$statusObj = Status::whereStatus($status)->first();
		if ($statusObj){
			$house->status()->associate($statusObj);
		} else {
			$newStatus = new Status();
			$newStatus->status = $status;
			$newStatus->save();			
			$newStatus->house()->save($house);
		}
		
		

		if (strpos($html, 'badge-foreclosure')) {

		$saletypeObj = Saletype::find(1);
		$house->saletypes()->attach($saletypeObj);
		}
		
		

		if (strpos($html, 'badge-bank-owned')) {
		$saletypeObj = Saletype::find(2);
		$house->saletypes()->attach($saletypeObj);
		}
		

		if (strpos($html, 'badge-short-sale')) {
			$saletypeObj = Saletype::find(3);
		$house->saletypes()->attach($saletypeObj);
		}

				
		$mls = $this->getMls($html);
		$size = $this->getHouseSize($html);

		$year = $this->getHouseYear($html);


		$address = $this->getAddress($html);
		$price = $this->getPrice($html);
		

		
		

		$house->mls = $mls;
		$house->size = $size;

		if(intval($year)>1800)
			$house->year = $year;
		
		$house->address = $address;
		if(intval($price)>1)
			$house->price = $price;


		$description = $this->getDescription($html);


		$house->description = $description;

		$houseDescription = $description;

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



		$house->issale = 1;


		if(!$house->save())
		return 'ERROR occured';	



	$id = $house->id;
	
	$this->extractImages($html, $house);

return true;
		
	
}

protected function getDescription($html)
{

	$start = strpos($html, '<h2 class="title-section title-section-detail">Property Details</h2>');
	$finish = strpos($html, '<div id="AdditionalDetails">', $start);
	$element = trim(substr($html, $start, $finish - $start));
	return trim($element);
	
}


protected function extractImages($html, $house)
		{
			$start = strpos($html, 'galleryCount'); 
			$start = strpos($html, 'of', $start); 
			$start = strpos($html, '<b>', $start)+3; 
			$finish = strpos($html, '</b>', $start); 

			$numbOfImages = substr($html, $start, $finish - $start);
			
			$maxIter = intval($numbOfImages);
			
			

			$iterator = 0;

						
			$start = strpos($html, '#modal_PhotoGallery');			
			$arr_images = [];

			while ($start<strlen($html) && ($start = strpos($html,'http://p.rdcpix.com', $start))) {
				
				$len = strlen('http://p.rdcpix.com');
				$finish = strpos($html,'.', $start+$len)+4;
				$imgAddress = substr($html, $start, $finish - $start);

				$start+=1;

				if (strpos($imgAddress, '0m') || strpos($imgAddress, '0s')){
				$maxIter--;
				continue;

				}

				if (!in_array($imgAddress, $arr_images)) {
					$arr_images[]=trim($imgAddress);
					}

					if (count($arr_images)>($maxIter+1))
						break;
				
			}
			
			$i=1;
			
			//dd($arr_images);

$opts = array('http' =>
    array(
        'method'  => 'GET',
        //'user_agent '  => "Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2) Gecko/20100301 Ubuntu/9.10 (karmic) Firefox/3.6",
        'header' => array(
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*\/*;q=0.8
'
        ), 
    )
);
$context  = stream_context_create($opts);

			foreach ($arr_images as $image) {
				try {
				

			
				$fileImage = file_get_contents($image,false, $context);



				$image = imagecreatefromstring($fileImage);	
				$width = intval(imagesx($image));
				$height = intval(imagesy($image));

				if ($width<100 || $height<100)
					continue;
			



				} catch (Exception $e) {
				dd($e);
				}
				
				
				$dir_path = public_path()."/comp/img/images/$house->id/";
				if (!File::exists($dir_path))
					File::makeDirectory($dir_path, '777', true);

				File::put($dir_path."$i.jpg", $fileImage);
				
				$i++;
			}
			
			
			$house->maximgid = --$i;
			
			$house->save();
		}

protected function getSaleGarageParking($html)	
{
	$start = strpos($html, 'Garage and Parking</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleInteriorFeatures($html)	
{
	$start = strpos($html, 'Interior Features</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleHomeFeatures($html)	
{
	$start = strpos($html, 'Home Features</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleBuildingConstruction($html)	
{
	$start = strpos($html, 'Building and Construction</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleExteriorFeatures($html)	
{
	$start = strpos($html, 'Exterior and Lot Features</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}


protected function getSaleHeatingCooling($html)	
{
	$start = strpos($html, 'Heating and Cooling</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleUtilities($html)	
{
	$start = strpos($html, 'Utilities</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleAppliances($html)	
{
	$start = strpos($html, 'Appliances</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}



protected function getSaleAmenitiesCommunityFeatures($html)	
{
	$start = strpos($html, 'Amenities and Community Features</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSalePoolSpa($html)	
{
	$start = strpos($html, 'Pool and Spa</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleMultiUnitInfo($html)	
{
	$start = strpos($html, 'Multi-Unit Info</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}







protected function getSaleOtherrooms($html)	
{
	$start = strpos($html, 'Other rooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSalePublicRecords($html)	
{
	$start = strpos($html, 'Property Information from local public');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$ul1 = substr($html, $start, $finish - $start);

	$start = $finish;
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);

	$ul2 = substr($html, $start, $finish - $start);




	//return trim($element);
	return $this->lisToArrayPublicRecords($ul1, $ul2);
}


protected function lisToArrayPublicRecords($ul1,$ul2)
{

	$arr_new =[];
	$arr_lists = explode("</li>", $ul1);
	foreach ($arr_lists as $list) {

		$arr_new[]=strip_tags($list);
		
	}

	$arr_lists = explode("</li>", $ul2);
	foreach ($arr_lists as $list) {

		$arr_new[]=strip_tags($list);
		
	}


	return $arr_new;
}


protected function getSalePropertyInfos($html)	
{
	$start = strpos($html, 'Other Property Info</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);

	//return trim($element);
	return $this->lisToArray($element);
}

protected function getSaleLivingRoom($html)	
{
	$start = strpos($html, 'Other rooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	return $this->lisToArrayLiving($element);

}

protected function lisToArrayLiving($lists)
{

	$arr_living =[];
	$arr_lists = explode("</li>", $lists);
	foreach ($arr_lists as $list) {

		if(strpos('>', $list))
			continue;

		$list2 = explode(">", $list);
		if (count($list2)>1){

			$liElem = trim($list2[1]);

			if (is_int(strpos($liElem, 'Living')))
				$arr_living[]=$liElem;

		}
	}

	return $arr_living; 
}

protected function getSaleKitchenDining($html)	
{
	$start = strpos($html, 'Kitchen and Dining</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	return $this->lisToArrayDiningKitchen($element);
}

protected function lisToArrayDiningKitchen($lists)
{

	$arr_kitchen =[];
	$arr_dining =[];
	$arr_lists = explode("</li>", $lists);
	foreach ($arr_lists as $list) {

		if(strpos('>', $list))
			continue;

		$list2 = explode(">", $list);
		if (count($list2)>1){

			$liElem = trim($list2[1]);

			if (is_int(strpos($liElem, "Kitchen")))
				$arr_kitchen[]=$liElem;

			if (is_int(strpos($liElem, "Dining")))
				$arr_dining[]=$liElem;	

		}
	}

	return compact('arr_kitchen', 'arr_dining');
}

protected function getSaleBathrooms($html)	
{
	$start = strpos($html, 'Bathrooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	return $this->lisToArray($element);
}


protected function getSaleBedrooms($html)	
{
	$start = strpos($html, 'Bedrooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	return $this->lisToArray($element);
}


protected function getExteriorFeatures($html)	
{
	$start = strpos($html, 'Exterior and Lot Features</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	return $this->lisToArray($element);
}

protected function getPrice($html)	
{
	$start = strpos($html, 'listingprice');
	$start = strpos($html, '[\'', $start)+2;
	$finish = strpos($html, '\']', $start);
	$element = substr($html, $start, $finish - $start);
	return trim($element);
	//return $this->lisToArray($element);
}

protected function getAddress($html)	
{
	$start = strpos($html, '<title');
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '-', $start);
	$element = substr($html, $start, $finish - $start);
	return trim($element);
	//return $this->lisToArray($element);
}

protected function getStatus($html)	
{
	$start = strpos($html, 'Status');
	$start = strpos($html, '<span', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '<', $start);
	$element = substr($html, $start, $finish - $start);
	return trim($element);
	//return $this->lisToArray($element);
}


protected function getPropertyType($html)	
{
	$start = strpos($html, 'Property Type');
	$start = strpos($html, '<span', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '<', $start);
	$element = substr($html, $start, $finish - $start);
	return trim($element);
	//return $this->lisToArray($element);
}

protected function getHouseYear($html)	
{
	$start = strpos($html, 'Year Built');
	$start = strpos($html, '<span', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, ' ', $start);
	$element = str_replace(',','',substr($html, $start, $finish - $start));
	return trim($element);
	//return $this->lisToArray($element);
}

protected function getHouseSize($html)	
{
	$start = strpos($html, 'House Size');
	$start = strpos($html, '<span', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, ' ', $start);
	$element = substr($html, $start, $finish - $start);
	return trim($element);
	
}

protected function getBathrooms($html)	
{
	$start = strpos($html, 'Bathrooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	return $this->lisToArray($element);
}

protected function getBedrooms($html)	
{
	$start = strpos($html, 'Bedrooms</h3>');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$element = substr($html, $start, $finish - $start);
	//return trim($element);
	return $this->lisToArray($element);
}




protected function getMls($html)	
{
	$start = strpos($html, 'itemprop="productID"');
	$start = strpos($html, '<td', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</td>', $start);
	$element = substr($html, $start, $finish - $start);
	return trim($element);
	//return $this->lisToArray(td);
}



protected function getPropertyDescription($html)	
{
	$start = strpos($html, 'property-description');
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</p>', $start);
	$element = substr($html, $start, $finish - $start);
	return trim($element);
	//return $this->lisToArray(p);
}

protected function getSchools($html)	
{
	$start = strpos($html, 'School Information');
	$start = strpos($html, '<ul', $start);
	$start = strpos($html, '>', $start)+1;
	$finish = strpos($html, '</ul>', $start);
	$ul = substr($html, $start, $finish - $start);
	return $this->lisToArray($ul);
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