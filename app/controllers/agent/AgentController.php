<?php

//LOCATION: remax/public/search

class AgentController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show_listings($id)
    {
    
    $houses = Listing::with('images')->where('agent_id', '=', $id)->paginate(5);
    return View::make('search.results')->with(compact('houses'))
    ->with('agents', parent::getRandomAgents());

    }

 


    public function show_rentals($id)
    {
    
    $rentals = Rental::with('rentalimage')
    ->where('agent_id', '=', $id)->paginate(5);
    return View::make('rent.rent_results')
    ->with(compact('rentals'))
    ->with('agents', parent::getRandomAgents());

    }

   
}