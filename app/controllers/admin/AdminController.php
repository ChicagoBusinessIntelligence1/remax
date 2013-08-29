<?php

class AdminController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


   public function index()

    {
        $m_agents = Agent::all();
        $salediningrooms = Salediningroom::all();
        return View::make('admin.vw_fill_db')
        ->with(compact('salediningrooms'))
        ->with(compact('m_agents'));

       
    }

   public function store()
    {

       $houses = House::with('images', 'agent','status', 'saleexteriorfeature', 'propertytype', 'salebedroom', 'salebathroom', 'salekitchen', 'salediningroom', 'salelivingroom', 'saleschool', 'salepropertyinfo', 'salepublicrecord',
      'salefamroom', 'salelaundryroom', 'saleexerciseroom', 'salebasement', 'saleutilityroom', 'salewalkincloset', 'saleotherroom', 'saleinteriorfeature', 'saleappliance', 'salegarageandparking', 'salebuildingconstruction', 
      'saleutility', 'salehomefeature', 'saleamenity' )->get();   
       



        return View::make('admin.vw_fill_db');
       
    }
    

}