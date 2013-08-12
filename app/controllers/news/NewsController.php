<?php
//LOCATION: remax/public
class NewsController extends BaseController {

    /**
     * Display a listing of the resource.
     
     * @return Response
     */
    public function show($id)
    {
     return View::make('news.vw_news')
     ->with('news', News::find($id))->with('agents', parent::getRandomAgents())->with('agents', parent::getRandomAgents());
    }

}