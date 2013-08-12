<?php

class PanelController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */



    public function saved_homes()
    {
        $user = User::find(Auth::user()->id);
        

        return View::make('admin.vw_saved_homes')
        ->with('user', $user)
        ->with('agents', parent::getRandomAgents());
    }


    public function index()
    {
        return View::make('admin.vw_panel')
        ->with('agents', parent::getRandomAgents());
    }

    

}