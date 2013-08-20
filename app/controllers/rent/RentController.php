<?php

//LOCATION: remax/public

class RentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function apartments() {

    $rentals = Rental::with('rentalimage', 'agent', 'rentpropertytype')->where('rentalpropertytype_id','=', 1)->paginate(5);
    return View::make('rent.rent_results')->with(compact('rentals'))->with('agents', parent::getRandomAgents());

    }

    public function show($id) {

    $rental = Rental::with('rentalimage', 'agent', 'rentutility', 'rentpropertyinfo', 'rentschool', 'rentbuildingconstruction', 'rentgarageandparking', 'rentlotfeature', 'rentappliance', 'rentstatus', 'rentalinfo', 'rentbedroom', 'rentbathroom', 'rentkitchen', 'rentdiningroom', 'rentlivingroom', 'rentfamroom', 'rentutilityroom', 'rentinteriorfeature', 'rentotherroom', 'rentwalkincloset', 'rentbasement', 'rentlaundryroom', 'rentexerciseroom', 'rentpropertytype')->where('id','=', $id)->first();
    return View::make('rent.one_rent')->with(compact('rental'))->with('agents', parent::getRandomAgents());

    }
    public function all() {

    $rentals = Rental::with('rentalimage', 'agent', 'rentpropertytype')->paginate(5);
    return View::make('rent.rent_results')->with(compact('rentals'))->with('agents', parent::getRandomAgents());

    }

    public function houses(){

    $rentals = Rental::with('rentalimage', 'agent', 'rentpropertytype')->where('rentalpropertytype_id','=', 2)->paginate(5);
    return View::make('rent.rent_results')->with(compact('rentals'))->with('agents', parent::getRandomAgents());

    }

    public function index()
    {
    $rentals = Rental::with('rentalimage', 'agent', 'rentpropertytype')->where(function($query){

    $location_r  = Input::get('location_r');
    if($location_r)
    $query->where('address', 'LIKE', '%'.$location_r.'%');

    $price_l_r  = Input::get('from_r');
    if($price_l_r)
    $query->where('price', '>=', $price_l_r);

    $price_h_r  = Input::get('to_r');
    if($price_h_r)
    $query->where('price', '<=', $price_h_r);

    $beds_r  = Input::get('beds_r');
    if($beds_r)
    $query->where('bedrooms', '>=', $beds_r);

    $baths_r  = Input::get('baths_r');
    if($baths_r)
    $query->where('bathrooms', '>=', $baths_r);


    })->paginate(5);

    return View::make('rent.rent_results')->with(compact('rentals'))->with('Input', Input::all())->with('agents', parent::getRandomAgents());

    }
 

   
}