<?php

//LOCATION: remax/public/search

class BrowseController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($type)
    {
        
        $houses = House::with('images', 'agent')->where('propertytype_id', '=', $type)->paginate(5);
        return View::make('search.results')->with(compact('houses'));

    }
}