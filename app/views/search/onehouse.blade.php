@extends('layouts.master')

@section('set')
{{$imCounter = $house->images()->first()->maxid}}
@stop
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">
			<div class="large-10 columns left">
				@if($house->agent)
				<ul class="vcard oneRentVcard">
					<li>					
						<div class="locality alert-box secondary radius callAgent">
							<a class="th radius aCallAgent" data-reveal-id="{{$house->agent['id']}}" href="#">Listing Agent:
								<span class="agentNameList" >{{$house->agent['firstname'] . ' '. $house->agent['lastname']}}
								</span>
							</a>
							<br/>
							<span class="agentPhoneList">
								Direct Phone: 
								<strong>
									{{$house->agent['directphone']}}
								</strong>
							</span>
						</div>
					</li>
				</ul>
				@endif

			</div> 
			
			<div class="large-2 columns">

				<a class="button secondary radius priceStyle right">${{number_format($house->price)}}
				</a>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="large-12 columns l">
				<h4>{{$house->address}}</h4>
				<h5 class="label tiny  secondary radius">Property Type </h5>
				&nbsp &nbsp
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns listingDetails">

				<div class="shortPropDet">
					<div class="row">

						<div class="large-4 offset-1 column panel secondary">

							<strong>MLS: #</strong> {{$house->listing}}<br/><br/>

							<strong>Status: </strong>Info<br/><br/>
						</div>


						<div class="large-4 offset-1 columns panel secondary panelShortInfo ">
							<strong>Bedrooms:</strong> {{$house->bedrooms}} <br/><br/>

							<strong>Bathrooms:</strong> {{$house->bathrooms}} <br/><br/>

							<strong>House Size:</strong> {{$house->size}} <br/><br/>

							<strong>Lot Size: </strong>Info<br/><br/>

							<strong>Year Builts:</strong> {{$house->year}} <br/><br/>
						</div>		
					</div>
					</div
					>

					<br/><br/>
					<h5>Description:</h5>
					<hr/>
					<p>{{ucfirst(strtolower($house->details))}}</p>

					<h5 class="tenMarginTop">Interior Details</h5>
					<hr/>
					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Master Bedroom</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Bedroom 2</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Bedroom 3</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Bedroom 4</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">

						<dt class="dtDes">Master Bathroom</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Dining Room</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Kitchen</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Dining Area</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Family Room</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Living Room</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Living Dining Combo</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Laundry Room</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Exercise Room</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Basement</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Utility Room</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Window Type</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Appliances</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Flooring</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription light radius">
						<dt class="dtDes">Fireplace</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<dl class="dlInlineDescription">
						<dt class="dtDes">Features</dt>
						<dd class="ddDes">info</dd>
					</dl>

					<h5 class="tenMarginTop">Exterior Details</h5>
					<hr/>

					<h5>Utilities</h5>
					<hr/>

					<h5>Exterior Details</h5>
					<hr/>

					<h5>School</h5>
					<hr/>

					<div class="row">
						<div class="large-12 large-centered columns receivePriceChangeButtonWrapper">
							@if(Auth::check())
							{{Form::open(array('url' => 'house-alert/'.$house->id, 'method'=>'POST'))}}
							{{ Form::submit('Save this Property to My Account', array('class'=>'button tiny secondary radius addPropertyButton'))}}
							{{Form::close()}}
							@else
							<div class="label radius pleaseSignIn">Please Sign-in to Receive Alerts for this Property
							</div>
							@endif
						</div>
					</div>

					@if($imCounter)
					<ul class="clearing-thumbs" data-clearing>
						@for ($i =1; $i <= $imCounter; $i++)
						<li><a class="th" href="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}">
							<img width="100px" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a></li>
							@endfor
						</ul>	
						@endif
					</div>
				</div>

			</div>
		</div>
		@stop


