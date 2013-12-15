@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/Skokie-Real-Estate-Listings 
-->
<div class="mainContent">
	<p>
		
		
	</p>
	
		@else
	
@if (isset($listings))
@include('include.res', compact($listings))
@yield('listings')
@endif


		@endif




	</div>
</div>
@stop
