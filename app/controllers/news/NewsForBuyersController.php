<?php

class NewsForBuyersController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

      return View::make('news.vw_news_for_buyers')
     ->with('news', News::where('bs','=', 1)->get())->with('agents', parent::getRandomAgents());
        

    }

}