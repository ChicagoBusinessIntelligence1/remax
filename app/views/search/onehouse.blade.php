@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">

			@if(isset($house->status))
			<div class="large-3 columns">
				
				<h5 class="propStat"><em>{{$house->status->dbstatus}}</em></h5>
			</div>
			@endif
			@if(isset($house->price))
			<div class="large-2 columns right">
				<a class="priceStyle tenMarginTop right">${{number_format($house->price)}}
				</a>
			</div>
			@endif 
		</div>
		<!-- =callAgentRent ends here -->
		<hr/>

		<div class="row">
			@if(isset($house->address))
			<div class="large-9 columns">
				<h1 class="oneHouseAddress label radius">{{$house->address}}</h1>
				&nbsp &nbsp
			</div>
			@endif

		</div>

		
		<div class="row">
			<div class="large-12 columns listingDetails">

				
				<div class="row">
					<div class="large-12 columns databaseParsing">
						{{$house->description}}
						
					</div>
				</div>

				@if($house->maximgid)
					<ul class="clearing-thumbs" data-clearing>
						@for ($i =1; $i <= $house->maximgid; $i++)
						<li class="clearing-featured-img"><a class="th" href="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}">
							<img width="100px" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a>
						</li>
						@endfor
					</ul>	
					@endif
			</div>
		</div>

	</div>
</div>
@stop


