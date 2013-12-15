@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row">
			<div class="large-12 columns oneListingWrapper">
				<div class="row">
					@if(isset($listing->Address))
					<div class="large-9 columns">
						<span class="label onehouseAddress radius">{{$listing->Address}}</span>
						&nbsp &nbsp


						<ul class="inline-list marginTopBottomNull">

							@if ($listing->IsForeclosure  == 1)
							<li class="label radius foreclosureLabel">
								Foreclosure <br/>
							</li>
							@endif

							@if ($listing->IsBankOwned == 1)
							<li class="label radius bankowedLabel">
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
				<div class="row">
					<div class="large-12 columns">

						@if(isset($listing->NumberPhotos))
						<ul class="clearing-thumbs" data-clearing>
							@for ($i =1; $i <= $listing->NumberPhotos; $i++)
							<li> 
								<a class="th tenMarginBottom" href="{{url('comp/img/images/'.$listing->MlsNum.'/'.$i.'.jpg')}}">
									<img width="100px" alt="{{$listing->city->CityName}} Home for 
									@if ($listing->IsRental==0)
									Sale 
									@else
									Rent 
									@endif
									View {{$i}}" height="50px"  src="{{url('comp/img/images/'.$listing->MlsNum.'/'.$i.'.jpg')}}">
								</a>
							</li>
							@endfor
						</ul>	
						@endif
					</div>

				</div>
				<!-- =callAgentRent ends here -->
				<hr/>
				<br/>		
				<div class="row">
					<div class="large-12 columns listingDetails">
						<h2 class="title-section title-section-detail">Property Details</h2>
						<hr/>

					</hr>
					@if(isset($listing->Address))
					<p class="property-description">{{$listing->PropDetails}}</p>

				</div>
			</div>

			<div class="row">
				<div class="large-12 columns listingDetails">

					@if(isset($listing->BedroomUl))
					<h3 class="title-section title-section-sub">Bedrooms</h3>
					<hr/>
					<ul class="list-disc list-condensed list-col-c group">
						<?php 
						$beds = ($listing->BedroomUl);

						$arrBeds = explode("\n", $beds);
						foreach ($arrBeds as $bed) {
							echo "<li>".$bed."</li>";
						}
						?>
						<ul/>
						@endif

					</div>
				</div>

				<div class="row">
					<div class="large-12 columns listingDetails">
						
						@if(isset($listing->BathroomUl))
						<h3 class="title-section title-section-sub">Bathrooms</h3>
						<hr/>
						<ul class="list-disc list-condensed list-col-c group">
							<?php 
							$baths = ($listing->BathroomUl);

							$arrBaths = explode("\n", $baths);
							foreach ($arrBaths as $bath) {
								echo "<li>".$bath."</li>";	# code...
							}
							?>

						</ul>
						@endif

					</div>
				</div>

				<div class="row">
					<div class="large-12 columns listingDetails">
						
						@if(isset($listing->KitchenDiningUl))
						<h3 class="title-section title-section-sub">Kitchen and Dining</h3>
						<hr/>
						<ul class="list-disc list-condensed list-col-c group">

							<?php 
							$kithens = ($listing->KitchenDiningUl);

							$arrKitchens = explode("\n", $kithens);
							foreach ($arrKitchens as $kitchen) {
								echo "<li>".$kitchen."</li>";
							}
							?>
						</ul>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns listingDetails">
						
						@if(isset($listing->OtherRoomsUl)) 
						<h3 class="title-section title-section-sub">Other Rooms</h3>
						<hr/>
						<ul class="list-disc list-condensed list-col-c group">

							<?php 
							$otherRooms = ($listing->OtherRoomsUl);

							$arrOtherRooms = explode("\n", $otherRooms);
							foreach ($arrOtherRooms as $otherRoom) {
								echo "<li>".$otherRoom."</li>";
							}
							?>

						</ul>
						@endif
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns listingDetails">
						@if(isset($listing->HomeFeaturesUl))
						<h3 class="title-section title-section-sub">Home Features</h3>
						<hr/>
						<ul class="list-disc list-condensed list-col-c group">

							<?php 
							$homeFeatures = ($listing->HomeFeaturesUl);

							$arrHomeFeatures = explode("\n", $homeFeatures);
							foreach ($arrHomeFeatures as $homeFeature) {
								echo "<li>".$homeFeature."</li>";
							}
							?>

						</ul>
						@endif
					</div>
				</div>


				<div class="row">
					<div class="large-12 columns listingDetails">
						@if(isset($listing->BuldingConstructionUl))
						<h3 class="title-section title-section-sub">Building and Construction</h3>
						<hr/>
						<ul class="list-disc list-condensed list-col-c group">

							<?php 
							$buildingConstructions = ($listing->BuldingConstructionUl);

							$arrBuildingConstructions = explode("\n", $buildingConstructions);
							foreach ($arrBuildingConstructions as $buildingConstruction) {
								echo "<li>".$buildingConstruction."</li>";
							}
							?>
							<ul/>
							@endif
						</div>
					</div>

					<div class="row">
						<div class="large-12 columns listingDetails">
							@if(isset($listing->ExteriorLotFeaturesUl))
							<h3 class="title-section title-section-sub">Exterior and lot features</h3>
							<hr/>
							<ul class="list-disc list-condensed list-col-c group">

								<?php 
								$elFeatures = ($listing->ExteriorLotFeaturesUl);

								$elFeatures = explode("\n", $elFeatures);
								foreach ($elFeatures as $elFeature) {
									echo "<li>".$elFeature."</li>";
								}
								?>
								<ul/>
								@endif
							</div>
						</div>

						<div class="row">
							<div class="large-12 columns listingDetails">
								@if(isset($listing->GarageParkingUl))
								<h3 class="title-section title-section-sub">Garage and Parking</h3>
								<hr/>
								<ul class="list-disc list-condensed list-col-c group">

									<?php 
									$garages = ($listing->GarageParkingUl);

									$arrGarages = explode("\n", $garages);
									foreach ($arrGarages as $garage) {
										echo "<li>".$garage."</li>";
									}
									?>
									<ul/>
									@endif
								</div>
							</div>

							<div class="row">
								<div class="large-12 columns listingDetails">
									@if(isset($listing->HeatingCoolingUl))
									<h3 class="title-section title-section-sub">Heating and Cooling</h3>
									<hr/>
									<ul class="list-disc list-condensed list-col-c group">

										<?php 
										$heatingCoolings = ($listing->HeatingCoolingUl);

										$arrHeatingCoolings = explode("\n", $heatingCoolings);
										foreach ($arrHeatingCoolings as $heat) {
											echo "<li>".$heat."</li>";
										}
										?>
										<ul/>
										@endif
									</div>
								</div>

								<div class="row">
									<div class="large-12 columns listingDetails">
										@if(isset($listing->UtilitiesUl))
										<h3 class="title-section title-section-sub">Utilities</h3>
										<hr/>
										<ul class="list-disc list-condensed list-col-c group">

											<?php 
											$utils = ($listing->UtilitiesUl);

											$arrUtils = explode("\n", $utils);
											foreach ($arrUtils as $util) {
												echo "<li>".$util."</li>";
											}
											?>
											<ul/>
											@endif
										</div>
									</div>


									<div class="row">
										<div class="large-12 columns listingDetails">
											@if(isset($listing->AppliancesUl))
											<h3 class="title-section title-section-sub">Appliances</h3>
											<hr/>
											<ul class="list-disc list-condensed list-col-c group">

												<?php 
												$apps = ($listing->AppliancesUl);

												$arrApps = explode("\n", $apps);
												foreach ($arrApps as $app) {
													echo "<li>".$app."</li>";
												}
												?>
												<ul/>
												@endif
											</div>
										</div>

										<div class="row">
											<div class="large-12 columns listingDetails">
												@if(isset($listing->AmenitiesCommunitiesFeaturesUl))
												<h3 class="title-section title-section-sub">Amenities and Communities Features</h3>
												<hr/>
												<ul class="list-disc list-condensed list-col-c group">

													<?php 
													$amens = ($listing->AmenitiesCommunitiesFeaturesUl);

													$arrAmens = explode("\n", $amens);
													foreach ($arrAmens as $amen) {
														echo "<li>".$amen."</li>";
													}
													?>
													<ul/>
													@endif
												</div>
											</div>

											<div class="row">
												<div class="large-12 columns listingDetails">
													@if(isset($listing->OtherPropertyInfoUl))
													<h3 class="title-section title-section-sub">Other Property Info</h3>
													<hr/>
													<ul class="list-disc list-condensed list-col-c group">

														<?php 
														$otherProps = ($listing->OtherPropertyInfoUl);

														$arrOthers = explode("\n", $otherProps);
														foreach ($arrOthers as $others) {
															echo "<li>".$others."</li>";
														}
														?>
														<ul/>
														@endif
													</div>
												</div>


												<div class="row">
													<div class="large-12 columns listingDetails">
													</div>
												</div>





												@endif





												<hr/>
												
												</div>
											</div>
										</div>
									</div>
									@stop


