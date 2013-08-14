@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			@include('partials._admin_panel_menu')

			<div class="panel userPanelContent">
				<h4 class="subheader">My Dreamhome Requests</h4>
				<br/>	
				<div class="row">
					<div class="large-12 columns">
						@if(isset($note))
						<div class="label radius success updated">
							{{$note}}
						</div>
						<hr/>
						@endif
					</div>
				</div>
				<br/>
				
				<div class="row">
					<div class="large-7 columns">
						@if(isset($dreamhomes))	

						<ol class="olDreamhomes">
							@foreach($dreamhomes as $dreamhome)
							<li>
								<ul class="no-bullet panel radius">
									<li>
										<em> Location: </em>{{$dreamhome->location}} <br/>
									</li>
									<li>
										<em> Property type: </em>{{$dreamhome->property_type}} <br/>
									</li>
									<li>
										<em> Beds: </em>{{$dreamhome->beds}} <br/>
									</li>
									<em> Baths: </em>{{$dreamhome->baths}} <br/>
									<li>
										<em> Garage: </em>{{$dreamhome->garage}} <br/>
									</li>
									<li>
										<em> Comments: </em>{{$dreamhome->comments}} <br/>
									</li>
									<hr/>

									<li>
										<div class="row noMargin">
											<div class="large-12 columns large-centered fivePadding requestResultButtons">
												<ul class="inline-list">
													<div class="row noMargin">
														<div class="large-6 columns editButtonWrapper">
															<li>
																{{link_to_route('dream-home-request-edit', 'Edit', $dreamhome->id, array('class'=>'button secondary tiny expand editRequestButton noMargin'))}} 
															</li>
														</div>
														<div class="large-6 columns deleteButtonWrapper">
															<li class="submitDeleteButton">

																{{Form::open(array('url' => 'dreamhomes/'.$dreamhome->id.'/delete', 'method'=>'DELETE'))}}
																{{ Form::submit('Delete', array('class'=>'button secondary tiny expand '))}}
																{{Form::close()}}
															</li>
														</div>
													</div>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</li>
							@endforeach
						</ol>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop