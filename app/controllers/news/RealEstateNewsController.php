<?php

class RealEstateNewsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

      return View::make('news.vw_real_estate_news')
     ->with('news', News::all())->with('agents', parent::getRandomAgents());
        

    }

}