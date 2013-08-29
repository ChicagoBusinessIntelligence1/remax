<?php

class UserController extends BaseController {

    public function edit($id)
    {

      return View::make('admin.vw_user_edit')
      ->with('user', User::find($id));
  }

  public function update(){

    $id = Input::get('id');
    $first_name = Input::get('first_name');
    $last_name = Input::get('last_name');
    $phone = Input::get('phone');
    $email = Input::get('email');
    $password = Input::get('password');
    $password_confirmation = Input::get('password_confirmation');
    $now = date('Y-m-d H:i:s');


    $userData = [
    'first_name' => $first_name,
    'last_name' => $last_name,
    'phone' => $phone,
    'email'=>$email,
    'password'=>$password,
    'password_confirmation'=>$password_confirmation];


    $validator  = User::validate($userData);

    if ($validator->fails()){
        return Redirect::to('user-edit/'.$id)
        ->withErrors($validator)
        ->withInput();
    } else {

        $user = User::find($id);
        $user->first_name=$first_name;
        $user->last_name=$last_name;
        $user->phone=$phone;
        $user->email=$email;
        $user->password=$password;

        $user->save();



        return Redirect::to('user-edit/'.$id)
        ->with('message', 'Your information has been updated');            
    }

}


}