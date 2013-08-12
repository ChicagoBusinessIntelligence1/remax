<?php

class EmailController extends BaseController {


	public function index()
	{
	  $from  = Input::get('email');	
	  $subj  = Input::get('subject');	
	  $body  = Input::get('message');	
	  $data = array(
	  	'from'=>$from,
	  	'subj'=>$subj,
	  	'body'=> $body	
	  	);
	  Mail::send('emails.welcome', $data, function($m)
{
	// $m->to('Svitlana.Shepitsena@gmail.com', 'Svitlana Shepitsena')->subject($subject);
	 $m->to('remax1stclass@gmail.com', 'Remax First Class')->subject('From the site Form');
});

		return View::make('emails.thank_you');;
	}

}