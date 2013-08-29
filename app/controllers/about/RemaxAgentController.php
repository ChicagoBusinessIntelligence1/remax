<?php
 //LOCATION: remax/public/Remax-agent-real-estate-skokie-hiring
class RemaxAgentController extends BaseController {



	public function index()
	{
		
		$title = 'Make short sentence with Remax, agent, real, estate, skokie, hiring';
		$meta = 'Make short sentence with call to action in the END Remax, agent, real, estate, skokie, hiring';

		return View::make('about.vw_remax_agent')
		->with(compact('title', 'meta'))
		->with('agents', parent::getRandomAgents());
	}

}