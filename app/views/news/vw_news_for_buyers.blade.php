@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns menues">
			<ul class="breadcrumbs">
			<li class="newsL">{{link_to_route('real_estate_news', 'NEWS');}}</li>
				@if ($news[0]->bs == 1 ) <!-- Laravel if clause with @ --> 	
				<li class="current"><a href="">NEWS FOR BUYERS</a></li>
				@endif
			</hr>
			</ul>
		<h1>News for Buyers</h1>
		<hr/>
		<br/>
			
			@foreach($news as $n) <!-- Iterate over the array of news -->
			<h4>{{$n->title}}</h4>
			<hr/>
			<p>{{$n->body}}</p>
			<br/>
			@endforeach

		</div>

	</aside>
	</div>
</div>
@stop
