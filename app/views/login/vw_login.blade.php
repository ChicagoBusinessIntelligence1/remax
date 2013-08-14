@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public/about 
-->

<div class="mainContent panel">
	<div class="row">
		<ul class=" large-6 columns large-centered no-bullet ulLoginError">
			{{$errors->first('email', '<li>:message</li>')}}
			{{$errors->first('password', '<li>:message</li>')}}
			@if(Session::has('message'))
			<li>{{Session::get('message')}}</li>
			@endif

		</ul>



		<div class="large-6 columns large-centered loginPageWrapper signInFormWrapper">
			<div class="formLoginPage">
				{{Form::open(array('url'=>'login'))}} 

				{{Form::label('email', 'Your Email')}}
				{{ Form::email('email', Input::old('email'), array())}}
				{{Form::label('password', 'Your Password')}}
				{{ Form::password('password', array())}}
				{{ Form::submit('Login', $attributes = array('class'=>'button  tiny radius'))}}
				{{Form::close()}} 
			</div>                  

		</div>
	</div>
</div>
@stop