@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">
			
			<div class="large-7 columns left">
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
				{{link_to_route('all-rent-listings', 'Rental', array('class'=>'alert-box secondary round alertRentalStyle'));}}
			</div>

			<div class="large-3 columns">
				<a class="priceStyle right ">${{number_format($rental->price)}}/Month
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
				
				<h6 class="alert-box secondary radius propStat">{{$rental->rentcurrentstatus->currentstatus}}</h6>
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
							@if(isset($rental->listing))
							<strong>MLS: #</strong> {{$rental->listing}}<br></br>
							@endif

							@if(isset($rental->rentalinfo->leaseterms))
							<strong>Lease Terms: </strong>{{$rental->rentalinfo->leaseterms}}<br/><br/>

							@endif
							@if(isset($rental->rentalinfo->monthlyrentinclude))
							<strong>Monthly Rent Include: </strong>{{$rental->rentalinfo->monthlyrentinclude}}<br/><br/>

							@endif
							@if(isset($rental->rentalinfo->petinfo))
							<strong>Pet Info: </strong>{{$rental->rentalinfo->petinfo}}<br/><br/>
							@endif

						</div>				


						<div class="large-4 offset-1 columns panel secondary panelShortInfo ">

							@if(isset($rental->bedrooms))
							<strong>Bedrooms:</strong> {{$rental->bedrooms}} <br></br>
							@endif

							@if(isset($rental->bathrooms))
							<strong>Bathrooms:</strong> {{$rental->bathrooms}} <br></br>
							@endif

							@if(isset($rental->size))
							<strong>House Size:</strong> {{$rental->size}} <br></br>
							@endif

							@if($rental->year)
							<strong>Year Built:</strong> {{$rental->year}} <br/><br/>
							@endif
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


			</div>
			<!-- =listingDetails ends here -->
		</div>

		<h4 class="subheader tenMarginTop">Interior Details</h4>
		<div class="row">
			<div class="large-12 columns">
				<div class="section-container accordion" data-section="accordion">

					@if(isset($house->salefamroom))
					<section class="section active">
						<p class="title">
							<a class="aAccordion" href="#panel1"><span class="spanAccordion">Bedrooms</span></a>
						</p>
						<div class="content" data-slug="panel1">
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription radius">
										@if(isset($house->rentbedroom->masterbedsize))
										<dt class="dtDes">Master Bedroom <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->masterbedsize}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->maseterbedfeatures))
										<dt class="dtDes">Master Bedroom <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->maseterbedfeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed2size))
										<dt class="dtDes">Bedroom 2 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed2size}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed2features))
										<dt class="dtDes">Bedroom 2 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed2features}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed3size))
										<dt class="dtDes">Bedroom 3 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed3size}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed3features))
										<dt class="dtDes">Bedroom 3 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed3features}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed4size))
										<dt class="dtDes">Bedroom 4 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed4size}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed4features))
										<dt class="dtDes">Bedroom 4 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed4features}}</dd>
										@endif
									</dl>
								</div>
							</div>


							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed5size))
										<dt class="dtDes">Bedroom 5 Size</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed5size}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbedroom->bed5features))
										<dt class="dtDes">Bedroom 5 Features</dt>
										<dd class="ddDes">{{$rental->rentbedroom->bed5features}}</dd>
										@endif
									</dl>
								</div>
							</div>


						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Bathrooms</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="row">
									<div class="large-5 columns">
										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentbathroom->fullbath))
											<dt class="dtDes">Full Bathrooms</dt>
											<dd class="ddDes">{{$rental->rentbathroom->fullbath}}</dd>
											@endif
										</dl>
									</div>


									<div class="large-7 columns">
										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentbathroom->halfbath))
											<dt class="dtDes">Half Bathrooms</dt>
											<dd class="ddDes">{{$rental->rentbathroom->halfbath}}</dd>
											@endif
										</dl>
									</div>
								</div>

								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbathroom->masterbathsize))
										<dt class="dtDes">Master Bath <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentbathroom->masterbathsize}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbathroom->bathamenities))
										<dt class="dtDes">Master Bath <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentbathroom->bathamenities}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Kitchen</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentkitchen->kitchensize))
										<dt class="dtDes">Kitchen Size</dt>
										<dd class="ddDes">{{$rental->rentkitchen->kitchensize}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentkitchen->kitchenfeatures))
										<dt class="dtDes">Kitchen Features</dt>
										<dd class="ddDes">{{$rental->rentkitchen->kitchenfeatures}}</dd>
										@endif
									</dl>
								</div>

							</div>
						</div>

					</section>

					@endif
					@if(isset($house->salefamroom))

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Dining Area</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentdiningroom->diningroomsize))
										<dt class="dtDes">Dining Room Size</dt>
										<dd class="ddDes">{{$rental->rentdiningroom->diningroomsize}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentdiningroom->diningroomfeatures))
										<dt class="dtDes">Dining Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentdiningroom->diningroomfeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Living Room</span></a>
						</p>
						<div class="content" data-slug="panel2">


							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription">
										@if(isset($house->rentlivingroom->livroomsize))
										<dt class="dtDes">Living Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livroomsize}}</dd>
										@endif
									</dl>
								</div>
								<div class="large-7 columns">
									<dl class="dlInlineDescription">
										@if(isset($house->rentlivingroom->livroomfeatures))
										<dt class="dtDes">Living Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livroomfeatures}}</dd>
										@endif
									</dl>
								</div>

							</div>
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlivingroom->livdiningcombosize))
										<dt class="dtDes">Living Dining Combo <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livdiningcombosize}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlivingroom->livdiningcombofeatures))
										<dt class="dtDes">Living Dining Combo <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentlivingroom->livdiningcombofeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>

					</section>

					@endif
					@if(isset($house->salefamroom))

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Family Room</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentfamroom->famroomsize))
										<dt class="dtDes">Family Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentfamroom->famroomsize}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentfamroom->famroomfeatures))
										<dt class="dtDes">Family Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentfamroom->famroomfeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Laundry Room</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlaundryroom->laundryroomsize))
										<dt class="dtDes">Laundry Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentlaundryroom->laundryroomsize}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlaundryroom->laundryroomfeatures))
										<dt class="dtDes">Laundry Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentlaundryroom->laundryroomfeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Exercise Room</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentexerciseroom->size))
										<dt class="dtDes">Exercise Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentexerciseroom->size}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentexerciseroom->features))
										<dt class="dtDes">Exercise Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentexerciseroom->features}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Basement</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbasement->basementsize))
										<dt class="dtDes">Basement Size</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementsize}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbasement->basementfeatures))
										<dt class="dtDes">Basement Features</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementfeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbasement->basementbathroom))
										<dt class="dtDes">Basement Bath</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementbathroom}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbasement->basementbathsize))
										<dt class="dtDes">Basement Bath Size</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementbathsize}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbasement->basementbathfeatures))
										<dt class="dtDes">Basement Bath Features</dt>
										<dd class="ddDes">{{$rental->rentbasement->basementbathfeatures}}</dd>
										@endif
									</dl>

								</div>

								
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))

					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Utility Room </span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentutilityroom->utilroomsize))
										<dt class="dtDes">Utility Room <br/> Size</dt>
										<dd class="ddDes">{{$rental->rentutilityroom->utilroomsize}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentutilityroom->utilroomfeatures))
										<dt class="dtDes">Utility Room <br/> Features</dt>
										<dd class="ddDes">{{$rental->rentutilityroom->utilroomfeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
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
										@if(isset($house->rentwalkincloset->closet1))
										<dt class="dtDes">Walk In Closet 1</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet1}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentwalkincloset->closet2))
										<dt class="dtDes">Walk In Closet 2</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet2}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentwalkincloset->closet3))
										<dt class="dtDes">Walk In Closet 3</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet3}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentwalkincloset->closet4))
										<dt class="dtDes">Walk In Closet 4</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet4}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentwalkincloset->closet5))
										<dt class="dtDes">Walk In Closet 5</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet5}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentwalkincloset->closet6))
										<dt class="dtDes">Walk In Closet 6</dt>
										<dd class="ddDes">{{$rental->rentwalkincloset->closet6}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
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
										@if(isset($house->rentotherroom->room1))
										<dt class="dtDes">Additional Room 1</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room1}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentotherroom->room2))
										<dt class="dtDes">Additional Room 2</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room2}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentotherroom->room3))
										<dt class="dtDes">Additional Room 3</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room3}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentotherroom->room4))
										<dt class="dtDes">Additional Room 3</dt>
										<dd class="ddDes">{{$rental->rentotherroom->room4}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
					<section class="section">
						<p class="title">
							<a href="#panel2"><span class="spanAccordion">Interior Features</span></a>
						</p>
						<div class="content" data-slug="panel2">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentinteriorfeature->windowtype))
										<dt class="dtDes">Window Type</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->windowtype}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentinteriorfeature->windowtritment))
										<dt class="dtDes">Skylight</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->windowtritment}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentinteriorfeature->skylight))
										<dt class="dtDes">Flooring</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->skylight}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentinteriorfeature->flooring))
										<dt class="dtDes">Flooring</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->flooring}}</dd>
										@endif
									</dl>
								</div>
							</div>
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentinteriorfeature->storage))
										<dt class="dtDes">Storage</dt>
										<dd class="ddDes">{{$rental->rentinteriorfeature->storage}}</dd>
										@endif
									</dl>
								</div>

								
							</div>
						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Appliances</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentappliance->refrigerator))
										<dt class="dtDes">Refrigerator</dt>
										<dd class="ddDes">{{$rental->rentappliance->refrigerator}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentappliance->oven))
										<dt class="dtDes">Oven</dt>
										<dd class="ddDes">{{$rental->rentappliance->oven}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentappliance->microwave))
										<dt class="dtDes">Microwave</dt>
										<dd class="ddDes">{{$rental->rentappliance->microwave}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentappliance->washer))
										<dt class="dtDes">Washer</dt>
										<dd class="ddDes">{{$rental->rentappliance->washer}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentappliance->dryer))
										<dt class="dtDes">Dryer</dt>
										<dd class="ddDes">{{$rental->rentappliance->dryer}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentappliance->dishwasher))
										<dt class="dtDes">Dishwasher</dt>
										<dd class="ddDes">{{$rental->rentappliance->dishwasher}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentappliance->disposal))
										<dt class="dtDes">Disposal</dt>
										<dd class="ddDes">{{$rental->rentappliance->disposal}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>

					@endif

				</div>
			</div>
		</div>
		<!-- =Interior Details end here-->

		<h4 class="subheader tenMarginTop">Exterior Details</h4>
		<div class="row">
			<div class="large-12 columns">
				<div class="section-container accordion" data-section="accordion">

					@if(isset($house->salefamroom))
					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Lot Features</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlotfeature->lotsize))
										<dt class="dtDes">Lot Size</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->lotsize}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlotfeature->lotdimensions))
										<dt class="dtDes">Lot Dimensions</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->lotdimensions}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlotfeature->lotfeatures))
										<dt class="dtDes">Lot Features</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->lotfeatures}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlotfeature->deck))
										<dt class="dtDes">Deck</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->deck}}</dd>
										@endif
									</dl>
								</div>
							</div>
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlotfeature->patio))
										<dt class="dtDes">Patio</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->patio}}</dd>
										@endif
									</dl>

								</div>	
								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlotfeature->driveway))
										<dt class="dtDes">Driveway</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->driveway}}</dd>
										@endif
									</dl>
								</div>
							</div>
							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentlotfeature->swimmingpool))
										<dt class="dtDes">Swimming Pool</dt>
										<dd class="ddDes">{{$rental->rentlotfeature->swimmingpool}}</dd>
										@endif
									</dl>
								</div>
							</div>

						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))
					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Garage and Parking</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentgarageandparking->numberofparking))
										<dt class="dtDes">Number of Parking Spaces</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->numberofparking}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentgarageandparking->parkingtype))
										<dt class="dtDes">Parking Type</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->parkingtype}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentgarageandparking->numberofgarage))
										<dt class="dtDes">Number of Garages</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->numberofgarage}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentgarageandparking->garagetype))
										<dt class="dtDes">Garage Type</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->garagetype}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentgarageandparking->garagefeatures))
										<dt class="dtDes">Garage Features</dt>
										<dd class="ddDes">{{$rental->rentgarageandparking->garagefeatures}}</dd>
										@endif
									</dl>
								</div>

							</div>

						</div>
					</section>

					@endif
					@if(isset($house->salefamroom))

					<section class="section">
						<p class="title">
							<a href="#panel3"><span class="spanAccordion">Building and Construction</span></a>
						</p>
						<div class="content" data-slug="panel3">

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->architecture))
										<dt class="dtDes">Architecture</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->architecture}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->typeofhouse))
										<dt class="dtDes">Type of House</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->typeofhouse}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->levelsorstories))
										<dt class="dtDes">Levels or Stories</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->levelsorstories}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->unitfloorlevel))
										<dt class="dtDes">Unit Floor Level</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->unitfloorlevel}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->exteriorbuildingtype))
										<dt class="dtDes">Exterior Building Type</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->exteriorbuildingtype}}</dd>
										@endif
									</dl>
								</div>

								<div class="large-7 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->rooftype))
										<dt class="dtDes">Roof Type</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->rooftype}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-5 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->foundation))
										<dt class="dtDes">Foundation</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->foundation}}</dd>
										@endif
									</dl>
								</div>
								<div class="large-7 columns">

									<dl class="dlInlineDescription light radius">
										@if(isset($house->rentbuildingconstruction->additionalfeatures))
										<dt class="dtDes">Additional Features</dt>
										<dd class="ddDes">{{$rental->rentbuildingconstruction->additionalfeatures}}</dd>
										@endif
									</dl>
								</div>
							</div>


						</section>

						@endif
						@if(isset($house->salefamroom))
						<section class="section">
							<p class="title">
								<a href="#panel3"><span class="spanAccordion">Utilities</span></a>
							</p>
							<div class="content" data-slug="panel3">

								<div class="row">
									<div class="large-5 columns">
										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->electricity))
											<dt class="dtDes">Electricity</dt>
											<dd class="ddDes">{{$rental->rentutility->electricity}}</dd>
											@endif
										</dl>
									</div>

									<div class="large-7 columns">

										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->coolingfeatures))
											<dt class="dtDes">Cooling Features</dt>
											<dd class="ddDes">{{$rental->rentutility->coolingfeatures}}</dd>
											@endif
										</dl>
									</div>
								</div>

								<div class="row">
									<div class="large-5 columns">
										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->heatingfeatures))
											<dt class="dtDes">Heating Features</dt>
											<dd class="ddDes">{{$rental->rentutility->heatingfeatures}}</dd>
											@endif
										</dl>
									</div>

									<div class="large-7 columns">

										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->numberoffireplaces))
											<dt class="dtDes">Number of Fireplaces</dt>
											<dd class="ddDes">{{$rental->rentutility->numberoffireplaces}}</dd>
											@endif
										</dl>
									</div>
								</div>

								<div class="row">
									<div class="large-5 columns">
										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->fireplacelocation))
											<dt class="dtDes">Fireplace Location</dt>
											<dd class="ddDes">{{$rental->rentutility->fireplacelocation}}</dd>
											@endif
										</dl>
									</div>

									<div class="large-7 columns">

										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->water))
											<dt class="dtDes">Water</dt>
											<dd class="ddDes">{{$rental->rentutility->water}}</dd>
											@endif
										</dl>
									</div>
								</div>

								<div class="row">
									<div class="large-5 columns">
										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->sewer))
											<dt class="dtDes">Sewer</dt>
											<dd class="ddDes">{{$rental->rentutility->sewer}}</dd>
											@endif
										</dl>
									</div>

									<div class="large-7 columns">

										<dl class="dlInlineDescription light radius">
											@if(isset($house->rentutility->additionalfeatures))
											<dt class="dtDes">Additional Features</dt>
											<dd class="ddDes">{{$rental->rentutility->additionalfeatures}}</dd>
											@endif
										</dl>
									</div>
								</div>



							</div>
						</section>

						@endif
					</div>
				</div>
			</div>
			<!-- =Exterior Details end here -->
			<br/>


			<h4 class="subheader tenMarginTop" title="Property Information Provided by County Assessor and Recorder Offices. May Not Reflect Recent Additions or Improvements.">School</h4>
			<hr/>


			@if(isset($house->salefamroom))
			<section class="section">
				<div class="content" data-slug="panel3">
					<div class="row">
						<div class="large-7 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentschool->elementary))
								<dt class="dtDes">Elementary</dt>
								<dd class="ddDes">{{$rental->rentschool->elementary}}</dd>
								@endif
							</dl>

						</div>

						<div class="large-4 large-offset-1 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentschool->elemschdistrict))
								<dt class="dtDes">District</dt>
								<dd class="ddDes">{{$rental->rentschool->elemschdistrict}}</dd>
								@endif
							</dl>
						</div>
					</div>

					<div class="row">
						<div class="large-7 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentschool->high))
								<dt class="dtDes">Junion Hign</dt>
								<dd class="ddDes">{{$rental->rentschool->high}}</dd>
								@endif
							</dl>

						</div>

						<div class="large-4 large-offset-1 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->entschool->highschdistrict))
								<dt class="dtDes">District</dt>
								<dd class="ddDes">{{$rental->rentschool->highschdistrict}}</dd>
								@endif
							</dl>
						</div>
					</div>

					<div class="row">
						<div class="large-7 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentschool->juniorhigh))
								<dt class="dtDes">High</dt>
								<dd class="ddDes">{{$rental->rentschool->juniorhigh}}</dd>
								@endif
							</dl>

						</div>

						<div class="large-4 large-offset-1 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentschool->jrhighdistrict))
								<dt class="dtDes">District</dt>
								<dd class="ddDes">{{$rental->rentschool->jrhighdistrict}}</dd>
								@endif
							</dl>
						</div>
					</div>
				</div>

			</section>

			@endif
			<br/>
			<h4 class="subheader tenMarginTop" title="Property Information Provided by County Assessor and Recorder Offices. May Not Reflect Recent Additions or Improvements.">Property Information</h4>
			<hr/>

			@if(isset($house->salefamroom))
			<section class="section">
				<div class="content" data-slug="panel3">

					<div class="row">
						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->township))
								<dt class="dtDes">Township</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->township}}</dd>
								@endif
							</dl>

						</div>

						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->city))
								<dt class="dtDes">City</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->city}}</dd>
								@endif
							</dl>
						</div>
					</div>

					<div class="row">
						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->state))
								<dt class="dtDes">State</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->state}}</dd>
								@endif
							</dl>

						</div>

						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->county))
								<dt class="dtDes">County</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->county}}</dd>
								@endif
							</dl>
						</div>
					</div>

					<div class="row">
						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->area))
								<dt class="dtDes">Area</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->area}}</dd>
								@endif
							</dl>

						</div>

						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->directions))
								<dt class="dtDes">Directions</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->directions}}</dd>
								@endif
							</dl>
						</div>
					</div>

					<div class="row">
						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->apnnumber))
								<dt class="dtDes">APN Number</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->apnnumber}}</dd>
								@endif
							</dl>
						</div>
						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->rentpropertyinfo->otherinfo))
								<dt class="dtDes">Other Info</dt>
								<dd class="ddDes">{{$rental->rentpropertyinfo->otherinfo}}</dd>
								@endif
							</dl>
						</div>
					</div>
				</div>
			</section>

			@endif
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

			@if($rental->rentalimage->maxid)
			<div class="row">
				<div class="large-6 columns">
					<ul class="clearing-thumbs" data-clearing>
						@for ($i =1; $i <= $rental->rentalimage->maxid; $i++)
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




				<!-- =receivePriceChangeButtonWrapper ends here -->

			</div>
		</div>

		@stop


