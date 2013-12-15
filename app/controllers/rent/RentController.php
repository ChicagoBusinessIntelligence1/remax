<?php

//LOCATION: remax/public

class RentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function apartments() {

        $listings = Listing::where('PropType', '=', 'Condo/Townhome/Row Home/Co-Op')
       ->where('IsRental', '=', 1)->orderBy('Price')
        ->paginate(5);
        return View::make('search.results')->with(compact('listings'));

       return View::make('search.results')
       ->with('rentals', true)
       ->with(compact('listings'));
    }

    public function show($id) {

     $house = Listing::with('city')->where('id', '=', $id)->where('isRental', '=', 1)->orderBy('price')->first();   

   return View::make('search.onehouse')->with(compact('house'))->with('rentals', true);

    }
    public function all() {

    $listings = Listing::with('city')
    ->where('isRental', '=', 1)->orderBy('price')->paginate(5);  

        return View::make('search.results')
        ->with('rentals', true)
        ->with(compact('listings'));

    }

    public function houses(){

        $listings = Listing::where('PropType', '=', 'Single Family Home')
       ->where('IsRental', '=', 1)->orderBy('Price')
        ->paginate(5);
        return View::make('search.results')->with(compact('listings'));

      return View::make('search.results')
       ->with('rentals', true)
       ->with(compact('listings'));


    }

      public function index()
    {
      $listings = Listing::where('isRental', '=', 1)->orderBy('price')->where(function($query){

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
        ->with(compact('listings'));

  }
 

   
}