<?php

//LOCATION: remax/public

class RentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function apartments() {

    $houses = House::with('agent','status', 'saleexteriorfeature', 'propertytype', 'salebedroom', 'salebathroom', 'salekitchen', 'salediningroom', 'salelivingroom', 'saleschool', 'salepropertyinfo', 'salepublicrecord',
    'salefamroom', 'salelaundryroom', 'saleexerciseroom', 'salebasement', 'saleutilityroom', 'salewalkincloset', 'saleotherroom', 'saleinteriorfeature', 'saleappliance', 'salegarageandparking', 'salebuildingconstruction', 
    'saleutility', 'salehomefeature', 'saleamenity' )->where('propertytype_id', '=', 8)->where('issale', '=', 0)->first();   

   return View::make('search.results')->with(compact('houses'));
    }

    public function show($id) {

     $house = House::with('agent','status', 'saleexteriorfeature', 'propertytype', 'salebedroom', 'salebathroom', 'salekitchen', 'salediningroom', 'salelivingroom', 'saleschool', 'salepropertyinfo', 'salepublicrecord',
    'salefamroom', 'salelaundryroom', 'saleexerciseroom', 'salebasement', 'saleutilityroom', 'salewalkincloset', 'saleotherroom', 'saleinteriorfeature', 'saleappliance', 'salegarageandparking', 'salebuildingconstruction', 
    'saleutility', 'salehomefeature', 'saleamenity' )->where('id', '=', $id)->where('issale', '=', 0)->first();   

   return View::make('search.onehouse')->with(compact('house'));

    }
    public function all() {

    $houses = House::with('agent','status', 'saleexteriorfeature', 'propertytype', 'salebedroom', 'salebathroom', 'salekitchen', 'salediningroom', 'salelivingroom', 'saleschool', 'salepropertyinfo', 'salepublicrecord',
      'salefamroom', 'salelaundryroom', 'saleexerciseroom', 'salebasement', 'saleutilityroom', 'salewalkincloset', 'saleotherroom', 'saleinteriorfeature', 'saleappliance', 'salegarageandparking', 'salebuildingconstruction', 
      'saleutility', 'salehomefeature', 'saleamenity' )->where('issale', '=', 0)->where(function($query){

      $location  = Input::get('location');
      if($location)
        $query->where('address', 'LIKE', '%'.$location.'%');

      $price_l  = Input::get('from');
      if($price_l)
        $query->where('price', '>=', $price_l);

      $price_h  = Input::get('to');
      if($price_h)
        $query->where('price', '<=', $price_h);

      $beds  = Input::get('beds');
      if($beds)
        $query->where('bedrooms', '>=', $beds);

      $baths  = Input::get('baths');
      if($baths)
        $query->where('bathrooms', '>=', $baths);


    })->paginate(5);  

        return View::make('search.results')->with(compact('houses'));

    }

    public function houses(){

        $houses = House::with('agent','status', 'saleexteriorfeature', 'propertytype', 'salebedroom', 'salebathroom', 'salekitchen', 'salediningroom', 'salelivingroom', 'saleschool', 'salepropertyinfo', 'salepublicrecord',
    'salefamroom', 'salelaundryroom', 'saleexerciseroom', 'salebasement', 'saleutilityroom', 'salewalkincloset', 'saleotherroom', 'saleinteriorfeature', 'saleappliance', 'salegarageandparking', 'salebuildingconstruction', 
    'saleutility', 'salehomefeature', 'saleamenity' )->where('propertytype_id', '=', 9)->where('issale', '=', 0)->first();   

   return View::make('search.results')->with(compact('houses'));
    }

    public function index()
    {
     $houses = House::with('agent','status', 'saleexteriorfeature', 'propertytype', 'salebedroom', 'salebathroom', 'salekitchen', 'salediningroom', 'salelivingroom', 'saleschool', 'salepropertyinfo', 'salepublicrecord',
      'salefamroom', 'salelaundryroom', 'saleexerciseroom', 'salebasement', 'saleutilityroom', 'salewalkincloset', 'saleotherroom', 'saleinteriorfeature', 'saleappliance', 'salegarageandparking', 'salebuildingconstruction', 
      'saleutility', 'salehomefeature', 'saleamenity' )->where('issale', '=', 0)->where(function($query){

      $location  = Input::get('location');
      if($location)
        $query->where('address', 'LIKE', '%'.$location.'%');

      $price_l  = Input::get('from');
      if($price_l)
        $query->where('price', '>=', $price_l);

      $price_h  = Input::get('to');
      if($price_h)
        $query->where('price', '<=', $price_h);

      $beds  = Input::get('beds');
      if($beds)
        $query->where('bedrooms', '>=', $beds);

      $baths  = Input::get('baths');
      if($baths)
        $query->where('bathrooms', '>=', $baths);


    })->paginate(5);  

        return View::make('search.results')->with(compact('houses'));
    }
 

   
}