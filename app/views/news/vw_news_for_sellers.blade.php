@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns menues">
			<ul class="breadcrumbs">
				<li class="newsL">{{link_to_route('real_estate_news', 'NEWS');}}</li>
				@if ($news[0]->bs == 2 )	
				<li class="current"><a href="#">NEWS FOR SELLERS</a></li>
				@endif
				<hr/> 
			</ul>
			<h1>News for Sellers</h1>
			<hr/>
			<br/>

			@foreach($news as $new)
			<h4>{{$new->title}}</h4>
			<hr/>
			<p>{{$new->body}}</p>
			<br/>
			@endforeach
		</div>
	</div>
</div>
@stop
