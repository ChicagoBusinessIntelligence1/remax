<?php
//LOCATION: remax/public/parse

class ParseController extends BaseController {



	public function realtor_sale()
	{
		$html = file_get_contents(app_path().'\controllers\admin\realtor_sale.html');
		
		$mls = $this->getMls($html);
		$details = $this->getPropertyDescription($html);
		$size = $this->getHouseSize($html);
		$year = $this->getHouseYear($html);
		$address = $this->getAddress($html);
		$price = $this->getPrice($html);
		$pricesqft = round($price/$size);

		$house = new House();

		$house->mls = $mls;
		$house->details = $details;
		$house->size = $size;
		$house->year = $year;
		$house->address = $address;
		$house->price = $price;
		$house->pricesqft = $pricesqft;

			


		$propertyType = $this->getPropertyType($html);
		$status = $this->getStatus($html);
		

		$propertyTypeObj = PropertyType::where('type','=', $propertyType)->get();
		
		if (count($propertyTypeObj)){
		$house->propertytype()->associate($propertyTypeObj);
		} else{
		$propertyTypeObj = new PropertyType(); 
		$propertyTypeObj->type = $propertyType;
		$propertyTypeObj->save();
		}
		$house->propertytype()->associate($propertyTypeObj);
		dd($house->save());



		$arr_schools = $this->getSchools($html);
		$arr_bedrooms = $this->getBedrooms($html);
		$arr_bathrooms = $this->getBathrooms($html);
		$arr_exteriorFeatures = $this->getExteriorFeatures($html);
		$arr_salebedrooms = $this->getSaleBedrooms($html);
		$arr_salebathrooms = $this->getSaleBathrooms($html);
		$arr_salekitchen = $this->getSaleKitchenDining($html)['arr_kitchen'];
		$arr_saledining = $this->getSaleKitchenDining($html)['arr_dining'];
		$arr_saleliving = $this->getSaleLivingRoom($html);
		$arr_salepropertyinfo = $this->getSalePropertyInfos($html);
		$arr_salepublicrecord= $this->getSalePublicRecords($html);
		$arr_saleInteriorFeatures = $this->getSaleInteriorFeatures($html);
		$arr_saleHomeFeatures = $this->getSaleHomeFeatures($html);
		$arr_saleBuildingConstruction = $this->getSaleBuildingConstruction($html);
		$arr_saleExteriorLotFeatures = $this->getSaleExteriorLotFeatures($html);
		$arr_saleHeatingCooling = $this->getSaleHeatingCooling($html);
		$arr_saleUtilities = $this->getSaleUtilities($html);
		$arr_saleAppliances = $this->getSaleAppliances($html);
		$arr_saleAmenitiesCommunityFeatures = $this->getSaleAmenitiesCommunityFeatures($html);
		$arr_salePoolSpa = $this->getSalePoolSpa($html);
		$arr_saleMultiUnitInfo = $this->getSaleMultiUnitInfo($html);
		$arr_salegarageparking = $this->getSaleGarageParking($html);
		



		

		return '===== END =====';
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

	protected function getSaleExteriorLotFeatures($html)	
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



}