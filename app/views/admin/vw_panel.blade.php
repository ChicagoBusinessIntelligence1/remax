@extends('layouts.master')
@section('content')
<!-- 
//LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			@include('partials._admin_panel_menu')
			<div class="userPanelContent"></div>

		</div>
	</div>
</div>
@stop