@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->

<div class="mainContent panel signUpPanel">
  <div class="row">

  @include('partials._user_error')

    <div class="row">
     <div class="large-6 columns">
       <div class="row">
        @if(!Auth::check())
        <div class="large-11 columns right haveAccountWrapper">
          <span class="haveAccountSpan">Already Have an Account?</span>
          {{link_to('#', 'Sign In', array('data-reveal-id'=>'adminAuth', 'class'=>'signInStyle'))}}
        </div>
        @endif
      </div>
      <div class="row">
        @if(!Auth::check())
        <div class="large-11 columns right">
          <em>
            {{link_to('#', 'Forgot Your Password?', array('data-reveal-id'=>'adminAuth', 'class'=>'forgotPassStyle'))}}
          </em>                
        </div>
        @endif
      </div>
    </div> 
  </div>
</div>

    <!-- <div class="large-12 columns large-centered loginPageWrapper signInFormWrapper">
    <div class="formLoginPage"> -->

      <div class="row">
        <div class="large-12 columns large-centered profileContent">

          <!-- =create an account panel ends here -->

          <!-- =create an account form starts here -->
          {{Form::open(array('url' => 'sign-up'))}}
          <div class="row">

            <div class="large-12 columns createAccount">  


              <!-- =create your account form starts here -->
              <div class="row">
                <div class="large-6 columns">
                  <h3 class="subheader account">Create Your Account</h3>
                </div>

              </div>
              <div class="row">
                <div class="large-6 columns">
                  {{Form::label('first_name', 'First Name')}}
                  {{Form::text('first_name', Input::old('first_name'), array('placeholder'=>'Your Name', 'class'=>'className'))}}
                </div>

                <div class="large-6 columns">{{Form::label('last_name', 'Last Name')}}
                  {{Form::text('last_name', Input::old('last_name'), array('placeholder'=>'Your last name', 'class'=>'className'))}}
                </div>
              </div>


              <div class="row">
                <div class="large-6 columns">
                  {{Form::label('email', 'Email Address')}}
                  <div class="row collapse">
                    <div class="small-2 columns">
                      <span class="prefix">@</span>
                    </div>
                    <div class="small-10 columns">
                      {{Form::email('email', Input::old('email'), array('placeholder'=>'Your email', 'class'=>'emailCreate'))}}
                    </div>
                  </div>
                </div>        

                <div class="large-6 columns">
                  {{Form::label('phone', 'Phone (Optional)')}}
                  {{Form::text('phone', Input::old('phone'), array('placeholder'=>'(***)***-****', 'class'=>'className'))}}
                </div>
              </div>      

              <div class="row">
                <div class="large-6 columns">
                  {{Form::label('passwordCreate', 'Password')}}
                  {{Form::password('password', '', array('class'=>'className'))}}
                </div>
                <div class="large-6 columns">
                  {{Form::label('password_confirmation', 'Confirm Password')}}
                  {{Form::password('password_confirmation', '', array('class'=>'passwordCreate'))}}
                </div>
              </div>      

              <div class="row">
                <div class="small-3 columns left">
                  {{ Form::submit('Create Your Free Account', array('class'=>'button tiny radius'))}}
                </div>
              </div>
            </div>


            {{Form::close()}}
          </div>




        </div>
      </div>



      <!-- </div>                  

    </div> -->
    <!-- </div> -->
  </div>
  @stop


