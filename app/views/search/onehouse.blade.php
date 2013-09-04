@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row callAgentRent">

			<div class="row">
				@if(isset($house->address))
				<div class="large-9 columns">
					<h1 class="oneHouseAddress label radius">{{$house->address}}</h1>
					&nbsp &nbsp
					<ul class="inline-list">
							@if (isset($house->isforeclosed))
						<li class="label radius foreclosureLabel">
							Foreclosure <br/>
						</li>
							@endif

							@if (isset($house->shortsale))
						<li class="label radius shortsaleLabel">
							Short Sale<br/>
						</li>
							@endif

							@if (isset($house->isbankowned))
						<li class="label radius bankowedLabel">
							Bank Owned <br/>
						</li>
							@endif

					</ul>
				</div>
				@endif
				<div class="large-2 columns">
					<span class="priceStyle right ">${{number_format($house->price)}}
					</span>
				</div>
			</div>
			<hr/>

			@if(isset($house->maximgid))
			<ul class="clearing-thumb ulParsedImg" data-clearing>
				@for ($i =1; $i <= $house->maximgid; $i++)
				<li class="clearing-featured-img parsedImg"><a class="th" href="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}">
					<img width="100px" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a>
				</li>
				@endfor
			</ul>	
			@endif


			
		</div>
		<!-- =callAgentRent ends here -->

		<br/>		
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


