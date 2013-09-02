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

protected function getDescription($html)
{

	$start = strpos($html, '<h2 class="title-section title-section-detail">Property Details</h2>');
	$finish = strpos($html, '<div id="AdditionalDetails">', $start);
	$element = trim(substr($html, $start, $finish - $start));
	return trim($element);
	
}


protected function extractImages($html, $house)
		{
			$start = strpos($html, '#modal_PhotoGallery');			
			$arr_images = [];

			while ($start<strlen($html) && ($start = strpos($html,'http://p.rdcpix.com', $start))) {
				$len = strlen('http://p.rdcpix.com');
				$finish = strpos($html,'.', $start+$len)+4;
				$imgAddress = substr($html, $start, $finish - $start);

				$start+=1;

				if (strpos($imgAddress, 'm0m') || strpos($imgAddress, 'm0s'))
					continue;

				if (!in_array($imgAddress, $arr_images))
					$arr_images[]=trim($imgAddress);
			}
			$i=1;
			
			//dd($arr_images);

			foreach ($arr_images as $image) {
				try {
				$fileImage = \File::getRemote($image);
				$image = imagecreatefromstring($fileImage);	
				$width = intval(imagesx($image));
				$height = intval(imagesy($image));

				if ($width<300 || $height<200)
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

	
public function realtor_sale($url, $issale)
	{
		//$html = file_get_contents(app_path().'\controllers\admin\realtor_sale.html');
		//$html = file_get_contents(app_path().'\controllers\admin\realtor_sale2.html');
		$html = file_get_contents($url);





		$mls = $this->getMls($html);
		$size = $this->getHouseSize($html);
		$year = $this->getHouseYear($html);
		$address = $this->getAddress($html);
		$price = $this->getPrice($html);
		

		$house = new House();

		$house->mls = $mls;
		$house->size = $size;

		if(intval($year)>1800)
			$house->year = $year;
		
		$house->address = $address;
		if(intval($price)>1)
			$house->price = $price;


		$description = $this->getDescription($html);

		if (strpos($html, 'badge-foreclosure'))
		$house->isforeclosed = 1;

		if (strpos($html, 'badge-bank-owned'))
		$house->isbankowned = 1;

		$house->description = $description;


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




}