<?php
include_once app_path() . '/util/SelectRandomAgents.php';
//LOCATION: remax/public
class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}



protected function getRandomAgents()
{
	$agents = Agent::all()->toArray();
	return SelectRandomAgents::choose($agents, 9);
	}
}