@extends('layouts.master')

@section('set')
{{$imCounter = $rental->rentalimage->maxid}}
@stop
@section('content')

<!-- //LOCATION: remax/public
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">
			
			<div class="large-8 columns left">
				@if($rental->agent)
				<ul class="vcard oneRentVcard">
					<li>					
						<div class="locality alert-box secondary radius callAgent">
							<a class="th radius aCallAgent" data-reveal-id="{{$rental->agent['id']}}" href="#">Listing Agent:
								<span class="agentNameList" >{{$rental->agent['firstname'] . ' '. $rental->agent['lastname']}}
								</span >
							</a>
							<br/>
							<span class="agentPhoneList">
								Direct Phone: 
								<strong>
									{{$rental->agent['directphone']}}
								</strong>
							</span>
						</div>
					</li>
				</ul>
				@endif

			</div>
			<div class="large-2 columns ">
				<!-- <a class="alert-box secondary round alertRentalStyle" href="">Rental</a> -->
				{{link_to('all-rent-listings', 'Rental', array('class'=>'alert-box secondary round alertRentalStyle'));}}
			</div>
			<div class="large-2 columns">
				<a class="priceStyle right ">${{number_format($rental->price)}}
				</a>
			</div>

		</div>
		<hr/>
		<div class="row">
			<div class="large-12 columns">
				<h5>
					{{$rental->address}}
				</h5> &nbsp	&nbsp	
			</div>
		</div>
		<hr/>

		<div class="row">	
			<div class="large-12 columns ">	
				
				<strong>Decription:</strong>
				<br></br>
				<p>{{$rental->details}}</p>
				<strong>MLS: #</strong> {{$rental->listing}}<br></br>
				
				<strong>Bedrooms:</strong> {{$rental->bedrooms}} <br></br>
				<strong>Bathrooms:</strong> {{$rental->bathrooms}} <br></br>
				<!-- <strong>Size:</strong> {{$rental->size}} <br></br> -->

				@if($rental->year)
				<strong>Year:</strong> {{(new DateTime($rental->year))->format("Y")}} 
				<br></br>
			</ul>
			@endif
		</div>
	</div>

	
	@if($imCounter)
	<div class="row">
		<div class="large-6 columns">
			<ul class="clearing-thumbs" data-clearing>
				@for ($i =1; $i <= $imCounter; $i++)
				<li><a class="th" href="{{url('comp/img/rent/'.$rental->id.'/'.$i.'.jpg')}}">
					<img width="100px" height="50px" src="{{url('comp/img/rent/'.$rental->id.'/'.$i.'.jpg')}}"></a></li>
					@endfor
				</ul>
			</div>
			@endif

			@if($rental->agent)
			<div class="large-6 columns">

			</div>
			@endif
		</div>
	</div>
</div>
@stop


