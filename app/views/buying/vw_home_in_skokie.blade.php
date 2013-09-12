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
			{{link_to_route("skokie-$zip", "Homes for Sale in Skokie at $zip", array(), array('class'=>'current'));}}
		</nav>
		@endif
	</p>
	<div class="panel">	
		<h1 class="docs header">Houses for Sale in Skokie, IL</h1>

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
				
				
					<ul class="ulSecond no-bullet ulZipSkokieHome">	
						@foreach ($zips as $key=>$zip)
						<li class="liZipSkokieHome">
							{{link_to_route("skokie-$zip", "Homes for Sale in Skokie at $zip($counts[$key])", array(), array('class'=>'aZipSkokieHome'));}}
						</li>

						@endforeach
						<li> - </li>
						<li class="liZipSkokieHome">
							{{link_to_route('skokie-single', "Single Family Homes For Sale In Skokie($counts[3])", array(), array('class'=>'aZipSkokieHome'))}}
						</li>
						<li class="liZipSkokieHome">
							{{link_to_route('skokie-condos', "Condos For Sale In Skokie($counts[4])", array(), array('class'=>'aZipSkokieHome'))}}
						</li>

					</ul>	
				
			</div>
			
		</div>
		@endif
		@if (isset($houses))
		@include('include.res', compact($houses))
		@yield('houses')
		@endif

	</div>
</div>
@stop
