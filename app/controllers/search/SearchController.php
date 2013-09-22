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
              
        $houses = House::where('type_id', '=', 2)
       ->where('issale', '=', 1)->orderBy('price')
       ->paginate(5);
        return View::make('search.results')->with(compact('houses'));

    }


public function sale_condos()
    {
              
        $houses = House::where('type_id', '=', 1)
       ->where('issale', '=', 1)->orderBy('price')
        ->paginate(5);
        return View::make('search.results')->with(compact('houses'));

    }

    

    public function index()
    {
      $houses = House::with('city')->where('issale', '=', 1)->orderBy('price')->where(function($query){

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


  public function show($search,$id)
  {
   $house = House::with('city')->where('id', '=', $id)->first();   

   return View::make('search.onehouse')->with(compact('house'));
 }



}