@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/Skokie-Real-Estate-Listings 
-->
<div class="mainContent">
	<p>
		
		<nav class="breadcrumbs">
			{{link_to_route('home', "Remax Real Estate Services", array(), array('class'=>'aBreadcrumbs'));}}

			@if (isset($houses))
			{{link_to_route(Str::lower($city)."-lists", "$city Real Estate Listings", array(), 
			array('class'=>'aBreadcrumbs'));}}
			
			          @if(isset($zip))
			{{link_to_route(Str::lower($city)."-houses-sale-$zip","Houses, Condos for Sale in $city at $zip", array(), 
			array('class'=>'aBreadcrumbs current'));}}
			                  @endif

	@if(isset($rzip))
			{{link_to_route(Str::lower($city)."-houses-rent-$rzip","Houses/Apartments for Rent in $city at $rzip", array(), 
			array('class'=>'aBreadcrumbs current'));}}
			                  @endif

			                   @if(isset($type))
			{{link_to_route(Str::lower($city)."-".$type."-sale","$typeTitle for Sale in $city", array(), 
			array('class'=>'aBreadcrumbs current'));}}
			                  @endif
			
			@if(isset($rtype))
			{{link_to_route(Str::lower($city)."-".$rtype."-rent","$rtypeTitle for Rent in $city", array(), 
			array('class'=>'aBreadcrumbs current'));}}
			                  @endif



			@else
			{{link_to_route(Str::lower($city)."-lists", "$city Real Estate Listings", array(), 
			array('class'=>'aBreadcrumbs current'));}}
			@endif

		</nav>
	</p>
	<div class="panel">	
		
		@if(isset($zips))
		<h1>{{$city}} Real Estate Listings</h1>

		<h2>Sale Listings</h2>
		<ul class="no-bullet">
		@foreach ($zips['saleZips'] as $szip)
			<li>
			{{link_to_route(Str::lower($city)."-houses-sale-$szip", "Homes for Sale at $szip", array(), 
			array('class'=>'zipClass'))}}</li>
		@endforeach
		<li>-</li>

		<li>
			{{link_to_route(Str::lower($city)."-single-families-sale", "Single Family Homes for Sale in $city", array(), 
			array('class'=>'zipClass'))}}
		</li>

				<li>
			{{link_to_route(Str::lower($city)."-condos-sale", "Condos/Apartments for Sale in $city", array(), 
			array('class'=>'zipClass'))}}
		</li>

		</ul>
		<h2>Rent Listings</h2>
		<ul class="no-bullet">
		@foreach ($zips['rentZips'] as $rzip)
			<li>
			{{link_to_route(Str::lower($city)."-houses-rent-$rzip", "Homes for Rent at $rzip", array(), 
			array('class'=>'zipClass'))}}</li>
		@endforeach
		<li>-</li>

		<li>
			{{link_to_route(Str::lower($city)."-apartments-rent", "Apartments for Rent in $city", array(), 
			array('class'=>'zipClass'))}}
		</li>

				<li>
			{{link_to_route(Str::lower($city)."-houses-rent", "Houses for Rent in $city", array(), 
			array('class'=>'zipClass'))}}
		</li>

		</ul>

		@else
	
@if (isset($houses))
@include('include.res', compact($houses))
@yield('houses')
@endif


		@endif




	</div>
</div>
@stop
