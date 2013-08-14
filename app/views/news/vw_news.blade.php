@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns menues">
			<ul class="breadcrumbs">
				<!-- <a href="#">NEWS</a></li> -->
				<li class="breadcrumbsFontStyle">{{link_to_route('real_estate_news', 'NEWS');}}</li>
				@if ($news->bs == 1 )	
				<li class="breadcrumbsFontStyle">{{link_to_route('news_for_buyers', 'NEWS FOR BUYERS');}}</li>
				@else 	
				<li class="breadcrumbsFontStyle">{{link_to_route('news_for_sellers', 'NEWS FOR SELLERS');}}</li>
				@endif
				<li class="current"><a href="#">{{$news->title}}</a></li>
			</ul>

			<h4>{{$news->title}}</h4>
			<hr/>
			<p>{{$news->body}}</p>
		</div>
	</div>
</div>
@stop
