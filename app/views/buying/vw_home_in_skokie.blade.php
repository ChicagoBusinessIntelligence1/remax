@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search 
-->
<div class="mainContent">
<h1 class="docs header">Homes for Sale in Skokie 
@if (isset($zip))
at {{$zip}}
@endif
</h1>
<p>
@if (isset($zip))
	<nav class="breadcrumbs">
  {{link_to_route("buying-home-in-skokie", "Houses for Sale in Skokie", array(), array('class'=>'className'));}}
  {{link_to_route("skokie_$zip", "Homes for Sale in Skokie at $zip", array(), array('class'=>'current'));}}
</nav>
</p>

@endif



	@if(isset($zips))
	<ul>
		@foreach ($zips as $zip)
			<li>
			{{link_to_route("skokie_$zip", "Homes for Sale in Skokie at $zip", array(), array('class'=>'className'));}}
			
			

			</li>
		@endforeach

	</ul>
	@endif
@if (isset($houses))
@include('include.res', compact($houses))
@yield('houses')
@endif

		</div>
		@stop
