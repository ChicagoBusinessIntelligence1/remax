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

		<!-- =callAgentRent ends here -->
		<hr/>

		<div class="row">
			<div class="large-9 columns">
				<h2 class="oneHouseAddress">{{$rental->address}}</h2>
				&nbsp &nbsp
			</div>
			<div class="large-3 columns">
				
				<h6 class="alert-box secondary radius propStat">status</h6>
			</div>
		</div>
		
		<div class="row">
			<div class="large-6 columns">
				<h3 class="subheader propType"><em>{{$rental->rentpropertytype->rentaltype}}</em> </h3>
			</div>
		</div>
		<hr/>

		<div class="row">	
			<div class="large-12 columns listingDetails">	
				<div class="shortPropDet">
					<div class="row noMargin">
						<div class="large-5 column panel secondary panelShortInfo ">
							<strong>MLS: #</strong> {{$rental->listing}}<br></br>
							<strong>Lease Terms: </strong>{{$rental->rentalinfo->leaseterms}}<br/><br/>
							<strong>Monthly Rent Include: </strong> <br/><br/>{{$rental->rentalinfo->monthlyrentinclude}}<br/><br/>
						</div>				


						<div class="large-4 offset-1 columns panel secondary panelShortInfo ">
							<strong>Bedrooms:</strong> {{$rental->bedrooms}} <br></br>
							<strong>Bathrooms:</strong> {{$rental->bathrooms}} <br></br>
							<strong>House Size:</strong> {{$rental->size}} <br></br>

							@if($rental->year)
							<strong>Year Built:</strong> {{(new DateTime($rental->year))->format("Y")}} 
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<h4 class="subheader tenMarginTop">Description</h4>
						<hr/>
						<div>
							<p>{{ucfirst(strtolower($rental->details))}}</p>
						</div>
					</div>
				</div>
				@endif


			</div>
			<!--  =listingDetails ends here-->
		</div>

		<h4 class="subheader tenMarginTop">Interior Details</h4>
		<div class="row">
			<div class="large-12 columns">
				<div class="section-container accordion" data-section="accordion">
					<section class="section active">
						<p class="title">
							<a class="aAccordion" href="#panel1"><span class="spanAccordion">Bedrooms</span></a>
						</p>
						<div class="content" data-slug="panel1">
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription radius">
										<dt class="dtDes">Master Bedroom <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->masterbedsize}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Master Bedroom <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->maseterbedfeatures}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 2 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed2size}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 2 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed2features}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 3 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed3size}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 3 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed3features}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 4 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed4size}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 4 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed4features}}</dd>
									</dl>
								</div>
							</div>


							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 5 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed5size}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Bedroom 5 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed5features}}</dd>
									</dl>
								</div>
							</div>


						</div>
					</section>
					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Bathrooms</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="row">
									<div class="large-5 columns">
										<dl class="dlInlineDescription light radius">
											<dt class="dtDes">Full Bathrooms</dt>
											<dd class="ddDes">{{$rental->rentbathroom->fullbath}}</dd>
										</dl>
									</div>


									<div class="large-7 columns">
										<dl class="dlInlineDescription light radius">
											<dt class="dtDes">Half Bathrooms</dt>
											<dd class="ddDes">{{$rental->rentbathroom->halfbath}}</dd>
										</dl>
									</div>
								</div>

								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">

										<dt class="dtDes">Master Bath <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentbathroom->masterbathsize}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">

										<dt class="dtDes">Master Bath <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentbathroom->bathamenities}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Kitchen</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Kitchen Size</dt>
										<dd class="ddDes">{{$rental->rentkitchen->kitchensize}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Kitchen Features</dt>
										<dd class="ddDes">{{$rental->rentkitchen->kitchenfeatures}}</dd>
									</dl>
								</div>

							</div>
						</div>

					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Dining Area</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Dining Room Size</dt>
										<dd class="ddDes">{{$rental->rentdiningroom->diningroomsize}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Dining Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentdiningroom->diningroomfeatures}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Living Room</span></a>
						</p>
						<div class="content" data-slug="panel2">


							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription">
										<dt class="dtDes">Living Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livroomsize}}</dd>
									</dl>
								</div>
								<div class="large-7 columns">
									<dl class="dlInlineDescription">
										<dt class="dtDes">Living Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livroomfeatures}}</dd>
									</dl>
								</div>

							</div>
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Living Dining Combo <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livdiningcombosize}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Living Dining Combo <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livdiningcombofeatures}}</dd>
									</dl>
								</div>
							</div>
						</div>

					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Family Room</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Family Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentfamroom->famroomsize}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Family Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentfamroom->famroomfeatures}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Laundry Room</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Laundry Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentlaundryroom->laundryroomsize}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Laundry Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentlaundryroom->laundryroomfeatures}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Exercise Room</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Exercise Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentexerciseroom->size}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Exercise Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentexerciseroom->features}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Basement</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Basement Size</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementsize}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Basement Features</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementfeatures}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Basement Bath</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementbathsize}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Basement Bath <br/>  Features</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementbathfeatures}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Utility Room </span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Utility Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentutilityroom->utilroomsize}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Utility Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentutilityroom->utilroomfeatures}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Walk In Closets</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<h5 class="subheader"><em>Walk In Closets</em></h5>
							<hr/>	

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Walk In Closet 1</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet1}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Walk In Closet 2</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet2}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Walk In Closet 3</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet3}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Walk In Closet 4</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet4}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Walk In Closet 5</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet5}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Walk In Closet 6</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet6}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Other Rooms</span></a>
						</p>
						<div class="content" data-slug="panel2">



							<h5 class="subheader"><em>Other Rooms</em></h5>
							<hr/>	

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Additional Room 1</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room1}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Additional Room 2</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room2}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Additional Room 3</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room3}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Additional Room 3</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room4}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>
					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Interior Features</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Window Type</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->windowtype}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Skylight</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->windowtritment}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Flooring</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->skylight}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Flooring</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->flooring}}</dd>
									</dl>
								</div>
							</div>
						</div>
					</section>
					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Appliances</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Refrigerator</dt>
										<dd class="ddDes">{{$rental->rentappliance->refrigerator}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Oven</dt>
										<dd class="ddDes">{{$rental->rentappliance->oven}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Microwave</dt>
										<dd class="ddDes">{{$rental->rentappliance->microwave}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Washer</dt>
										<dd class="ddDes">{{$rental->rentappliance->washer}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Dryer</dt>
										<dd class="ddDes">{{$rental->rentappliance->dryer}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Dishwasher</dt>
										<dd class="ddDes">{{$rental->rentappliance->dishwasher}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Disposal</dt>
										<dd class="ddDes">{{$rental->rentappliance->disposal}}</dd>
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
							<a href="#panel3"><span class="spanAccordion">Lot Features</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Lot Size</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->lotsize}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Lot Dimensions</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->lotdimensions}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Lot Features</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->lotfeatures}}</dd>
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Deck</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->deck}}</dd>
									</dl>
								</div>
							</div>
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Patio</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->patio}}</dd>
									</dl>

								</div>	
								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Driveway</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->driveway}}</dd>
									</dl>
								</div>
							</div>
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Swimming Pool</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->swimmingpool}}</dd>
									</dl>
								</div>
							</div>

						</div>
					</section>
					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Garage and Parking</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Parking Type</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->numberofparking}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Garage Type</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->parkingtype}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Number of Garages</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->numberofgarage}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Number of Parking Spaces</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->garagetype}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Number of Garages</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->garagefeatures}}</dd>
									</dl>
								</div>

							</div>

						</div>
					</section>

					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Building and Construction</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Architecture</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->architecture}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Type of House</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->typeofhouse}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Exterior Building Type</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->exteriorbuildingtype}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Levels or Stories</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->typedetached}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Roof Type</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->levelsorstories}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Additional Features</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->rooftype}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Roof Type</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->additionalfeatures}}</dd>
									</dl>
								</div>

							</div>

						</div>
					</section>
					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Utilities</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Electricity</dt>
										<dd class="ddDes">{{$rental->rentutility->electricity}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Cooling Features</dt>
										<dd class="ddDes">{{$rental->rentutility->coolingfeatures}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Heating Features</dt>
										<dd class="ddDes">{{$rental->rentutility->heatingfeatures}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Number of Fireplaces</dt>
										<dd class="ddDes">{{$rental->rentutility->numberoffireplaces}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Fireplace Location</dt>
										<dd class="ddDes">{{$rental->rentutility->fireplacelocation}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Water</dt>
										<dd class="ddDes">{{$rental->rentutility->fireplacedetails}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Sewer</dt>
										<dd class="ddDes">{{$rental->rentutility->water}}</dd>
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Additional Features</dt>
										<dd class="ddDes">{{$rental->rentutility->sewer}}</dd>
									</dl>
								</div>
							</div>


							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Sewer</dt>
										<dd class="ddDes">{{$rental->rentutility->additionalfeatures}}</dd>
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
					<dd class="ddDes">{{$rental->rentschool->elementary}}</dd>
				</dl>

				<dl class="dlInlineDescription light radius">
					<dt class="dtDes">High</dt>
					<dd class="ddDes">{{$rental->rentschool->elemschdistrict}}</dd>
				</dl>

				<dl class="dlInlineDescription light radius">
					<dt class="dtDes">Junion Hign</dt>
					<dd class="ddDes">{{$rental->rentschool->high}}</dd>
				</dl>
				<dl class="dlInlineDescription light radius">
					<dt class="dtDes">Elementary</dt>
					<dd class="ddDes">{{$rental->rentschool->highschdistrict}}</dd>
				</dl>

				<dl class="dlInlineDescription light radius">
					<dt class="dtDes">High</dt>
					<dd class="ddDes">{{$rental->rentschool->juniorhigh}}</dd>
				</dl>

				<dl class="dlInlineDescription light radius">
					<dt class="dtDes">Junion Hign</dt>
					<dd class="ddDes">{{$rental->rentschool->jrhighdistrict}}</dd>
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
							<dd class="ddDes">{{$rental->rentpropertyinfo->rentpropertyinfo}}</dd>
						</dl>

					</div>

					<div class="large-6 columns">
						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">City</dt>
							<dd class="ddDes">{{$rental->rentpropertyinfo->city}}</dd>
						</dl>
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">State</dt>
							<dd class="ddDes">{{$rental->rentpropertyinfo->county}}</dd>
						</dl>

					</div>

					<div class="large-6 columns">
						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">County</dt>
							<dd class="ddDes">{{$rental->rentpropertyinfo->area}}</dd>
						</dl>
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">Area</dt>
							<dd class="ddDes">{{$rental->rentpropertyinfo->directions}}</dd>
						</dl>

					</div>

					<div class="large-6 columns">
						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">Directions</dt>
							<dd class="ddDes">{{$rental->rentpropertyinfo->apnnumber}}</dd>
						</dl>
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						<dl class="dlInlineDescription light radius">
							<dt class="dtDes">APN Number</dt>
							<dd class="ddDes">{{$rental->rentpropertyinfo->otherinfo}}</dd>
						</dl>
					</div>
				</div>
			</section>
			<br/>


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


