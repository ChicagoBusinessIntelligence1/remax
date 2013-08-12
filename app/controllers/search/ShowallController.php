<?php

//LOCATION: remax/public/search

class ShowallController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    $houses = House::with('images', 'agent')->paginate(5);

    return View::make('search.showall')->with(compact('houses'))->with('agents', parent::getRandomAgents());

    }



  


   
}