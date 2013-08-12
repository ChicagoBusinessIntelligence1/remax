<?php
//LOCATION: remax/public 
class LoginController extends BaseController {


	public function signup()
	{
		$first_name	= Input::get('first_name');
		$last_name = Input::get('last_name');
		$phone = Input::get('phone');
		$email = Input::get('email');
		$password = Input::get('password');
		$password_confirmation = Input::get('password_confirmation');
		$now = date('Y-m-d H:i:s');



		$validator  = User::validate([
			'first_name' => $first_name,
			'last_name' => $last_name,
			'phone' => $phone,
			'email'=>$email,
			'password'=>$password,
			'password_confirmation'=>$password_confirmation]);

		if ($validator->fails()){
			return Redirect::route('signup-errors')
			->withErrors($validator)
			->withInput()
			->with('agents', parent::getRandomAgents());
		} else {

			$justCreatedUser = User::create(array(
				'first_name' => $first_name,
				'last_name' => $last_name,
				'phone' => $phone,
				'email'=>$email,
				'password'=>Hash::make($password),
				 'created_at'=>$now,
				 'updated_at'=>$now));

			if ($justCreatedUser){

			Auth::login($justCreatedUser);

			return Redirect::route('panel')
				->with('message', 'You have been logged in.')
				->with('agents', parent::getRandomAgents());
			}
		

			}
		

		
		
	} 

	public function signup_errors()
	{
		return View::make('login.vw_signup');
	}


	public function index()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		$validator  = Validator::make([
			'email'=>$email,
			'password'=>$password
			], [
			'email'=>'required|email|min:4',
			'password'=>'required|min:4|alpha_dash'
			]);

		if ($validator->fails()){
			return Redirect::route('login-errors')
			->withErrors($validator)
			->withInput()->
			with('agents', parent::getRandomAgents());
		} else {

			if(Auth::attempt(array('email'=>$email, 'password'=>$password))){

				return Redirect::route('panel')
				->with('message', 'You have been logged in')
				->with('agents', parent::getRandomAgents());

			} else {
				$user = User::where('email','=', $email)->first();

				if ($user){
					$message = 'Your password is incorrect. Try agin';

				} else {

					$message = 'You are not registered. Please sign-up';

				}


				return Redirect::route('login-errors')
				->withInput()
				->with('message', $message)
				->with('agents', parent::getRandomAgents());

			}
		}

		//return View::make('admin.vw_panel');
		
	} 

	public function fail()
	{
		return View::make('login.vw_login');
	}


	public function logout()
	{

		if (Auth::check()){
			Auth::logout();
			 return Redirect::route('login-errors')
				->with('message', 'You are successfully logout')
				->with('agents', parent::getRandomAgents());
		} else {
			return Redirect::route('home');
		}
	}	


}

