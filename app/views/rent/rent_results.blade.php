@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	@if(count($rentals)>0)

	<!-- =ulRent starts here -->
	<ul class="no-bullet ulRent">
		@foreach ($rentals as $rental)
		<li>

			<a href="{{url('rent/'.$rental->id)}}">

				<!-- =addressColor starts here -->
				<div class="panel addressColor">
					<div class="row">
						<div class="large-8 columns">
							<h6>
								{{$rental->address}}
							</h6> &nbsp	&nbsp	
						</div>
						<div class="large-2 small-3 columns">
							<a class="alert-box secondary round alertRentalStyle" href="">Rental</a>


						</div>
						<div class="large-2 small-3 columns">
							<span class="alert-box secondary radius priceStyle right ">${{number_format($rental->price)}}
							</span>
						</div>
					</div>
					<hr/>

					<div class="row">
						<div class="large-7 columns houseImgWrapper">
							<div class="fiveMarginBottom">
								<small>
									<em>Bedrooms:</em> {{$rental->bedrooms}} | 
									<em>Bathrooms:</em> {{$rental->bathrooms}} | 

									<em>Property Type:</em> {{$rental ->rentalpropertytype->rentaltype}}  
								</small>
							</div>

							@if($rental->rentalimage()->first()->maxid)
							<!-- <div class="listingImage"> -->
							<a class="listingImage" href="{{url('rent/'.$rental->id)}}"><img src="{{url('comp/img/rent_thumbs/'.$rental->id.'/1.jpg')}}"class="th">
							</a> 

							<!-- </div> -->
							@endif

							
							<!-- </div> -->
						</div>					
						<!-- =houseImgWrapper ends here -->

						<!-- =basicInfoWrapper starts here-->
						<div class="large-5 columns basicInfoWrapper">

							<!-- =basicInfo starts here -->
							<ul class="vcard basicInfoUl">
								<li>
									<div class="alert-box secondary expand basicInfo">Basic Information
									</div>
									<div class="searchDescription">
										{{Str::limit(ucfirst(strtolower($rental->details)), 280)}} </br>
										<a href="{{url('search/'.$rental->id)}}" class="readMore propDetails"><em>Property Details</em></a>
										<hr/>
									</div>
									<!-- =basicInfo ends here -->
								</li>
								@if($rental->agent)

								<!-- =locality =callAlert starts here -->
								<div class="locality right alert-box secondary radius callAgent">
									<a class="th radius aCallAgent" data-reveal-id="{{$rental->agent['id']}}" href="#">Listing Agent:
										<span class="agentNameList">{{$rental->agent['firstname'] . ' '. $rental->agent['lastname']}}</span>
									</a>
									<br/>
									<span class="agentPhoneList">Direct Phone: <strong>{{$rental->agent['directphone']}}</strong></span>
								</div>
								<!-- =locality =callAlert ends here -->
								@endif
							</ul>
							<!-- =basicInfoUl ends here-->

						</div>
					</div>				
					<!-- =addressColor ends here -->
				</div>
				<!--  =panel addressColor ends here-->
			</a>
		</li>

		@endforeach
	</ul>
	<!-- =ulRent ends here -->
	<?php echo $rentals->appends(array(
		'location' => Input::get('location_r'),
		'from' => Input::get('from_r'),
		'to' => Input::get('to_r'),
		'beds' => Input::get('beds_r'),
		'baths' => Input::get('baths_r')))->links(); ?>
		@else
		{No result found for your request}
		@endif
	</div>
	@stop
