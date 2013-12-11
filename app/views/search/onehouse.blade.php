@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row">
			<div class="row">



				@if(isset($listing->Address))
				<div class="large-9 columns">
					<h1 class="oneHouseAddress label radius">{{$listing->Address}}</h1>
					&nbsp &nbsp
					

					<ul class="inline-list">
						
						@if ($listing->IsForeclosure  == 1)
						<li class="label radius foreclosureLabel">
							Foreclosure <br/>
						</li>
						@endif

						@if ($listing->IsBankOwned == 1)
						<li class="label radius bankownedLabel">
							Bank Owned <br/>
						</li>

						@endif
						
						@if ($listing->IsShortSale  == 1)
						<li class="label radius shortsaleLabel">
							Short Sale <br/>
						</li>
						@endif

					</ul>
					

				</div>
				@endif
				<div class="large-2 columns">
					<span class="priceStyle right ">${{number_format($listing->Price)}}
					</span>
				</div>
			</div>
			<hr/>

			@if(isset($listing->NumberPhotos))
			<ul class="clearing-thumb ulParsedImg" data-clearing>
				@for ($i =1; $i <= $listing->NumberPhotos; $i++)
				<li class="clearing-featured-img parsedImg>"
					<a class="th" href="{{url('comp/img/images/'.$listing->MlsNum.'/'.$i.'.jpg')}}">
						<img width="150px" alt="{{$listing->city->CityName}} Home for 
						@if ($listing->IsRental==0)
						Sale 
						@else
						Rent 
						@endif
						View {{$i}}" height="50px" src="{{url('comp/img/images/'.$listing->MlsNum.'/'.$i.'.jpg')}}"></a>
					</li>
					@endfor
				</ul>	
				@endif
				
			</div>
			<!-- =callAgentRent ends here -->

			<br/>		
			<div class="row">
				<div class="large-12 columns listingDetails">
					<div class="row">
						<div class="large-12 columns databaseParsing">
							<h2 class="title-section title-section-detail">Property Details</h2>

						</hr>
						@if(isset($listing->Address))
						<p class="property-description">{{$listing->PropDetails}}</p>

						<h3 class="title-section title-section-sub"> General Information</h3>
						<div class="row">
							<ul class="list-data list-data-alt span-d indent-super-alt">
								<li class="list-sidebyside">
									<span>Beds:</span>
									@if(isset($listing->Bed))
									<span>{{$listing->Bed}}</span>
									@else
									<span>-</span>
									@endif
								</li>
								<li class="list-sidebyside">
									<span>House Size</span>
									@if(isset($listing->HouseSize))
									<span>{{$listing->HouseSize}} sqft</span>
									@else
									<span>-</span>
									@endif
									
								</li>
								<li class="list-sidebyside">
									<span>Price:</span>
									@if(isset($listing->Price))
									<span>${{$listing->Price}}</span>
									@else
									<span>-</span>
									@endif
									
								</li>
								<li class="list-sidebyside">
									<span>Property Type:</span>
									@if(isset($listing->PropType))
									<span>{{$listing->PropType}}</span>
									@else
									<span>-</span>
									@endif
									
								</li>
							</ul>
							<ul class="list-data list-data-alt span-d indent-super-alt">
								<li class="list-sidebyside">
									<span>Baths:</span>
									@if(isset($listing->FullBath))
									<span>{{$listing->FullBath}}</span>
									@else
									<span>-</span>
									@endif
									
								</li>
								<li class="list-sidebyside">
									<span>Price/sqft:</span>
									@if($listing->HouseSize>0)
									<span>${{round($listing->Price/$listing->HouseSize)}}</span>
									@endif
								</li>
								<li class="list-sidebyside">
									<span>Year Built:</span>
									@if(isset($listing->YearBuilt))
									
									<span>{{substr($listing->YearBuilt, 0, 4)}}</span>
									@else
									<span>-</span>	
									@endif

								</li>
								<li class="list-sidebyside">
									<span>Garage:</span>
									@if(isset($listing->Garage))
									<span>{{$listing->Garage}}</span>
									@else
									<span>-</span>	
									@endif
								</li>
							</ul>
						</div>	
						<h3 class="title-section title-section-sub">Bedrooms</h3>
						<ul class="list-disc list-condensed list-col-c group">
							<li class="">{{$listing->BedroomUl}}</li>
							<ul/>

							<h3 class="title-section title-section-sub">Bathrooms</h3>
							<ul class="list-disc list-condensed list-col-c group">
								<li class="">{{$listing->BathroomUl}}</li>
							</ul>
							<h3 class="title-section title-section-sub">Kitchen and Dining</h3>
							<ul class="list-disc list-condensed list-col-c group">
								<li class="">Kitchen Level: Main Level</li>
							</ul>
							<h3 class="title-section title-section-sub">Other Rooms</h3>
							<ul class="list-disc list-condensed list-col-c group">
								<li class="">Living Room: 21x14</li>
							</ul>
							<h3 class="title-section title-section-sub">Building and Construction</h3>

							<h3 class="title-section title-section-sub">Home Features</h3>
							<ul class="list-disc list-condensed list-col-c group">
								<li class="">Security Deposit: 2600</li>
							</ul>

							<h3 class="title-section title-section-sub">Building and Construction</h3>

							<h3 class="title-section title-section-sub">Exterior and Lot Features</h3>
							<h3 class="title-section title-section-sub">Garage and Parking</h3>
							<h3 class="title-section title-section-sub">Heating and Cooling</h3>
							<h3 class="title-section title-section-sub">Utilities</h3>
							<h3 class="title-section title-section-sub">Appliances</h3>
							<h3 class="title-section title-section-sub">Amenities and Communities Features</h3>
							<h3 class="title-section title-section-sub">Other Property Info</h3>

							@endif



						</div> <!-- database Parsing -->

					</div>
				</div>
			</div>

		</div>
	</div>
	@stop


