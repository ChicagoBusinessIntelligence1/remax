@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search 
-->
<div class="mainContent">
	<p>
		@if (isset($zip))
		<nav class="breadcrumbs">
			{{link_to_route("buying-home-in-skokie", "Skokie Real Estate", array(), array('class'=>'aBreadcrumbs'));}}

			{{link_to_route('Skokie-Homes-For-Sale', 'Skokie Homes for Sale', array(), array('class'=>'aBreadcrumbs'))}}
			{{link_to_route("skokie_$zip", "Homes for Sale in Skokie at $zip", array(), array('class'=>'current'));}}
		</nav>
		@endif
	</p>
	<h1 class="docs header">Skokie Real Estate 
	</h1>

	<h2 class="subheader">
		@if (isset($zip))
		<!-- <hr/> -->
		Homes for Sale in Skokie 
		at {{$zip}}
		@endif
	</h2>


	<hr/>


	@if(isset($zips))
	<div class="row">
		<div class="large-12 columns ">
			<div class="panel">	
				<ul class="no-bullet ulZipSkokieHome">
					<li class="liZipSkokieHome">
						
						{{link_to_route('Skokie-Homes-For-Sale', 'Skokie Listings For Sale', array(), array('class'=>'aZipSkokieHome'))}}
					</li>

					<hr/>	
					<ul class="ulSecond ulZipSkokieHome">	
						@foreach ($zips as $zip)
						<li class="liZipSkokieHome">
							{{link_to_route("skokie_$zip", "Homes for Sale in Skokie at $zip", array(), array('class'=>'aZipSkokieHome'));}}
						</li>

						@endforeach
						<li class="liZipSkokieHome">
							{{link_to_route('Single-Family-Homes-For-Sale-In-Skokie-Il', 'Single Family Homes For Sale In Skokie', array(), array('class'=>'aZipSkokieHome'))}}
						</li>

						<li class="liZipSkokieHome">
							{{link_to_route('Condos-For-Sale-In-Skokie-Il', 'Condos For Sale In Skokie', array(), array('class'=>'aZipSkokieHome'))}}
						</li>

					</ul>	
				</ul>
			</div>
			<div class="panel">	
				<ul class="no-bullet ulZipSkokieHome">
					
					<li class="liZipSkokieHome">
						{{link_to_route('Skokie-Rentals', 'Skokie Rentals', array(), array('class'=>'aZipSkokieHome'))}}
					</li>
					<hr/>

					<ul class="ulSecond ulZipSkokieHome">	
						<li class="liZipSkokieHome">
							{{link_to_route('Apartments-For-Rent-In-Skokie-Il', 'Apartments For Rent In Skokie IL', array(), array('class'=>'aZipSkokieHome'))}}
						</li>

						<li class="liZipSkokieHome">
							{{link_to_route('Homes-For-Rent-In-Skokie-Il', 'Single Family Homes For Rent In Skokie IL', array(), array('class'=>'aZipSkokieHome'))}}
						</li>
					</ul>
				</ul>
			</div>
		</div>
	</div>
	@endif
	@if (isset($houses))
	@include('include.res', compact($houses))
	@yield('houses')
	@endif

</div>
@stop
