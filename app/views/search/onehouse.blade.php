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
				
				<h6 class="alert-box secondary radius propStat">{{$house->status->dbstatus}}</h6>
			</div>
		</div>

		<div class="row">
			<div class="large-4 columns">
				<h3 class="subheader propType"><em>{{$house->propertytype->type}}</em> </h3>
			</div>
		</div>
		<hr/>

		<div class="row">
			<div class="large-12 columns listingDetails">

				<div class="shortPropDet">
					<div class="row noMargin">

						<div class="large-4 column panel secondary panelShortInfo ">

							<strong>MLS: #</strong> {{$house->listing}}<br/><br/>

							<strong>Price/sqft: </strong> {{$house->pricesqft}} <br/><br/>
						</div>


						<div class="large-4 offset-1 columns panel secondary panelShortInfo ">
							<strong>Bedrooms:</strong> {{$house->bedrooms}} <br/><br/>

							<strong>Full Bathrooms:</strong> {{$house->bathrooms}} <br/><br/>

							<strong>House Size:</strong> {{$house->size}} Sq Ft <br/><br/>

							<strong>Lot Size: </strong>{{$house->saleexteriorfeature->lotsize}}<br/><br/>

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
									<a class="aAccordion" href="#panel1"><span class="spanAccordion">Bedrooms</span></a>
								</p>
								<div class="content" data-slug="panel1">
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription radius">
												<dt class="dtDes">Master Bedroom <br/> Size</dt>
												<dd class="ddDes">{{$house->salebedroom->masterbedsize}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Master Bedroom <br/> Features</dt>
												<dd class="ddDes">{{$house->salebedroom->maseterbedfeatures}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 2 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed2size}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 2 Features</dt>
												<dd class="ddDes">{{$house->salebedroom->bed2features}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 3 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed3size}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 3 Features</dt>
												<dd class="ddDes">{{$house->salebedroom->bed3features}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 4 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed4size}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 4 Features</dt>
												<dd class="ddDes">{{$house->salebedroom->bed4features}}</dd>
											</dl>
										</div>
									</div>


									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 5 Size</dt>
												<dd class="ddDes">{{$house->salebedroom->bed5size}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Bedroom 5 Features</dt>
												<dd class="ddDes">{{$house->salebedroom->bed5features}}</dd>
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
												<dt class="dtDes">Full Bathrooms</dt>
												<dd class="ddDes">{{$house->salebathroom->fullbath}}</dd>
											</dl>
										</div>


										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Half Bathrooms</dt>
												<dd class="ddDes">{{$house->salebathroom->halfbath}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">

												<dt class="dtDes">Master Bath <br/> Size</dt>
												<dd class="ddDes">{{$house->salebathroom->masterbathsize}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">

												<dt class="dtDes">Master Bath <br/> Features</dt>
												<dd class="ddDes">{{$house->salebathroom->masterbathfeatures}}</dd>
											</dl>
										</div>
									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">

												<dt class="dtDes">Bath Amenities</dt>
												<dd class="ddDes">{{$house->salebathroom->bathamenities}}</dd>
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
												<dd class="ddDes">{{$house->salekitchen->kitchensize}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Kitchen Features</dt>
												<dd class="ddDes">{{$house->salekitchen->kitchenfeatures}}</dd>
											</dl>
										</div>

									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Eating Area</dt>
												<dd class="ddDes">{{$house->salekitchen->eatingarea}}</dd>
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
												<dd class="ddDes">{{$house->salediningroom->diningroomsize}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Dining Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salediningroom->diningroomfeatures}}</dd>
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
												<dd class="ddDes">{{$house->salelivingroom->livroomsize}}</dd>
											</dl>
										</div>
										<div class="large-7 columns">
											<dl class="dlInlineDescription">
												<dt class="dtDes">Living Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salelivingroom->livroomfeatures}}</dd>
											</dl>
										</div>

									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Living Dining Combo <br/> Size</dt>
												<dd class="ddDes">{{$house->salelivingroom->livdiningcombosize}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Living Dining Combo <br/> Features</dt>
												<dd class="ddDes">{{$house->salelivingroom->livdiningcombofeatures}}</dd>
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
												<dd class="ddDes">{{$house->salefamroom->famroomsize}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Family Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salefamroom->famroomfeatures}}</dd>
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
												<dd class="ddDes">{{$house->salelaundryroom->laundryroomsize}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Laundry Room <br/> Features</dt>
												<dd class="ddDes">{{$house->salelaundryroom->laundryroomfeatures}}</dd>
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
												<dd class="ddDes">{{$house->saleexerciseroom->size}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Exercise Room <br/> Features</dt>
												<dd class="ddDes">{{$house->saleexerciseroom->Featuress}}</dd>
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
												<dd class="ddDes">{{$house->salebasement->basementsize}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Features</dt>
												<dd class="ddDes">{{$house->salebasement->basementfeatures}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Bath</dt>
												<dd class="ddDes">{{$house->salebasement->basementbath}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Bath <br/>  Size</dt>
												<dd class="ddDes">{{$house->salebasement->basementbathsize}}</dd>
											</dl>
										</div>
									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Basement Bath</dt>
												<dd class="ddDes">{{$house->salebasement->basementbathfeatures}}</dd>
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
												<dd class="ddDes">{{$house->saleutilityroom->utilroomsize}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Utility Room <br/> Features</dt>
												<dd class="ddDes">{{$house->saleutilityroom->utilroomfeatures}}</dd>
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
												<dd class="ddDes">{{$house->salewalkincloset->closet1}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 2</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet2}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 3</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet3}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 4</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet4}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 5</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet5}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Walk In Closet 6</dt>
												<dd class="ddDes">{{$house->salewalkincloset->closet6}}</dd>
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
												<dd class="ddDes">{{$house->saleotherroom->room1}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Room 2</dt>
												<dd class="ddDes">{{$house->saleotherroom->room2}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Room 3</dt>
												<dd class="ddDes">{{$house->saleotherroom->room3}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Room 3</dt>
												<dd class="ddDes">{{$house->saleotherroom->room4}}</dd>
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
												<dd class="ddDes">{{$house->saleinteriorfeature->windowtype}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Skylight</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->skylight}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Flooring</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->flooring}}</dd>
											</dl>
										</div>
										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Attic</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->attic}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Equipment</dt>
												<dd class="ddDes">{{$house->saleinteriorfeature->equipment}}</dd>
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
												<dd class="ddDes">{{$house->saleappliance->refrigerator}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Oven</dt>
												<dd class="ddDes">{{$house->saleappliance->oven}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Microwave</dt>
												<dd class="ddDes">{{$house->saleappliance->microwave}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Washer</dt>
												<dd class="ddDes">{{$house->saleappliance->washer}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Dryer</dt>
												<dd class="ddDes">{{$house->saleappliance->dryer}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Dishwasher</dt>
												<dd class="ddDes">{{$house->saleappliance->dishwasher}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Disposal</dt>
												<dd class="ddDes">{{$house->saleappliance->disposal}}</dd>
											</dl>
										</div>
										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional</dt>
												<dd class="ddDes">{{$house->saleappliance->addit}}</dd>
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
												<dt class="dtDes">Accessibility Features</dt>
												<dd class="ddDes">{{$house->salehomefeature->access}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Chairlift</dt>
												<dd class="ddDes">{{$house->salehomefeature->disab}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Disability Access and/or Equipped</dt>
												<dd class="ddDes">{{$house->salehomefeature->chairlift}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Exits</dt>
												<dd class="ddDes">{{$house->salehomefeature->exit}}</dd>
											</dl>
										</div>
									</div>
									
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Disability Access and/or Equipped</dt>
												<dd class="ddDes">{{$house->salehomefeature->chairlift}}</dd>
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
												<dt class="dtDes">Lot Size</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->lotsize}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Lot Dimensions</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->lotdimension}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Lot Features</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->lotfeature}}</dd>
											</dl>

										</div>

										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Deck</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->deck}}</dd>
											</dl>
										</div>
									</div>
									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Patio</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->patio}}</dd>
											</dl>

										</div>	
										<div class="large-7 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Driveway</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->driveway}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Swimming Pool</dt>
												<dd class="ddDes">{{$house->saleexteriorfeature->swimmingpool}}</dd>
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
												<dd class="ddDes">{{$house->salegarageandparking->numberofparking}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Garage Type</dt>
												<dd class="ddDes">{{$house->salegarageandparking->parkingtype}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Number of Garages</dt>
												<dd class="ddDes">{{$house->salegarageandparking->numberofgarage}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Number of Parking Spaces</dt>
												<dd class="ddDes">{{$house->salegarageandparking->garagetype}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Garages Features</dt>
												<dd class="ddDes">{{$house->salegarageandparking->garagefeatures}}</dd>
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
												<dd class="ddDes">{{$house->salebuildingconstruction->architecture}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">House Style</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->housestyle}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Type of House</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->typeofhouse}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes"> Exterior Building Type</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->exteriorbuildingtype}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Levels or Stories</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->levelsorstories}}</dd>
											</dl>
										</div>

										<div class="large-7 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Roof Type</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->rooftype}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-5 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Features</dt>
												<dd class="ddDes">{{$house->salebuildingconstruction->additionalfeatures}}</dd>
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
												<dt class="dtDes">Electricity</dt>
												<dd class="ddDes">{{$house->saleutility->electricity}}</dd>
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Cooling Features</dt>
												<dd class="ddDes">{{$house->saleutility->coolingfeatures}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Heating Features</dt>
												<dd class="ddDes">{{$house->saleutility->heatingfeatures}}</dd>
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Number of Fireplaces</dt>
												<dd class="ddDes">{{$house->saleutility->numberoffireplaces}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Fireplace Location</dt>
												<dd class="ddDes">{{$house->saleutility->fireplacelocation}}</dd>
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Water</dt>
												<dd class="ddDes">{{$house->saleutility->water}}</dd>
											</dl>
										</div>
									</div>

									<div class="row">
										<div class="large-6 columns">
											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Sewer</dt>
												<dd class="ddDes">{{$house->saleutility->sewer}}</dd>
											</dl>
										</div>

										<div class="large-6 columns">

											<dl class="dlInlineDescription light radius">
												<dt class="dtDes">Additional Features</dt>
												<dd class="ddDes">{{$house->saleutility->additionalfeaturess}}</dd>
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
												<dt class="dtDes">Area Amenities</dt>
												<dd class="ddDes">{{$house->saleamenity->areaamenities}}</dd>
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
										<dt class="dtDes">Elementary</dt>
										<dd class="ddDes">{{$house->saleschool->elementary}}</dd>
									</dl>

								</div>

								<div class="large-4 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">District</dt>
										<dd class="ddDes">{{$house->saleschool->elemschdistrict}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-8 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Junion Hign</dt>
										<dd class="ddDes">{{$house->saleschool->high}}</dd>
									</dl>

								</div>

								<div class="large-4 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">District</dt>
										<dd class="ddDes">{{$house->saleschool->highdistrict}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-8 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">High</dt>
										<dd class="ddDes">{{$house->saleschool->juniorhigh}}</dd>
									</dl>

								</div>

								<div class="large-4 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">District</dt>
										<dd class="ddDes">{{$house->saleschool->jrhighdistrict}}</dd>
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
										<dt class="dtDes">Township</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->township}}</dd>
									</dl>

								</div>

								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">City</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->city}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">State</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->state}}</dd>
									</dl>

								</div>

								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">County</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->county}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Area</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->area}}</dd>
									</dl>

								</div>

								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Directions</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->directions}}</dd>
									</dl>
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">APN Number</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->apnnumber}}</dd>
									</dl>
								</div>
								<div class="large-6 columns">
									<dl class="dlInlineDescription light radius">
										<dt class="dtDes">Other Info</dt>
										<dd class="ddDes">{{$house->salepropertyinfo->otherinfo}}</dd>
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
								<dt class="dtDes">Beds</dt>
								<dd class="ddDes">{{$house->salepublicrecord->beds}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Baths</dt>
								<dd class="ddDes">{{$house->salepublicrecord->baths}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">House Size</dt>
								<dd class="ddDes">{{$house->salepublicrecord->housesize}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Lot Size</dt>
								<dd class="ddDes">{{$house->salepublicrecord->lotsize}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Year Built</dt>
								<dd class="ddDes">{{$house->salepublicrecord->yearbuilt}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Price</dt>
								<dd class="ddDes">{{$house->salepublicrecord->price}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Property Type</dt>
								<dd class="ddDes">{{$house->salepublicrecord->proptype}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Stories</dt>
								<dd class="ddDes">{{$house->salepublicrecord->stories}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Style</dt>
								<dd class="ddDes">{{$house->salepublicrecord->style}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Garage</dt>
								<dd class="ddDes">{{$house->salepublicrecord->garage}}</dd>
							</dl>
						</div>


						<div class="large-6 columns">
							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Units</dt>
								<dd class="ddDes">{{$house->salepublicrecord->units}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Cooling</dt>
								<dd class="ddDes">{{$house->salepublicrecord->cooling}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Pool</dt>
								<dd class="ddDes">{{$house->salepublicrecord->pool}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Construction</dt>
								<dd class="ddDes">{{$house->salepublicrecord->construction}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Heating</dt>
								<dd class="ddDes">{{$house->salepublicrecord->heating}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Year Renovated</dt>
								<dd class="ddDes">{{$house->salepublicrecord->yearrenovated}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Rooms</dt>
								<dd class="ddDes">{{$house->salepublicrecord->rooms}}</dd>
							</dl>


							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Roofing</dt>
								<dd class="ddDes">{{$house->salepublicrecord->roofing}}</dd>
							</dl>

							<dl class="dlInlineDescription light radius">
								<dt class="dtDes">Fireplace</dt>
								<dd class="ddDes">{{$house->salepublicrecord->fireplace}}</dd>
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


