@extends('layouts.master')
@section('content')
<!-- 
//LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			@include('partials._admin_panel_menu')
			<div class="userPanelContent">
				<h2 class="subheader">My Saved Homes</h2>
				@foreach($user->houses as $house)

				<!-- =addressColor starts here -->
				<div class="panel addressColor">
					<div class="row listPropWrap">
						<div class="large-10 columns">
							<h3>
								{{$house->address}}
							</h3> &nbsp	&nbsp	
							<br/>
						</div>

						<div class="large-2 columns">
							<span class="priceStyle right ">${{number_format($house->price)}}
							</span>
						</div>
					</div>
					<hr/>


					<div class="row">
						<div class="large-7 columns houseImgWrapper">

							<div class="fiveMarginBottom">
								<small>
									<em>MLS#: </em>{{$house->listing}} | 
									<em>Year: </em>{{$house->year}} | 
									<em>Bedrooms: </em>{{$house->bedrooms}} | 
									<em>Bathrooms: </em>{{$house->bathrooms}}  
									@if ($house->year!=null)
									@endif
								</small>
							</div>
							@if($house->images()->first()->maxid)
							<a class="listingImage" href="{{url('search/'.$house->id)}}"><img src="{{url('comp/img/thumbs/'.$house->id.'/1.jpg')}}"  class="th">
							</a> 

							@endif
							<div class="deletePropertyButtonWrapper">
								@if(Auth::check())
								{{Form::open(array('url' => 'house-alert-remove/'.$house->id, 'method'=>'POST'))}}
								{{ Form::submit('Delete this Property from My Account', array('class'=>'button tiny secondary radius deletePropertyButton'))}}
								{{Form::close()}}
								@else
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
										{{Str::limit(ucfirst(strtolower($house->details)), 280)}} </br>
										<a href="{{url('search/'.$house->id)}}" class="propDetails"><em>Property Details</em></a>
										<hr/>
									</div>
									<!-- =searchDescription ends here -->
								</li>
								@if($house->agent)

								<!-- =callAgent starts here -->
								<div class="locality right alert-box secondary radius callAgent">
									<a class="th radius aCallAgent" data-reveal-id="{{$house->agent['id']}}" href="#">Listing Agent:
										<span class="agentNameList" >{{$house->agent['firstname'] . ' '. $house->agent['lastname']}}</span >
										</a>
										<br/>
										<span class="agentPhoneList">Direct Phone: <strong>{{$house->agent['directphone']}}</strong></span>
									</div>
									<!-- =callAgent ends here -->
									@endif
								</ul>
							</div>
						</div>

					</div>





					@endforeach

				</div>

			</div>
		</div>
	</div>
	@stop