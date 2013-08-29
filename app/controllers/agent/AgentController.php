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
    
    $houses = House::with('images')->where('agent_id', '=', $id)->paginate(5);
    return View::make('search.results')->with(compact('houses'))
    ->with('agents', parent::getRandomAgents());

    }

 
    public function all()
    {
    
    $allAgents = Agent::orderBy('lastname')->get();
    return View::make('agents.vw_allAgents')
    ->with(compact('allAgents'));
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