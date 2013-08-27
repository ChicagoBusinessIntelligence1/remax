@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">
			<div class="large-5 columns left">
				@if(isset($house->agent))
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
			@if(isset($house->price))
			<div class="large-2 columns">
				<a class="priceStyle tenMarginTop right">${{number_format($house->price)}}
				</a>
			</div>
			@endif 
		</div>
		<!-- =callAgentRent ends here -->
		<hr/>

		<div class="row">
			@if(isset($house->address))
			<div class="large-9 columns">
				<h2 class="oneHouseAddress">{{$house->address}}</h2>
				&nbsp &nbsp
			</div>
			@endif
			@if(isset($house->status))
			<div class="large-3 columns">
				
				<h6 class="alert-box secondary radius propStat">{{$house->status->dbstatus}}</h6>
			</div>
			@endif

		</div>

		<div class="row">
			@if(isset($house->propertytype))
			<div class="large-4 columns">
				<h3 class="subheader propType"><em>{{$house->propertytype->type}}</em> </h3>
			</div>
			@endif
		</div>
		<hr/>

		<div class="row">
			<div class="large-12 columns listingDetails">

				<div class="shortPropDet">
					<div class="row noMargin">

						<div class="large-4 column panel secondary panelShortInfo ">
							@if(isset($house->mls))
							<strong>MLS: #</strong> {{$house->mls}}<br/><br/>
							@endif
							@if(isset($house->pricesqft))
							<strong>Price/sqft: </strong> {{$house->pricesqft}} <br/><br/>
							@endif
						</div>


						<div class="large-4 offset-1 columns panel secondary panelShortInfo ">
							@if(isset($house->bedrooms))
							<strong>Bedrooms:</strong> {{$house->bedrooms}} <br/><br/>
							@endif
							@if(isset($house->bathrooms))
							<strong>Full Bathrooms:</strong> {{$house->bathrooms}} <br/><br/>
							@endif
							@if(isset($house->size))
							<strong>House Size:</strong> {{$house->size}} Sq Ft <br/><br/>
							@endif
							@if(isset($house->saleexteriorfeature->lotsize))
							<strong>Lot Size: </strong>{{$house->saleexteriorfeature->lotsize}}<br/><br/>
							@endif
							@if(isset($house->year))
							<strong>Year Built:</strong> {{$house->year}} <br/><br/>
							@endif
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
									<a class="aAccordion" href="#panel1"><span class="spanAccordion">Bedrooms</span></a>
								</p>
								<div class="content" data-slug="panel1">
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription radius">
												@if(isset($house->salebedroom->masterbedsize))
												<dt class="dtDes">Master Bedroom <br/> Size</dt>
												<dd class="ddDes">{{$house->salebedroom->masterbedsize}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->maseterbedfeatures))
												<dt class="dtDes">Master Bedroom <br/> Features</dt>
												<dd class="ddDes">{{$house->salebedroom->maseterbedfeatures}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed2size))
												<dt class="dtDes">Bedroom 2 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed2size}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed2features))
												<dt class="dtDes">Bedroom 2 Features</dt>
												@endif
												<dd class="ddDes">{{$house->salebedroom->bed2features}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed3size))
												<dt class="dtDes">Bedroom 3 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed3size}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed3features))
												<dt class="dtDes">Bedroom 3 Features</dt>
												<dd class="ddDes">{{$house->salebedroom->bed3features}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed4size))
												<dt class="dtDes">Bedroom 4 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed4size}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed4features))
												<dt class="dtDes">Bedroom 4 Features</dt>
												<dd class="ddDes">{{$house->salebedroom->bed4features}}</dd>
												@endif
											</dl>
										</div>
									</div>


									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed5size))
												<dt class="dtDes">Bedroom 5 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed5size}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebedroom->bed5features))
												<dt class="dtDes">Bedroom 5 Features</dt>
												<dd class="ddDes">{{$house->salebedroom->bed5features}}</dd>
												@endif
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
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebathroom->fullbath))
												<dt class="dtDes">Full Bathrooms</dt>
												<dd class="ddDes">{{$house->salebathroom->fullbath}}</dd>
												@endif
											</dl>
										</div>


										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebathroom->halfbath))
												<dt class="dtDes">Half Bathrooms</dt>
												<dd class="ddDes">{{$house->salebathroom->halfbath}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">

												@if(isset($house->salebathroom->masterbathsize))
												<dt class="dtDes">Master Bath <br/> Size</dt>
												<dd class="ddDes">{{$house->salebathroom->masterbathsize}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">

												@if(isset($house->salebathroom->masterbathfeatures))
												<dt class="dtDes">Master Bath <br/> Features</dt>
												<dd class="ddDes">{{$house->salebathroom->masterbathfeatures}}</dd>
												@endif
											</dl>
										</div>
									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">

												@if(isset($house->salebathroom->bathamenities))
												<dt class="dtDes">Bath Amenities</dt>
												<dd class="ddDes">{{$house->salebathroom->bathamenities}}</dd>
												@endif
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
												@if(isset($house->salekitchen->kitchensize))
												<dt class="dtDes">Kitchen Size</dt>
												<dd class="ddDes">{{$house->salekitchen->kitchensize}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salekitchen->kitchenfeatures))
												<dt class="dtDes">Kitchen Features</dt>
												<dd class="ddDes">{{$house->salekitchen->kitchenfeatures}}</dd>
												@endif
											</dl>
										</div>

									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salekitchen->eatingarea))
												<dt class="dtDes">Eating Area</dt>
												<dd class="ddDes">{{$house->salekitchen->eatingarea}}</dd>
												@endif
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
												@if(isset($house->salediningroom->diningroomsize))
												<dt class="dtDes">Dining Room Size</dt>
												<dd class="ddDes">{{$house->salediningroom->diningroomsize}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salediningroom->diningroomfeatures))
												<dt class="dtDes">Dining Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salediningroom->diningroomfeatures}}</dd>
												@endif
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
												@if(isset($house->salelivingroom->livroomsize))
												<dt class="dtDes">Living Room <br/> Size</dt>
												<dd class="ddDes">{{$house->salelivingroom->livroomsize}}</dd>
												@endif
											</dl>
										</div>
										<div class="large-7 columns">
											<dl class="dlInlineDescription">
												@if(isset($house->salelivingroom->livroomfeatures))
												<dt class="dtDes">Living Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salelivingroom->livroomfeatures}}</dd>
												@endif
											</dl>
										</div>

									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salelivingroom->livdiningcombosize))
												<dt class="dtDes">Living Dining Combo <br/> Size</dt>
												<dd class="ddDes">{{$house->salelivingroom->livdiningcombosize}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salelivingroom->livdiningcombofeatures))
												<dt class="dtDes">Living Dining Combo <br/> Features</dt>
												<dd class="ddDes">{{$house->salelivingroom->livdiningcombofeatures}}</dd>
												@endif
											</dl>
										</div>
									</div>
								</div>

							</section>
@if(isset($house->salefamroom))

							<section class="section">
								<p class="title">
									<a href="#panel2"><span class="spanAccordion">Family Room</span></a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salefamroom->famroomsize))
												<dt class="dtDes">Family Room <br/> Size</dt>
												<dd class="ddDes">{{$house->salefamroom->famroomsize}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salefamroom->famroomfeatures))
												<dt class="dtDes">Family Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salefamroom->famroomfeatures}}</dd>
												@endif
											</dl>
										</div>
									</div>
								</div>
							</section>
@endif
							<section class="section">
								<p class="title">
									<a href="#panel2"><span class="spanAccordion">Laundry Room</span></a>
								</p>
								<div class="content" data-slug="panel2">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salelaundryroom->laundryroomsize))
												<dt class="dtDes">Laundry Room <br/> Size</dt>
												<dd class="ddDes">{{$house->salelaundryroom->laundryroomsize}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salelaundryroom->laundryroomfeatures))
												<dt class="dtDes">Laundry Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salelaundryroom->laundryroomfeatures}}</dd>
												@endif
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
												@if(isset($house->saleexerciseroom->size))
												<dt class="dtDes">Exercise Room <br/> Size</dt>
												<dd class="ddDes">{{$house->saleexerciseroom->size}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexerciseroom->Featuress))
												<dt class="dtDes">Exercise Room <br/> Features</dt>
												<dd class="ddDes">{{$house->saleexerciseroom->Featuress}}</dd>
												@endif
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
												@if(isset($house->salebasement->basementsize))
												<dt class="dtDes">Basement Size</dt>
												<dd class="ddDes">{{$house->salebasement->basementsize}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebasement->basementfeatures))
												<dt class="dtDes">Basement Features</dt>
												<dd class="ddDes">{{$house->salebasement->basementfeatures}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebasement->basementbath))
												<dt class="dtDes">Basement Bath</dt>
												<dd class="ddDes">{{$house->salebasement->basementbath}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebasement->basementbathsize))
												<dt class="dtDes">Basement Bath <br/>  Size</dt>
												<dd class="ddDes">{{$house->salebasement->basementbathsize}}</dd>
												@endif
											</dl>
										</div>
									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebasement->basementbathfeatures))
												<dt class="dtDes">Basement Bath</dt>
												<dd class="ddDes">{{$house->salebasement->basementbathfeatures}}</dd>
												@endif
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
												@if(isset($house->saleutilityroom->utilroomsize))
												<dt class="dtDes">Utility Room <br/> Size</dt>
												<dd class="ddDes">{{$house->saleutilityroom->utilroomsize}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutilityroom->utilroomfeatures))
												<dt class="dtDes">Utility Room <br/> Features</dt>
												<dd class="ddDes">{{$house->saleutilityroom->utilroomfeatures}}</dd>
												@endif
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

									<div class="row">
										<div class="large-5 columns">
											@if(isset($house->salewalkincloset->closet1))
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 1</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet1}}</dd>
											</dl>
											@endif

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salewalkincloset->closet2))
												<dt class="dtDes">Walk In Closet 2</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet2}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salewalkincloset->closet3))
												<dt class="dtDes">Walk In Closet 3</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet3}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salewalkincloset->closet4))
												<dt class="dtDes">Walk In Closet 4</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet4}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salewalkincloset->closet5))
												<dt class="dtDes">Walk In Closet 5</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet5}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->salewalkincloset->closet6))
												<dt class="dtDes">Walk In Closet 6</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet6}}</dd>
												@endif
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
												@if(isset($house->saleotherroom->room1))
												<dt class="dtDes">Additional Room 1</dt>
												<dd class="ddDes">{{$house->saleotherroom->room1}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleotherroom->room2))
												<dt class="dtDes">Additional Room 2</dt>
												<dd class="ddDes">{{$house->saleotherroom->room2}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleotherroom->room3))
												<dt class="dtDes">Additional Room 3</dt>
												<dd class="ddDes">{{$house->saleotherroom->room3}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleotherroom->room4))
												<dt class="dtDes">Additional Room 3</dt>
												<dd class="ddDes">{{$house->saleotherroom->room4}}</dd>
												@endif
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
												@if(isset($house->saleinteriorfeature->windowtype))
												<dt class="dtDes">Window Type</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->windowtype}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleinteriorfeature->skylight))
												<dt class="dtDes">Skylight</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->skylight}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleinteriorfeature->flooring))
												<dt class="dtDes">Flooring</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->flooring}}</dd>
												@endif
											</dl>
										</div>
										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleinteriorfeature->attic))
												<dt class="dtDes">Attic</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->attic}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleinteriorfeature->equipment))
												<dt class="dtDes">Equipment</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->equipment}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleinteriorfeature->elevator))
												<dt class="dtDes">Elevator</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->elevator}}</dd>
												@endif
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
												@if(isset($house->saleappliance->refrigerator))
												<dt class="dtDes">Refrigerator</dt>
												<dd class="ddDes">{{$house->saleappliance->refrigerator}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleappliance->oven))
												<dt class="dtDes">Oven</dt>
												<dd class="ddDes">{{$house->saleappliance->oven}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleappliance->microwave))
												<dt class="dtDes">Microwave</dt>
												<dd class="ddDes">{{$house->saleappliance->microwave}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleappliance->washer))
												<dt class="dtDes">Washer</dt>
												@endif
												<dd class="ddDes">{{$house->saleappliance->washer}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleappliance->dryer))
												<dt class="dtDes">Dryer</dt>
												<dd class="ddDes">{{$house->saleappliance->dryer}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleappliance->dishwasher))
												<dt class="dtDes">Dishwasher</dt>
												<dd class="ddDes">{{$house->saleappliance->dishwasher}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleappliance->disposal))
												<dt class="dtDes">Disposal</dt>
												<dd class="ddDes">{{$house->saleappliance->disposal}}</dd>
												@endif
											</dl>
										</div>
										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleappliance->addit))
												<dt class="dtDes">Additional</dt>
												<dd class="ddDes">{{$house->saleappliance->addit}}</dd>
												@endif
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
									<a href="#panel3"><span class="spanAccordion">Home Features</span></a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salehomefeature->access))
												<dt class="dtDes">Accessibility Features</dt>
												<dd class="ddDes">{{$house->salehomefeature->access}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salehomefeature->disab))
												<dt class="dtDes">Chairlift</dt>
												<dd class="ddDes">{{$house->salehomefeature->disab}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salehomefeature->chairlift))
												<dt class="dtDes">Disability Access and/or Equipped</dt>
												<dd class="ddDes">{{$house->salehomefeature->chairlift}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salehomefeature->exit))
												<dt class="dtDes">Exits</dt>
												<dd class="ddDes">{{$house->salehomefeature->exit}}</dd>
												@endif
											</dl>
										</div>
									</div>
									
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salehomefeature->chairlift))
												<dt class="dtDes">Disability Access and/or Equipped</dt>
												<dd class="ddDes">{{$house->salehomefeature->chairlift}}</dd>
												@endif
											</dl>
										</div>
									</div>

								</div>
							</section>


							<section class="section">
								<p class="title">
									<a href="#panel3"><span class="spanAccordion">Exterior Features</span></a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->lotsize))
												<dt class="dtDes">Lot Size</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->lotsize}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->lotdimension))
												<dt class="dtDes">Lot Dimensions</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->lotdimension}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->lotfeature))
												<dt class="dtDes">Lot Features</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->lotfeature}}</dd>
												@endif
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->deck))
												<dt class="dtDes">Deck</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->deck}}</dd>
												@endif
											</dl>
										</div>
									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->patio))
												<dt class="dtDes">Patio</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->patio}}</dd>
												@endif
											</dl>

										</div>	
										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->driveway))
												<dt class="dtDes">Driveway</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->driveway}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->swimmingpool))
												<dt class="dtDes">Swimming Pool</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->swimmingpool}}</dd>
												@endif
											</dl>
										</div>	
										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleexteriorfeature->balcony))
												<dt class="dtDes">Balcony</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->balcony}}</dd>
												@endif
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
												@if(isset($house->salegarageandparking->numberofparking))
												<dt class="dtDes">Parking Type</dt>
												<dd class="ddDes">{{$house->salegarageandparking->numberofparking}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->salegarageandparking->parkingtype))
												<dt class="dtDes">Garage Type</dt>
												<dd class="ddDes">{{$house->salegarageandparking->parkingtype}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salegarageandparking->numberofgarage))
												<dt class="dtDes">Number of Garages</dt>
												<dd class="ddDes">{{$house->salegarageandparking->numberofgarage}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->salegarageandparking->garagetype))
												<dt class="dtDes">Number of Parking Spaces</dt>
												<dd class="ddDes">{{$house->salegarageandparking->garagetype}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salegarageandparking->garagefeatures))
												<dt class="dtDes">Garages Features</dt>
												<dd class="ddDes">{{$house->salegarageandparking->garagefeatures}}</dd>
												@endif
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
												@if(isset($house->salebuildingconstruction->architecture))
												<dt class="dtDes">Architecture</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->architecture}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebuildingconstruction->housestyle))
												<dt class="dtDes">House Style</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->housestyle}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebuildingconstruction->typeofhouse))
												<dt class="dtDes">Type of House</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->typeofhouse}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebuildingconstruction->exteriorbuildingtype))
												<dt class="dtDes"> Exterior Building Type</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->exteriorbuildingtype}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebuildingconstruction->levelsorstories))
												<dt class="dtDes">Levels or Stories</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->levelsorstories}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebuildingconstruction->rooftype))
												<dt class="dtDes">Roof Type</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->rooftype}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebuildingconstruction->foundation))
												<dt class="dtDes">Foundation</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->foundation}}</dd>
												@endif
											</dl>
										</div>
										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->salebuildingconstruction->additionalfeatures))
												<dt class="dtDes">Additional Features</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->additionalfeatures}}</dd>
												@endif
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
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->electricity))
												<dt class="dtDes">Electricity</dt>
												<dd class="ddDes">{{$house->saleutility->electricity}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->coolingfeatures))
												<dt class="dtDes">Cooling Features</dt>
												<dd class="ddDes">{{$house->saleutility->coolingfeatures}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->heatingfeatures))
												<dt class="dtDes">Heating Features</dt>
												<dd class="ddDes">{{$house->saleutility->heatingfeatures}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->numberoffireplaces))
												<dt class="dtDes">Number of Fireplaces</dt>
												<dd class="ddDes">{{$house->saleutility->numberoffireplaces}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->fireplacelocation))
												<dt class="dtDes">Fireplace Location</dt>
												<dd class="ddDes">{{$house->saleutility->fireplacelocation}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->water))
												<dt class="dtDes">Water</dt>
												<dd class="ddDes">{{$house->saleutility->water}}</dd>
												@endif
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->sewer))
												<dt class="dtDes">Sewer</dt>
												<dd class="ddDes">{{$house->saleutility->sewer}}</dd>
												@endif
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleutility->additionalfeaturess))
												<dt class="dtDes">Additional Features</dt>
												<dd class="ddDes">{{$house->saleutility->additionalfeaturess}}</dd>
												@endif
											</dl>
										</div>
									</div>


								</div>
							</section>
							<section class="section">
								<p class="title">
									<a href="#panel3"><span class="spanAccordion">Amenities and Community Features</span></a>
								</p>
								<div class="content" data-slug="panel3">

									<div class="row">
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												@if(isset($house->saleamenity->areaamenities))
												<dt class="dtDes">Area Amenities</dt>
												<dd class="ddDes">{{$house->saleamenity->areaamenities}}</dd>
												@endif
											</dl>
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
							<div class="row">
								<div class="large-8 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->saleschool->elementary))
										<dt class="dtDes">Elementary</dt>
										<dd class="ddDes">{{$house->saleschool->elementary}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-4 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->saleschool->elemschdistrict))
										<dt class="dtDes">District</dt>
										<dd class="ddDes">{{$house->saleschool->elemschdistrict}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-8 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->saleschool->high))
										<dt class="dtDes">Junion Hign</dt>
										<dd class="ddDes">{{$house->saleschool->high}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-4 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->saleschool->highdistrict))
										<dt class="dtDes">District</dt>
										<dd class="ddDes">{{$house->saleschool->highdistrict}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-8 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->saleschool->juniorhigh))
										<dt class="dtDes">High</dt>
										<dd class="ddDes">{{$house->saleschool->juniorhigh}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-4 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->saleschool->jrhighdistrict))
										<dt class="dtDes">District</dt>
										<dd class="ddDes">{{$house->saleschool->jrhighdistrict}}</dd>
										@endif
									</dl>
								</div>
							</div>
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
										@if(isset($house->salepropertyinfo->township))
										<dt class="dtDes">Township</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->township}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->salepropertyinfo->city))
										<dt class="dtDes">City</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->city}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->salepropertyinfo->state))
										<dt class="dtDes">State</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->state}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->salepropertyinfo->county))
										<dt class="dtDes">County</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->county}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->salepropertyinfo->subdivision))
										<dt class="dtDes">Subdivision</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->subdivision}}</dd>
										@endif
									</dl>

								</div>

								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">

										@if(isset($house->salepropertyinfo->area))
										<dt class="dtDes">Area</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->area}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								

								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->salepropertyinfo->directions))
										<dt class="dtDes">Directions</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->directions}}</dd>
										@endif
									</dl>
								</div>
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->salepropertyinfo->apnnumber))
										<dt class="dtDes">APN Number</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->apnnumber}}</dd>
										@endif
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										@if(isset($house->salepropertyinfo->otherinfo))
										<dt class="dtDes">Other Info</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->otherinfo}}</dd>
										@endif
									</dl>
								</div>
							</div>
						</div>
					</section>
					<br/>
					<h4 class="subheader tenMarginTop" title="Property Information Provided by County Assessor and Recorder Offices. May Not Reflect Recent Additions or Improvements.">Public Records</h4>
					<hr/>
					<div class="row">
						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->beds))
								<dt class="dtDes">Beds</dt>
								<dd class="ddDes">{{$house->salepublicrecord->beds}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->baths))
								<dt class="dtDes">Baths</dt>
								<dd class="ddDes">{{$house->salepublicrecord->baths}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->housesize))
								<dt class="dtDes">House Size</dt>
								<dd class="ddDes">{{$house->salepublicrecord->housesize}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->lotsize))
								<dt class="dtDes">Lot Size</dt>
								<dd class="ddDes">{{$house->salepublicrecord->lotsize}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->yearbuilt))
								<dt class="dtDes">Year Built</dt>
								<dd class="ddDes">{{$house->salepublicrecord->yearbuilt}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->price))
								<dt class="dtDes">Price</dt>
								<dd class="ddDes">{{$house->salepublicrecord->price}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->proptype))
								<dt class="dtDes">Property Type</dt>
								<dd class="ddDes">{{$house->salepublicrecord->proptype}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->stories))
								<dt class="dtDes">Stories</dt>
								<dd class="ddDes">{{$house->salepublicrecord->stories}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->style))
								<dt class="dtDes">Style</dt>
								<dd class="ddDes">{{$house->salepublicrecord->style}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->garage))
								<dt class="dtDes">Garage</dt>
								<dd class="ddDes">{{$house->salepublicrecord->garage}}</dd>
								@endif
							</dl>
						</div>


						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->units))
								<dt class="dtDes">Units</dt>
								<dd class="ddDes">{{$house->salepublicrecord->units}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->cooling))
								<dt class="dtDes">Cooling</dt>
								<dd class="ddDes">{{$house->salepublicrecord->cooling}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->pool))
								<dt class="dtDes">Pool</dt>
								<dd class="ddDes">{{$house->salepublicrecord->pool}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->construction))
								<dt class="dtDes">Construction</dt>
								<dd class="ddDes">{{$house->salepublicrecord->construction}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->heating))
								<dt class="dtDes">Heating</dt>
								<dd class="ddDes">{{$house->salepublicrecord->heating}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->yearrenovated))
								<dt class="dtDes">Year Renovated</dt>
								<dd class="ddDes">{{$house->salepublicrecord->yearrenovated}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->rooms))
								<dt class="dtDes">Rooms</dt>
								<dd class="ddDes">{{$house->salepublicrecord->rooms}}</dd>
								@endif
							</dl>


							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->roofing))
								<dt class="dtDes">Roofing</dt>
								<dd class="ddDes">{{$house->salepublicrecord->roofing}}</dd>
								@endif
							</dl>

							<dl class="dlInlineDescription light radius">
								@if(isset($house->salepublicrecord->fireplace))
								<dt class="dtDes">Fireplace</dt>
								<dd class="ddDes">{{$house->salepublicrecord->fireplace}}</dd>
								@endif
							</dl>

						</div>
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

					@if($house->maximgid)
					<ul class="clearing-thumbs" data-clearing>
						@for ($i =1; $i <= $house->maximgid; $i++)
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


