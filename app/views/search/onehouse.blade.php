@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row">
			<div class="row">
			
			

			
			

			
			

			
			

				@if(isset($listing->Address))
				<div class="large-9 columns">
					<h1 class="oneHouseAddress label radius">{{$listing->Address}}</h1>
					&nbsp &nbsp
					
										
					<ul class="inline-list">


						
						@if ($listing->IsForeclosure  == 1)
						<li class="label radius foreclosureLabel">
							Foreclosure <br/>
						</li>
						@endif

						@if ($listing->IsBankOwned == 1)
						<li class="label radius bankownedLabel">
							Bank Owned <br/>
						</li>

						@endif
						
						@if ($listing->IsShortSale  == 1)
						<li class="label radius shortsaleLabel">
							Short Sale <br/>
						</li>
						@endif

					</ul>
					
	
				</div>
				@endif
				<div class="large-2 columns">
					<span class="priceStyle right ">${{number_format($listing->price)}}
					</span>
				</div>
			</div>
			<hr/>

			@if(isset($listing->maximgid))
			<ul class="clearing-thumb ulParsedImg" data-clearing>
				@for ($i =1; $i <= $listing->maximgid; $i++)
				<li class="clearing-featured-img parsedImg"><a class="th" href="{{url('comp/img/images/'.$listing->id.'/'.$i.'.jpg')}}">
					<img width="100px" alt="{{$listing->city->city}} Home for 
					@if ($listing->issale==1)
						Sale 
					@else
						Rent 
					@endif
View {{$i}}" height="50px" src="{{url('comp/img/images/'.$listing->id.'/'.$i.'.jpg')}}"></a>
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
						@if(isset($listing->address))
						{{$listing->description}}
						@endif
					</div>
				</div>

				
			</div>
		</div>

	</div>
</div>
@stop


