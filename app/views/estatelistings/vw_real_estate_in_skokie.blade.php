@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/Skokie-Real-Estate-Listings 
-->
<div class="mainContent">
	<p>
		
		<nav class="breadcrumbs">
			{{link_to_route('home', "Remax Real Estate Services", array(), array('class'=>'aBreadcrumbs'));}}

			@if (isset($houses))
			
			
			@else
{{link_to_route(Str::lower($city)."-lists", "$city Real Estate Listings", array(), 
array('class'=>'aBreadcrumbs current'));}}
			@endif

			
		</nav>
		
	</p>
	<div class="panel">	
		



	</div>
</div>
@stop
