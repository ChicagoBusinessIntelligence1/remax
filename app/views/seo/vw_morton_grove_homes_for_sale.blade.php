@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search 
-->
<div class="mainContent">
<h1 class="docs header">Morton Grove Homes For Sale</h1>
	@if(count($houses)>0)
	<ul class="no-bullet">
		@foreach ($houses as $house)
		<li>

			<a href="{{url('search/'.$house->id)}}">
				<!-- =addressColor starts here -->
				<div class="panel addressColor">
					<div class="row listPropWrap">
						<div class="large-10 columns">
							<h2>
								{{$house->address}}
							</h2> &nbsp	&nbsp	
							<br/>
						</div>

						<div class="large-2 columns">
							<span class="priceStyle right ">${{number_format($house->price)}}
							</span>
						</div>
					</div>
					<div class="row">
						<div class="large-10 columns">
							<h3 class="subheader propType"><em>{{$house->type->type}}</em> </h3>
						</div>
					</div>

					<hr/>
					<div class="row">
						<div class="large-7 columns houseImgWrapper">

							<div class="fiveMarginBottom">
								<small>
									<em>MLS#: </em>{{$house->mls}} | 
									@if ($house->year!=null)
									<em>Year: </em>{{$house->year}} | 
									@endif
									<em>Bedrooms: </em>{{$house->beds}} | 
									<em>Bathrooms: </em>{{$house->baths}}  
									
								</small>
							</div>
							@if($house->maximgid)
							<a class="listingImage" href="{{url('search/'.$house->id)}}"><img src="{{url('comp/img/images/'.$house->id.'/1.jpg')}}"  class="th">
							</a> 
							@endif
							<div class="signinLabel">
								@if(Auth::check())
								{{Form::open(array('url' => 'house-alert/'.$house->id, 'method'=>'POST'))}}
								{{ Form::submit('Save this Property to My Account', array('class'=>'button tiny secondary radius addPropertyButton'))}}
								{{Form::close()}}
								@else
								<span class="label radius pleaseSignIn"><em>Please Sign-in to Receive Alerts for this Property</em>
								</span>
								@endif
							</div>

						</div>
						<!-- =houseImgWrapper ends here -->

						<!-- =badicInfoWrapper starts here -->
						<div class="large-5 columns basicInfoWrapper">
							<ul class="vcard basicInfoUl">
								<li>
									<div class="alert-box secondary expand basicInfo">Basic Information
									</div>

									<!-- =searchDescription starts here -->
									<div class="searchDescription">
										{{substr($house->description, 144, 300)}}... </br>
										
										<a href="{{url('search/'.$house->id)}}" class="propDetails"><em>Property Details</em></a>
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

		<?php echo $houses->appends(array(
			'location' => Input::get('location'),
			'from' => Input::get('from'),
			'to' => Input::get('to'),
			'beds' => Input::get('beds'),
			'baths' => Input::get('baths')))->links(); ?>
			@else
			No result found for your request.
			@endif
		</div>
		@stop
