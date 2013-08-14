@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public/renovating_a_home
-->

<div class="mainContent">
	<div class="row">
		<div class="large-12 columns contactUsFormWrapper">
			<div class="contactUsFormWrapper">
			{{Form::open(array('url' => 'foo/bar'))}}
				<fieldset>
					<legend><h3>Contact Us</h3></legend>

					<div class="row">
						<div class="small-6 columns">
							{{Form::label('firstName', 'First Name')}}
							{{Form::text('firstName', '', array('placeholder'=>'Your name', 'class'=>'className'))}}	
						</div>
						<div class="small-6 columns">
							{{Form::label('lastName', 'Last Name')}}
							{{Form::text('lastName', '', array('placeholder'=>'Your last name', 'class'=>'className'))}}
						</div>
					</div>

					<div class="row">
						<div class="small-4 columns">
							{{Form::label('homePhone', 'Home Phone')}}
							{{Form::text('homePhone', '', array('placeholder'=>'(***)***-****', 'class'=>'className'))}}
						</div>

						<div class="small-4 columns">
							{{Form::label('mobilePhone', 'Mobile Phone')}}
							{{Form::text('mobilePhone', '', array('placeholder'=>'(***)***-****', 'class'=>'className'))}}
						</div>

						<div class="small-4 columns">
							{{Form::label('email', 'Email')}}
							<div class="row collapse">
								<div class="small-2 columns">
									<span class="prefix">@</span>
								</div>
								<div class="small-10 columns">
									{{Form::text('email', '', array('placeholder'=>'Your email', 'class'=>'className'))}}
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="small-8 columns">
							{{Form::label('subject', 'Subject')}}
							{{Form::text('subject', '', array('placeholder'=>'Your subject', 'class'=>'className'))}}
						</div>
					</div>

					<div class="row">
						<div class="large-8 columns">
							{{Form::label('message', 'Message')}}
							{{Form::textarea('message', '', array('placeholder'=>'Your message', 'class'=>'className'))}}
						</div>
					</div>
					<div class="row">
						<div class="small-2 columns">
							{{ Form::submit('Send', array('class'=>'secondary button small radius'))}}
						</div>
					</div>
				</fieldset>
				{{Form::close()}}</div >
			</div>
		</div>
	</div>
	@stop