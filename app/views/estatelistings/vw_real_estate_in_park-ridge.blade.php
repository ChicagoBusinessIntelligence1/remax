@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/Skokie-Real-Estate-Listings 
-->
<div class="mainContent">
	<p>
		
		
	</p>
	
		@else
	
@if (isset($houses))
@include('include.res', compact($houses))
@yield('houses')
@endif


		@endif




	</div>
</div>
@stop
