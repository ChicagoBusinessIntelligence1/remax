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
			<div class="large-5 columns left">
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
<!-- 			<div class="large-5 columns">
				
				<h5 class="label tiny success radius">Property Status</h5>
			</div>
 -->			
			<div class="large-2 columns">

				<a class="priceStyle tenMarginTop right">${{number_format($house->price)}}
				</a>
			</div>
		</div>
		<!-- =callAgentRent ends here -->

		<hr/>
		<div class="row">
			<div class="large-9 columns">
				<h2 class="oneHouseAddress">{{$house->address}}</h2>
				&nbsp &nbsp
			</div>
			<div class="large-3 columns">
				
				<h6 class="alert-box secondary radius propStat">PROPERTY STATUS</h6>
			</div>
			
		</div>
		<div class="row">
			<div class="large-4 columns">
			<h3 class="subheader propType"><em>Property Type</em> </h3>
			</div>
		</div>
		<hr/>

		<div class="row">
			<div class="large-12 columns listingDetails">

				<div class="shortPropDet">
					<div class="row noMargin">

						<div class="large-4 column panel secondary panelShortInfo ">

							<strong>MLS: #</strong> {{$house->listing}}<br/><br/>

							<strong>Status: </strong>Info<br/><br/>
						</div>


						<div class="large-4 offset-1 columns panel secondary panelShortInfo ">
							<strong>Bedrooms:</strong> {{$house->bedrooms}} <br/><br/>

							<strong>Bathrooms:</strong> {{$house->bathrooms}} <br/><br/>

							<strong>House Size:</strong> {{$house->size}} <br/><br/>

							<strong>Lot Size: </strong>Info<br/><br/>

							<strong>Year Built:</strong> {{$house->year}} <br/><br/>
						</div>		
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<h4 class="subheader tenMarginTop">Description</h4>
						<hr/>
						<div>
							<p>{{ucfirst(strtolower($house->details))}}</p>
						</div>
					</div>
				</div>

				<h4 class="subheader tenMarginTop">Interior Details</h4>
				<div class="row">
					<div class="large-12 columns">
						<div class="section-container accordion" data-section="accordion">
							<section class="section active">
								<p class="title">
									<a href="#panel1"><span>Bedrooms</span></a>
								</p>
								<div class="content" data-slug="panel1">
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription radius">
												<dt class="dtDes">Master Bedroom <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Master Bedroom <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 2 Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 2 Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 3 Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 3 Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 4 Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 4 Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>


									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 5 Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 5 Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									
								</div>
							</section>
							<section class="section">
								<p class="title">
									<a href="#panel2">Bathrooms</a>
								</p>
								<div class="content" data-slug="panel2">
									
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Full Bathrooms</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>


										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Half Bathrooms</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>


										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">

												<dt class="dtDes">Master Bath <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">

												<dt class="dtDes">Master Bath <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Kitchen</a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Kitchen Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Kitchen Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

									</div>
								</div>

							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Dining Area</a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Dining Room Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Dining Room <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Living Room</a>
								</p>
								<div class="content" data-slug="panel2">


									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription">
												<dt class="dtDes">Living Room <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
										<div class="large-7 columns">
											<dl class="dlInlineDescription">
												<dt class="dtDes">Living Room <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Living Dining Combo <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Living Dining Combo <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>

							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Family Room</a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Family Room <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Family Room <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Laundry Room</a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Laundry Room <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Laundry Room <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Exercise Room</a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Exercise Room <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Exercise Room <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Basement</a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Size</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Features</dt>
												<dd class="ddDes">yes/no</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Bath</dt>
												<dd class="ddDes">yes/no</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Bath <br/>  Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Utility Room </a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Utility Room <br/> Size</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Utility Room <br/> Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Walk In Closets</a>
								</p>
								<div class="content" data-slug="panel2">

									<h5 class="subheader"><em>Walk In Closets</em></h5>
									<hr/>	

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 1</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 2</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 3</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 4</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 5</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 6</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel2">Other Rooms</a>
								</p>
								<div class="content" data-slug="panel2">

									

									<h5 class="subheader"><em>Other Rooms</em></h5>
									<hr/>	

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Room 1</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Room 2</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Room 3</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Room 3</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>
							<section class="section">
								<p class="title">
									<a href="#panel2">Interior Features</a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Window Type</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Skylight</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Flooring</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

									</div>
								</div>
							</section>
							<section class="section">
								<p class="title">
									<a href="#panel3">Appliances</a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Refrigerator</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Oven</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Microwave</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Washer</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Dryer</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Dishwasher</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Disposal</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
								</div>
							</section>

						</div>
					</div>
				</div>

				<h4 class="subheader tenMarginTop">Exterior Details</h4>
				<div class="row">
					<div class="large-12 columns">
						<div class="section-container accordion" data-section="accordion">

							<section class="section">
								<p class="title">
									<a href="#panel3">Lot Features</a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Lot Size</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Lot Dimensions</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Lot Features</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Deck</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Patio</dt>
												<dd class="ddDes">info</dd>
											</dl>

										</div>	
										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Driveway</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

								</div>
							</section>
							<section class="section">
								<p class="title">
									<a href="#panel3">Garage and Parking</a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Parking Type</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Garage Type</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Number of Garages</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Number of Parking Spaces</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

								</div>
							</section>

							<section class="section">
								<p class="title">
									<a href="#panel3">Building and Construction</a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Architecture</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Type of House</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Exterior Building Type</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Levels or Stories</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Roof Type</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

								</div>
							</section>
							<section class="section">
								<p class="title">
									<a href="#panel3">Utilities</a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Electricity</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Cooling Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Heating Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Number of Fireplaces</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Fireplace Location</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Water</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Sewer</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Features</dt>
												<dd class="ddDes">info</dd>
											</dl>
										</div>
									</div>


								</div>
							</section>
						</div>
					</div>
				</div>
				
				<br/>


				<h4 class="subheader tenMarginTop" title="Property Information Provided by County Assessor and Recorder Offices. May Not Reflect Recent Additions or Improvements.">School</h4>
				<hr/>

				<section class="section">
					<div class="content" data-slug="panel3">
						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">Elementary</dt>
							<dd class="ddDes">info</dd>
						</dl>

						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">High</dt>
							<dd class="ddDes">info</dd>
						</dl>

						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">Junion Hign</dt>
							<dd class="ddDes">info</dd>
						</dl>
					</div>

				</section>
				<br/>
				<h4 class="subheader tenMarginTop" title="Property Information Provided by County Assessor and Recorder Offices. May Not Reflect Recent Additions or Improvements.">Property Information</h4>
				<hr/>

				<section class="section">
					<div class="content" data-slug="panel3">

						<div class="row">
							<div class="large-6 columns">
								<dl class="dlInlineDescription light radius">
									<dt class="dtDes">Township</dt>
									<dd class="ddDes">info</dd>
								</dl>

							</div>

							<div class="large-6 columns">
								<dl class="dlInlineDescription light radius">
									<dt class="dtDes">City</dt>
									<dd class="ddDes">info</dd>
								</dl>
							</div>
						</div>

						<div class="row">
							<div class="large-6 columns">
								<dl class="dlInlineDescription light radius">
									<dt class="dtDes">State</dt>
									<dd class="ddDes">info</dd>
								</dl>

							</div>

							<div class="large-6 columns">
								<dl class="dlInlineDescription light radius">
									<dt class="dtDes">County</dt>
									<dd class="ddDes">info</dd>
								</dl>
							</div>
						</div>

						<div class="row">
							<div class="large-6 columns">
								<dl class="dlInlineDescription light radius">
									<dt class="dtDes">Area</dt>
									<dd class="ddDes">info</dd>
								</dl>

							</div>

							<div class="large-6 columns">
								<dl class="dlInlineDescription light radius">
									<dt class="dtDes">Directions</dt>
									<dd class="ddDes">info</dd>
								</dl>
							</div>
						</div>

						<div class="row">
							<div class="large-6 columns">
								<dl class="dlInlineDescription light radius">
									<dt class="dtDes">APN Number</dt>
									<dd class="ddDes">info</dd>
								</dl>
							</div>
						</div>
					</section>
					<br/>
					<h4 class="subheader tenMarginTop" title="Property Information Provided by County Assessor and Recorder Offices. May Not Reflect Recent Additions or Improvements.">Public Records</h4>
					<hr/>
					<div class="row">
						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Beds</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Baths</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">House Size</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Lot Size</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Year Built</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Price</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Property Type</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Stories</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Style</dt>
								<dd class="ddDes">info</dd>
							</dl>
						</div>


						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Units</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Cooling</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Pool</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Construction</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Heating</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Year Renovated</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Rooms</dt>
								<dd class="ddDes">info</dd>
							</dl>


							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Roofing</dt>
								<dd class="ddDes">info</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Fireplace</dt>
								<dd class="ddDes">info</dd>
							</dl></div>
						</div>



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
							<li class="clearing-featured-img"><a class="th" href="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}">
								<img width="100px" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a>
							</li>
							@endfor
						</ul>	
						@endif
					</div>
				</div>

			</div>
		</div>
		@stop


