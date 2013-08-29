<?php

class NewsForSellersController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

     return View::make('news.vw_news_for_sellers')
     ->with('news', News::where('bs','=', 2)->get());
      
    }

}