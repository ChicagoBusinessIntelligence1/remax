<?php

//LOCATION: remax/public

class RentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function apartments() {

     $houses = House::with('city')->where('issale', '=', 0)
      ->whereType_id(3)
      ->paginate(5);  

       return View::make('search.results')
       ->with('rentals', true)
       ->with(compact('houses'));
    }

    public function show($id) {

     $house = House::with('city')->where('id', '=', $id)->where('issale', '=', 0)->first();   

   return View::make('search.onehouse')->with(compact('house'));

    }
    public function all() {

    $houses = House::with('city')
    ->where('issale', '=', 0)->paginate(5);  

        return View::make('search.results')
        ->with('rentals', true)
        ->with(compact('houses'));

    }

    public function houses(){

      $houses = House::where('issale', '=', 0)
      ->where('type_id','<', 3)
       ->with('rentals', true)
      ->paginate(5);  

       return View::make('search.results')->with(compact('houses'));


    }

      public function index()
    {
      $houses = House::where('issale', '=', 0)->where(function($query){

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

        return View::make('search.results')

       ->with('rentals', true)
        ->with(compact('houses'));

  }
 

   
}