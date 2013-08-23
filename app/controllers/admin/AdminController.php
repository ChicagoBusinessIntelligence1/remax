<?php

class AdminController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


   public function index()
    {
        return View::make('admin.vw_fill_db')
        ->with('agents', parent::getRandomAgents());
    }

    

}