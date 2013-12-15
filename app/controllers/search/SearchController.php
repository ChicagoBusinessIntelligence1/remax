<?php

//LOCATION: remax/public/search

class SearchController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function sale_single()
    {
              
        $listings = Listing::where('PropType', '=', 'Single Family Home')
       ->where('IsRental', '=', 0)->orderBy('Price')
       ->paginate(5);
        return View::make('search.results')->with(compact('listings'));

    }


public function sale_condos()
    {
              
        $listings = Listing::where('PropType', '=', 'Condo/Townhome/Row Home/Co-Op')
       ->where('IsRental', '=', 0)->orderBy('Price')
        ->paginate(5);
        return View::make('search.results')->with(compact('listings'));
    }
    

    public function index()
    {
      $listings = Listing::with('city')->where('IsRental', '=', 0)->orderBy('Price')->where(function($query){

      $location  = Input::get('location');
      if($location)
        $query->where('Address', 'LIKE', '%'.$location.'%');

      $price_l  = Input::get('from');
      if($price_l)
        $query->where('Price', '>=', $price_l);

      $price_h  = Input::get('to');
      if($price_h)
        $query->where('Price', '<=', $price_h);

      $beds  = Input::get('beds');
      if($beds)
        $query->where('Beds', '>=', $beds);

      $baths  = Input::get('baths');
      if($baths)
        $query->where('FullBaths', '>=', $baths);


    })->paginate(5);  

        return View::make('search.results')->with(compact('listings'));

  }

  public function alert_signup($listing_id)
    {
      $user_id  = Auth::user()->id;
      $user  = User::find($user_id);
      $user->listings()->attach($listing_id);

      return Redirect::route('saved-homes');
    }

    public function alert_signup_remove($listing_id)
    {
      $user_id  = Auth::user()->id;
      $user  = User::find($user_id);
      $user->listings()->detach($listing_id);

      return Redirect::route('saved-homes');
    }  


  public function show($search,$id)
  {
   $listing = Listing::with('city')->where('Id', '=', $id)->first();   

   return View::make('search.onehouse')->with(compact('listing'));
 }



}