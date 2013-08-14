@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
      @include('partials._admin_panel_menu')
      @include('partials._user_error')

      <div class="panel userPanelContent">
        {{Form::open(array('route'=>'user-update', 'method'=> 'PUT'))}}


        {{Form::hidden('id', $user->id)}}


        <div class="row">
          <div class="large-12 columns createAccount">  


            <!-- =create your account form starts here -->
            <div class="row">
              <div class="large-6 columns">
                <h3 class="subheader account">{{$user->first_name}}'s account</h3>
              </div>

            </div>
            <div class="row">
              <div class="large-6 columns">
                {{Form::label('first_name', 'First Name')}}
                {{Form::text('first_name', $user->first_name, array('class'=>'className'))}}
              </div>

              <div class="large-6 columns">{{Form::label('last_name', 'Last Name')}}
                {{Form::text('last_name',  $user->last_name, array('placeholder'=>'Your last name', 'class'=>'className'))}}
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
                    {{Form::email('email',  $user->email, array('class'=>'emailCreate'))}}
                  </div>
                </div>
              </div>        

              <div class="large-6 columns">
                {{Form::label('phone', 'Phone (Optional)')}}
                {{Form::text('phone',  $user->phone, array('placeholder'=>'(***)***-****', 'class'=>'className'))}}
              </div>
            </div>      

            <div class="row">
              <div class="large-6 columns">
                {{Form::label('password', 'New Password')}}
                {{Form::password('password', '', array('class'=>'className'))}}
              </div>
              <div class="large-6 columns">
                {{Form::label('password_confirmation', 'Confirm new Password')}}
                {{Form::password('password_confirmation', '', array('class'=>'passwordCreate'))}}
              </div>
            </div>      

            <div class="row">
              <div class="small-3 columns left">
                {{ Form::submit('Update', array('class'=>'button tiny radius'))}}
              </div>
            </div>
          </div>
        </div>
        {{Form::close()}}
      </div>



    </div>
  </div>
</div>
@stop