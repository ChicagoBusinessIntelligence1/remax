@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">


@if(isset($house->maximgid))
					<ul class="clearing-thumbs" data-clearing>
						@for ($i =1; $i <= $house->maximgid; $i++)
						<li class="clearing-featured-img"><a class="th" href="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}">
							<img width="100px" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a>
						</li>
						@endfor
					</ul>	
					@endif


			@if (isset($house->isforeclosed))
			Foreclosed <br/>
@endif

			@if (isset($house->isbankowned))
			Bank Owned <br/>
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
					@if(isset($house->address))
						{{$house->description}}
						@endif
					</div>
				</div>

				
			</div>
		</div>

	</div>
</div>
@stop


