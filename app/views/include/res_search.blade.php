@section('listings')
@if(count($listings)>0)
<h3 class="alert-box secondary foundInfoStyle radius">{{$listings->getTotal()}} LISTINGS FOUND </h3>
<ul class="no-bullet">
	@foreach ($listings as $listing)
	<li>
		@if($listing->IsRental ==0)
		<a href="{{url('Homes-Sale-'.$listing->city->CityName.'/'.$listing->id)}}">
		@else
		<a href="{{url('Homes-Rent-'.$listing->city->CityName .'/'.$listing->id)}}">
		@endif	
				<!-- =addressColor starts here -->
				<div class="panel addressColor">
					<div class="row listPropWrap">
						<div class="large-10 columns">
							<h2>
								{{$listing->Address}}
							</h2> &nbsp	&nbsp	
							<br/>
						</div>

						<div class="large-2 columns">
							<span class="priceStyle right ">${{number_format($listing->Price)}}
							</span>
						</div>
					</div>
					<div class="row">
						<div class="large-10 columns">
							<h3 class="subheader propType"><em>{{$listing->PropType}}</em> </h3>
						</div>
					</div>

					<hr/>
					<div class="row">
						<div class="large-7 columns listingImgWrapper">

							<div class="fiveMarginBottom">
								<small>
									<em>MLS#: </em> 0{{$listing->MlsNum}} | 
									@if ($listing->YearBuilt!=null)
									<em>Year: </em>{{substr($listing->YearBuilt, 0, 4)}} | 
									@endif
									<em>Bedrooms: </em>{{$listing->Bed}} | 
									<em>Bathrooms: </em>{{$listing->FullBath}}  
									
								</small>
							</div>
							@if($listing->NumberPhotos)

							@if($listing->IsRental ==0)
							<a class="listingImage"  href="{{url('Homes-Sale-'.$listing->city->CityName.'/'.$listing->id)}}">
								@else
								<a class="listingImage"  href="{{url('Homes-Rent-'.$listing->city->CityName.'/'.$listing->id)}}">
									@endif	

									<img src="{{url('comp/img/images/'.$listing->MlsNum.'/1.jpg')}}"  class="th">
								</a> 
								@endif
								<div class="signinLabel">
									@if(Auth::check())
									{{Form::open(array('url' => 'listing-alert/'.$listing->id, 'method'=>'POST'))}}
									{{ Form::submit('Save this Property to My Account', array('class'=>'button tiny secondary radius addPropertyButton'))}}
									{{Form::close()}}
									@else
									<span class="label radius pleaseSignIn"><em>Please Sign-in to Receive Alerts for this Property</em>
									</span>
									@endif
								</div>

							</div>
							<!-- =listingImgWrapper ends here -->

							<!-- =badicInfoWrapper starts here -->
							<div class="large-5 columns basicInfoWrapper">
								<ul class="vcard basicInfoUl">
									<li>
										<div class="alert-box secondary expand basicInfo">Basic Information
										</div>

										<!-- =searchDescription starts here -->
										<div class="searchDescription">
											{{substr($listing->PropDetails, 0, 300)}}... </br>

											<a href="{{url('search/'.$listing->id)}}" class="propDetails"><em>Property Details</em></a>
											<hr/>
										</div>
										<!-- =searchDescription ends here -->
									</li>

									<!-- =callUs starts here -->
									<div class="locality right alert-box secondary radius callAgent">

										<span class="agentPhoneList">CALL US FOR A FREE CONSULTATION:</span><br/>
										<span class="phoneNumber"><strong>(847) 674-9797</strong></span>
									</div>
									<!-- =callUs ends here -->
								</ul>
							</div>
							<!-- =basicInfoWrapper ends here -->
						</div>


					</div>
					<!-- =panel addressColor ends here -->
				</a>

			</li>
			@endforeach
		</ul>

		<?php echo $listings->appends(array(
			'location' => Input::get('location'),
			'from' => Input::get('from'),
			'to' => Input::get('to'),
			'beds' => Input::get('beds'),
			'baths' => Input::get('baths')))->links(); ?>
			@else
			No result found for your request.
			@endif
			@stop