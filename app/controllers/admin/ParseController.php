<?php
//LOCATION: remax/public/parse

class ParseController extends BaseController {


	public function save()
	{
		$url = Input::get('url');
		$issale = Input::get('issale');
		
		if ($issale=='9'){
			return 'Please choose Sale or Rent';
		}

		return $this->realtor_sale($url, $issale);

	}

	public function realtor_sale($url, $issale)
	{
		//$html = file_get_contents(app_path().'\controllers\admin\realtor_sale.html');
		//$html = file_get_contents(app_path().'\controllers\admin\realtor_sale2.html');
		$html = file_get_contents($url);





		$mls = $this->getMls($html);
		$details = $this->getPropertyDescription($html);
		$size = $this->getHouseSize($html);
		$year = $this->getHouseYear($html);
		$address = $this->getAddress($html);
		$price = $this->getPrice($html);
		if($size!=0)
		$pricesqft = round($price/$size);
		else
		$pricesqft=0;


		$house = new House();

		$house->mls = $mls;
		$house->details = $details;
		$house->size = $size;

		if(intval($year)>1800)
		$house->year = $year;
		
		$house->address = $address;
		if(intval($price)>1)
		$house->price = $price;

		if(intval($pricesqft)>1)
		$house->pricesqft = $pricesqft;



		///////////////////////////////////////////////////
		$propertyType = $this->getPropertyType($html);
		$propertyTypeObj = PropertyType::where('type','=', $propertyType)->first();
		if (count($propertyTypeObj)){
			$house->propertytype()->associate($propertyTypeObj);
		} else{
			$propertyTypeObj = new PropertyType(); 
			$propertyTypeObj->type = $propertyType;
			$propertyTypeObj->save();
		}
		$house->propertytype()->associate($propertyTypeObj);
		///////////////////////////////////////////////////

		///////////////////////////////////////////////////
		$status = $this->getStatus($html);
		$statusObj = Status::where('dbstatus','=', $status)->first();
		if (count($statusObj)){
			$house->status()->associate($statusObj);
		} else{
			$statusObj = new Status(); 
			$statusObj->dbstatus = $status;
			$statusObj->save();
		}
		$house->status()->associate($statusObj);
		///////////////////////////////////////////////////



		///////////////////////////////////////////////////
		$arr_schools = $this->getSchools($html);
		//dd($arr_schools);
		$schoolsObj = Saleschool::where('elementary','=', $arr_schools[0])->first();
		if (count($schoolsObj)){
			$house->saleschool()->associate($schoolsObj);
		} else{
			$schoolsObj = new Saleschool(); 
			$schoolsObj->elementary = $arr_schools[0];
			$schoolsObj->elemschdistrict = $arr_schools[3];
			$schoolsObj->high = $arr_schools[1];
			$schoolsObj->highdistrict = $arr_schools[4];
			$schoolsObj->juniorhigh = $arr_schools[2];
			$schoolsObj->jrhighdistrict = $arr_schools[5];

			$schoolsObj->save();
		}
		$house->saleschool()->associate($schoolsObj);
		///////////////////////////////////////////////////

		$arr_bedrooms = $this->getBedrooms($html);
/*		dd($arr_bedrooms);
*/		$bedroomsObj = Salebedroom::where('masterbedsize','=', $arr_bedrooms[0])->first();
if (count($bedroomsObj)){
	$house->salebedroom()->associate($bedroomsObj);
} else{
	$bedroomsObj = new Salebedroom(); 
	$bedroomsObj->masterbedsize = $arr_bedrooms[0];
	$bedroomsObj->masterbedsize = $arr_bedrooms[3];
	$bedroomsObj->masterbedfeatures = $arr_bedrooms[1].' '.$arr_bedrooms[5].' '.$arr_bedrooms[6];
	$bedroomsObj->bed2size = $arr_bedrooms[4];
	$bedroomsObj->bed2features= $arr_bedrooms[2].' '.$arr_bedrooms[8];

	$bedroomsObj->save();
}
$house->salebedroom()->associate($bedroomsObj);
		///////////////////////////////////////////////////

$arr_bathrooms = $this->getBathrooms($html);
		// dd($arr_bathrooms);
$bathroomsObj = Salebathroom::where('fullbath','=', $arr_bathrooms[0])->first();
if (count($bathroomsObj)){
	$house->salebathroom()->associate($bathroomsObj);
} else{
	$bathroomsObj = new Salebathroom(); 
	$bathroomsObj->fullbath= $arr_bathrooms[0];

	$bathroomsObj->save();
}
$house->salebathroom()->associate($bathroomsObj);
		///////////////////////////////////////////////////

$arr_exteriorFeatures = $this->getExteriorFeatures($html);
		// dd($arr_exteriorFeatures);
$exteriorFeaturesObj = SaleexteriorFeature::where('lotsize','=', $arr_exteriorFeatures[0])->first();
if (count($exteriorFeaturesObj)){
	$house->saleexteriorFeature()->associate($exteriorFeaturesObj);
} else{
	$exteriorFeaturesObj = new SaleexteriorFeature(); 
	$exteriorFeaturesObj->driveway = $arr_exteriorFeatures[1];

	$exteriorFeaturesObj->save();
}
$house->saleexteriorFeature()->associate($exteriorFeaturesObj);
		///////////////////////////////////////////////////



$arr_salekitchen = $this->getSaleKitchenDining($html)["arr_kitchen"];
		// dd($arr_salekitchen);
$kitchensObj = Salekitchen::where('kitchensize','=', $arr_salekitchen[0])->first();
if (count($kitchensObj)){
	$house->salekitchen()->associate($kitchensObj);
} else{
	$kitchensObj = new Salekitchen(); 
	$kitchensObj->kitchensize= $arr_salekitchen[1];
	$kitchensObj->kitchenfeatures = $arr_salekitchen[0].' '.$arr_salekitchen[2];

	$kitchensObj->save();
}
$house->salekitchen()->associate($kitchensObj);
		///////////////////////////////////////////////////


$arr_saledining = $this->getSaleKitchenDining($html)['arr_dining'];
		// dd($arr_saledining);
$diningsObj = Salediningroom::where('diningroomsize','=', $arr_saledining[0])->first();
if (count($diningsObj)){
	$house->salediningroom()->associate($diningsObj);
} else{
	$diningsObj = new Salediningroom(); 
	$diningsObj->diningroomsize= $arr_saledining[2];
	$diningsObj->diningroomfeatures = $arr_saledining[0].' '.$arr_saledining[1].' '.$arr_saledining[3];

	$diningsObj->save();
}
$house->salediningroom()->associate($diningsObj);
		///////////////////////////////////////////////////


$arr_saleliving = $this->getSaleOtherrooms($html);
		// dd($arr_saleliving);
$livingsObj = Salelivingroom::where('livroomsize','=', $arr_saledining[0])->first();
if (count($livingsObj)){
	$house->salelivingroom()->associate($livingsObj);
} else{
	$livingsObj = new Salelivingroom(); 
	$livingsObj->livroomsize= $arr_saleliving[0];
	$livingsObj->livroomfeatures = $arr_saleliving[2].' '.$arr_saleliving[5];

	$livingsObj->save();
}
$house->salelivingroom()->associate($livingsObj);
		///////////////////////////////////////////////////



$arr_salepropertyinfo = $this->getSalePropertyInfos($html);
		// dd($arr_salepropertyinfo);
$propertyinfosObj = Salepropertyinfo::where('township','=', $arr_salepropertyinfo [0])->first();
if (count($propertyinfosObj)){
	$house->salepropertyinfo()->associate($propertyinfosObj);
} else{
	$propertyinfosObj = new Salepropertyinfo(); 
	$propertyinfosObj->otherinfo = $arr_salepropertyinfo[0].' '.$arr_salepropertyinfo[1];
	$propertyinfosObj->township = $arr_salepropertyinfo[2];
	$propertyinfosObj->city = $arr_salepropertyinfo[3];
	$propertyinfosObj->state = $arr_salepropertyinfo[4];
	$propertyinfosObj->county = $arr_salepropertyinfo[5];
	if (count($arr_salepropertyinfo)>7) {
		# code...
	
	$propertyinfosObj->area = $arr_salepropertyinfo[7];
	$propertyinfosObj->directions = $arr_salepropertyinfo[8];
	$propertyinfosObj->apnnumber = $arr_salepropertyinfo[9];
	$propertyinfosObj->otherinfo .=$arr_salepropertyinfo[10].' '.$arr_salepropertyinfo[11];
	}

	$propertyinfosObj->save();
}
$house->salepropertyinfo()->associate($propertyinfosObj);
		///////////////////////////////////////////////////


$arr_salepublicrecord= $this->getSalePublicRecords($html);
		// dd($arr_salepublicrecord);
$publicrecordsObj = Salepublicrecord::where('beds','=', $arr_salepublicrecord [0])->first();
if (count($publicrecordsObj)){
	$house->salepublicrecord()->associate($publicrecordsObj);
} else{
	$publicrecordsObj = new Salepublicrecord(); 
	$publicrecordsObj->beds = $arr_salepublicrecord[0];
	$publicrecordsObj->housesize = $arr_salepublicrecord[1];
		# code...
	$publicrecordsObj->yearbuilt = $arr_salepublicrecord[2];
	$publicrecordsObj->proptype = $arr_salepublicrecord[3];
	$publicrecordsObj->style = $arr_salepublicrecord[4];
	$publicrecordsObj->units = $arr_salepublicrecord[5];
	$publicrecordsObj->pool = $arr_salepublicrecord[6];
	$publicrecordsObj->heating = $arr_salepublicrecord[7];
	$publicrecordsObj->rooms = $arr_salepublicrecord[8];
	$publicrecordsObj->fireplace = $arr_salepublicrecord[9];
	$publicrecordsObj->baths = $arr_salepublicrecord[11];
	$publicrecordsObj->lotsize = $arr_salepublicrecord[12];
	if (count($arr_salepublicrecord)>16) {
	$publicrecordsObj->price = $arr_salepublicrecord[13];
	$publicrecordsObj->stories = $arr_salepublicrecord[14];
	$publicrecordsObj->garage = $arr_salepublicrecord[15];
	$publicrecordsObj->cooling = $arr_salepublicrecord[16];
	$publicrecordsObj->construction = $arr_salepublicrecord[17];

	$publicrecordsObj->yearrenovated = $arr_salepublicrecord[18];
	$publicrecordsObj->roofing = $arr_salepublicrecord[19];
	}

	$publicrecordsObj->save();
}
$house->salepublicrecord()->associate($publicrecordsObj);
		///////////////////////////////////////////////////


$arr_saleInteriorFeatures = $this->getSaleInteriorFeatures($html);
$arr_saleHomeFeatures = $this->getSaleHomeFeatures($html);
		// dd($arr_saleInteriorFeatures);
$interiorFeaturesObj = SaleinteriorFeature::where('equipment','=', $arr_saleInteriorFeatures [0])->first();
if (count($interiorFeaturesObj)){
	$house->saleinteriorFeature()->associate($interiorFeaturesObj);
} else{
	$interiorFeaturesObj = new SaleinteriorFeature(); 
	$interiorFeaturesObj->equipment = $arr_saleInteriorFeatures[0].', '.$arr_saleHomeFeatures[0];

	$interiorFeaturesObj->save();
}
$house->saleinteriorFeature()->associate($interiorFeaturesObj);
		///////////////////////////////////////////////////




$arr_saleHomeFeatures = $this->getSaleHomeFeatures($html);
$arr_saleMultiUnitInfo = $this->getSaleMultiUnitInfo($html);
		// dd($arr_saleMultiUnitInfo );
$homeFeaturesObj = SaleHomeFeature::where('numberofunits','=', $arr_saleHomeFeatures  [0])->first();
if (count($homeFeaturesObj)){
	$house->salehomeFeature()->associate($homeFeaturesObj);
} else{
	$homeFeaturesObj = new SaleHomeFeature(); 
	$homeFeaturesObj->numberofunits= $arr_saleMultiUnitInfo [0];

	$homeFeaturesObj->save();
}
$house->salehomeFeature()->associate($homeFeaturesObj);
		///////////////////////////////////////////////////


$arr_saleAppliances = $this->getSaleAppliances($html);
		// dd($arr_saleAppliances);
$appliancesObj = Saleappliance::where('refrigerator','=', $arr_saleAppliances [0])->first();
if (count($appliancesObj)){
	$house->saleappliance()->associate($appliancesObj);
} else{
	$appliancesObj = new Saleappliance(); 
	$appliancesObj->refrigerator = $arr_saleAppliances[3];
	$appliancesObj->oven= $arr_saleAppliances[0];
	$appliancesObj->microwave = $arr_saleAppliances[1];
	$appliancesObj->dishwasher = $arr_saleAppliances[2];

	$appliancesObj->save();
}
$house->saleappliance()->associate($appliancesObj);
		///////////////////////////////////////////////////

$arr_saleBuildingConstruction = $this->getSaleBuildingConstruction($html);
		// dd($arr_saleBuildingConstruction);
$buildingConstructionsObj = Salebuildingconstruction::where('levelsorstories','=', $arr_saleBuildingConstruction [0])->first();
if (count($buildingConstructionsObj)){
	$house->salebuildingConstruction()->associate($buildingConstructionsObj);
} else{
	$buildingConstructionsObj = new Salebuildingconstruction(); 
	$buildingConstructionsObj->levelsorstories = $arr_saleBuildingConstruction[0];
	$buildingConstructionsObj->exteriorbuildingtype = $arr_saleBuildingConstruction[1];

	$buildingConstructionsObj->save();
}
$house->salebuildingConstruction()->associate($buildingConstructionsObj);
		///////////////////////////////////////////////////


$arr_salegarageparking = $this->getSaleGarageParking($html);
		// dd($arr_salegarageparking);
$garageParkingsObj = SalegarageandParking::where('numberofparking','=', $arr_salegarageparking [0])->first();
if (count($garageParkingsObj)){
	$house->salegarageandParking()->associate($garageParkingsObj);
} else{
	$garageParkingsObj = new SalegarageandParking(); 
	$garageParkingsObj->numberofparking = $arr_salegarageparking[0];
	$garageParkingsObj->parkingtype = $arr_salegarageparking[1];
	$garageParkingsObj->garagetype = $arr_salegarageparking[2];

	$garageParkingsObj->save();
}
$house->salegarageandParking()->associate($garageParkingsObj);
		///////////////////////////////////////////////////


$arr_saleExteriorFeatures = $this->getSaleExteriorFeatures($html);
//dd($arr_saleExteriorFeatures);
$saleexteriorFeatureObj = Saleexteriorfeature::where('lotfeature','=', $arr_saleExteriorFeatures [0])->first();
if (count($saleexteriorFeatureObj)){
	$house->saleexteriorfeature()->associate($saleexteriorFeatureObj);
} else{
	$saleexteriorFeatureObj = new Saleexteriorfeature(); 
	$saleexteriorFeatureObj->lotdimension = $arr_saleExteriorFeatures[0];
	$saleexteriorFeatureObj->lotsize = $arr_saleExteriorFeatures[1];
	if(array_key_exists(2, $arr_saleExteriorFeatures))
	$saleexteriorFeatureObj->lotfeature = $arr_saleExteriorFeatures[2];

	$saleexteriorFeatureObj->save();
}
$house->saleexteriorfeature()->associate($saleexteriorFeatureObj);
		///////////////////////////////////////////////////







// $arr_saleHeatingCooling = $this->getSaleHeatingCooling($html);
// $saleHeatingCooling = Saleheatingcooling::where('lotfeature','=', $arr_saleHeatingCooling [0])->first();
// if (count($saleHeatingCooling)){
// 	$house->saleheatingcooling()->associate($saleHeatingCooling);
// } else{
// 	$saleHeatingCooling = new Saleheatingcooling(); 
// 	$saleHeatingCooling->lotsize = $arr_saleHeatingCooling[1];
// 	$saleHeatingCooling->lotdimension = $arr_saleHeatingCooling[0];
// 	$saleHeatingCooling->lotfeature = $arr_saleHeatingCooling[2];

// 	$saleHeatingCooling->save();
// }
// $house->saleheatingcooling()->associate($saleHeatingCooling);
		///////////////////////////////////////////////////




$arr_saleHeatingCooling = $this->getSaleHeatingCooling($html);
$arr_saleUtilities = $this->getSaleUtilities($html);
// dd($arr_saleHeatingCooling);
$salesaleUtilitiesObj = Saleutility::where('heatingfeatures','=', $arr_saleUtilities [0])->first();
if (count($salesaleUtilitiesObj)){
	$house->saleutility()->associate($salesaleUtilitiesObj);
} else{
	$salesaleUtilitiesObj = new Saleutility(); 
	$salesaleUtilitiesObj->electricity = $arr_saleUtilities[2];
	$salesaleUtilitiesObj->water = $arr_saleUtilities[0];
	$salesaleUtilitiesObj->sewer = $arr_saleUtilities[1];
	$salesaleUtilitiesObj->heatingfeatures = $arr_saleHeatingCooling[0];
	$salesaleUtilitiesObj->coolingfeatures = $arr_saleHeatingCooling[1];
	/////////////////  ADDDDDDDD
	$salesaleUtilitiesObj->save();
}
$house->saleutility()->associate($salesaleUtilitiesObj);




$arr_saleAmen = $this->getSaleAmenitiesCommunityFeatures($html);

$saleAmenitiesObj = Saleamenity::where('areaamenities','=', $arr_saleAmen [0])->first();
if (count($saleAmenitiesObj)){
	$house->saleamenity()->associate($saleAmenitiesObj);
} else{
	$saleAmenitiesObj = new Saleamenity(); 
	$saleAmenitiesObj->areaamenities = $arr_saleAmen[0];
	$saleAmenitiesObj->save();
}
$house->saleamenity()->associate($saleAmenitiesObj);



// $arr_salePoolSpa = $this->getSalePoolSpa($html);
// $saleAmenitiesObj = Saleamenity::where('areaamenities','=', $arr_saleAmen [0])->first();
// if (count($saleAmenitiesObj)){
// 	$house->saleamenity()->associate($saleAmenitiesObj);
// } else{
// 	$saleAmenitiesObj = new Saleamenity(); 
// 	$saleAmenitiesObj->areaamenities = $arr_saleAmen[0];
// 	$saleAmenitiesObj->save();
// }
// $house->saleamenity()->associate($saleAmenitiesObj);

$house->issale = $issale;


if(!$house->save())
return 'ERROR occured';	



$id = $house->id;
$this->extractImages($html, $house);

return Redirect::to("search/$id");
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
	$element = str_replace(',','',substr($html, $start, $finish - $start));
	return trim($element);
	//return $this->lisToArray($element);
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

protected function extractImages($html, $house)
		{
			$start = strpos($html, '#modal_PhotoGallery');			
			$arr_images = [];


			while ($start<strlen($html) && ($start = strpos($html,'http://p.rdcpix.com', $start))) {
				$finish = strpos($html,'.jpg', $start)+4;
				$imgAddress = substr($html, $start, $finish - $start);

				$start+=1;

				if (strpos($imgAddress, 'm0m') || strpos($imgAddress, 'm0s'))
					continue;

				if (!in_array($imgAddress, $arr_images))
					$arr_images[]=trim($imgAddress);
			}
			$i=1;
			foreach ($arr_images as $image) {
				$fileImage = \File::getRemote($image);
				$dir_path = public_path()."/comp/img/images/$house->id/";
				if (!File::exists($dir_path))
					File::makeDirectory($dir_path, '777', true);

				File::put($dir_path."$i.jpg", $fileImage);
				$i++;
			}
			
			
			$house->maximgid = --$i;
			$house->save();
		}


}