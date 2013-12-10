@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search 
-->
<div class="mainContent">
@if (isset($listings))
@include('include.res_search', compact($listings))
@yield('listings')
@endif
		</div>
		@stop
