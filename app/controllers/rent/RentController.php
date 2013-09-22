<?php

//LOCATION: remax/public

class RentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function apartments() {

     $houses = House::with('city')->where('issale', '=', 0)->orderBy('price')
      ->whereType_id(1)
      ->paginate(5);  

       return View::make('search.results')
       ->with('rentals', true)
       ->with(compact('houses'));
    }

    public function show($id) {

     $house = House::with('city')->where('id', '=', $id)->where('issale', '=', 0)->orderBy('price')->first();   

   return View::make('search.onehouse')->with(compact('house'))->with('rentals', true);

    }
    public function all() {

    $houses = House::with('city')
    ->where('issale', '=', 0)->orderBy('price')->paginate(5);  

        return View::make('search.results')
        ->with('rentals', true)
        ->with(compact('houses'));

    }

    public function houses(){

      $houses = House::where('issale', '=', 0)
      ->where('type_id', '=', 2)
      ->paginate(5);  

      return View::make('search.results')
       ->with('rentals', true)
       ->with(compact('houses'));


    }

      public function index()
    {
      $houses = House::where('issale', '=', 0)->orderBy('price')->where(function($query){

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
        $query->where('beds', '>=', $beds);

      $baths  = Input::get('baths');
      if($baths)
        $query->where('baths', '>=', $baths);


    })->paginate(5);  

        return View::make('search.results')
        ->with('rentals', true)
        ->with(compact('houses'));

  }
 

   
}