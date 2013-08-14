@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			@include('partials._admin_panel_menu')

			<div class="panel userPanelContent">
				<div class="row">

				<div class="large-11 large-centered columns">	
				<h4 class="subheader"> Your Dreamhome Request</h4>
				<br/>
				{{Form::open(array('route' => 'my-dream-home-request', 'method'=>'POST'))}}


						<div class="row">
							<div class="large-8 columns">
								{{Form::label('location', 'Location')}}
								{{Form::text('location','', array('placeholder'=>'City, State, Address or Zip Code', 'class'=>'findInput'))}}
							</div>
							<div class="large-4 columns">
								{{Form::label('property_type', 'Property Type')}}
								{{Form::text('property_type','', array('placeholder'=>'', 'class'=>'findInput'))}}
							</div>
						</div>

						<div class="row">
							
							<div class="large-4 columns">
								{{Form::label('beds', 'Bedrooms')}}
								{{Form::text('beds', '', array('placeholder'=>'#', 'class'=>'findinput'))}}
							</div>
							<div class="large-4 columns">
								{{Form::label('baths', 'Bathrooms')}}
								{{Form::text('baths', '', array('placeholder'=>'#', 'class'=>'findinput'))}}
							</div>
							<div class="large-4 columns">
								{{Form::label('garage', 'Garage')}}
								{{Form::text('garage','', array('placeholder'=>'', 'class'=>'findInput'))}}

							</div>

						</div>

						<div class="row textareaCommentsWrapper">
							<div class="large-8 columns">
								{{Form::label('comments', 'Comments')}}
								{{Form::textarea('comments','', array('placeholder'=>'Provide please any additional details for your request.', 'class'=>'findInput'))}}
							</div>
						</div>

						<div class="row">
							<div class="large-4 columns">


								{{ Form::submit('Submit', array('class'=>'button small secondary radius submitSearch'))}}

								<br/>
							</div>
						</div>

						{{Form::close()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop