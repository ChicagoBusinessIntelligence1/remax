<?php

//LOCATION: remax/public/search

class SearchController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function browse($type)
    {
        
        $houses = House::with('agent')->where('propertytype_id', '=', $type)
       ->where('issale', '=', 1)
        ->paginate(5);
        return View::make('search.results')->with(compact('houses'));

    }


    public function alert_signup($house_id)
    {
      $user_id  = Auth::user()->id;
      $user  = User::find($user_id);
      $user->houses()->attach($house_id);

      return Redirect::route('saved-homes');
    }

    public function alert_signup_remove($house_id)
    {
      $user_id  = Auth::user()->id;
      $user  = User::find($user_id);
      $user->houses()->detach($house_id);

      return Redirect::route('saved-homes');
    }  

    public function index()
    {
      $houses = House::with('agent','status', 'saleexteriorfeature', 'propertytype', 'salebedroom', 'salebathroom', 'salekitchen', 'salediningroom', 'salelivingroom', 'saleschool', 'salepropertyinfo', 'salepublicrecord',
      'salefamroom', 'salelaundryroom', 'saleexerciseroom', 'salebasement', 'saleutilityroom', 'salewalkincloset', 'saleotherroom', 'saleinteriorfeature', 'saleappliance', 'salegarageandparking', 'salebuildingconstruction', 
      'saleutility', 'salehomefeature', 'saleamenity' )->where('issale', '=', 1)->where(function($query){

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
  public function show($id)
  {
   $house = House::where('id', '=', $id)->where('issale', '=', 1)->first();   

   return View::make('search.onehouse')->with(compact('house'));
 }



}