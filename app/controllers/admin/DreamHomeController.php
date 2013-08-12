<?php

class DreamHomeController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function request()
    {
    return View::make('admin.vw_dream_home')
        ->with('agents', parent::getRandomAgents());    
    }

  

    public function store()
    {

    $location = Input::get('location');
    $property_type = Input::get('property_type');
    $garage = Input::get('garage');
    $beds = Input::get('beds');
    $baths = Input::get('baths');
    $comments = Input::get('comments');
    $user_id = Auth::user()->id;

	 
    $dreamhome = new Dreamhome(); 
    $dreamhome->location = $location;
    $dreamhome->property_type = $property_type;
    $dreamhome->garage = $garage;
    $dreamhome->beds = $beds;
    $dreamhome->baths = $baths;
    $dreamhome->user_id = $user_id;
    $dreamhome->comments = $comments;

    $dreamhome->save();


    return View::make('admin.vw_dream_home_manage')
    	->with('dreamhomes', Dreamhome::where('user_id', '=', $user_id)->get())
        ->with('agents', parent::getRandomAgents()); 
   	   
    }
 	 
    public function manage() 
    {
   return View::make('admin.vw_dream_home_manage')
    	->with('dreamhomes', Dreamhome::where('user_id', '=', Auth::user()->id)->get())
        ->with('agents', parent::getRandomAgents()); 
    }

  public function edit($id)
    {
    return View::make('admin.vw_dream_home_edit')
        ->with('dreamhome', Dreamhome::find($id))    
        ->with('agents', parent::getRandomAgents());    
    }

    public function update()
    {

    $id = Input::get('id');
    $location = Input::get('location');
    $property_type = Input::get('property_type');
    $garage = Input::get('garage');
    $beds = Input::get('beds');
    $baths = Input::get('baths');
    $comments = Input::get('comments');
    $user_id = Auth::user()->id;

     
    $dreamhome = Dreamhome::find($id);

    $dreamhome->location = $location;
    $dreamhome->property_type = $property_type;
    $dreamhome->garage = $garage;
    $dreamhome->beds = $beds;
    $dreamhome->baths = $baths;
    $dreamhome->comments = $comments;
    
    $dreamhome->save();


    return View::make('admin.vw_dream_home_manage')
        ->with('dreamhomes', Dreamhome::where('user_id', '=', $user_id)->get())
        ->with('agents', parent::getRandomAgents()) 
        ->with('note', 'You dreamhome request has been succesfully updated'); 
       
    }

 
     public function destroy($id)
    {

        Dreamhome::find($id)->delete();

   return View::make('admin.vw_dream_home_manage')
        ->with('dreamhomes', Dreamhome::where('user_id', '=', Auth::user()->id)->get())
        ->with('note', 'You dreamhome request has been deleted')
        ->with('agents', parent::getRandomAgents());
    }

}