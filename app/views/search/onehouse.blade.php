@extends('layouts.master')
@section('content')

<!-- //LOCATION: remax/public/search
-->
<div class="mainContent">
	<div class="panel oneListing oneRentAgent">
		<div class="row">
		<nav class="breadcrumbs">
					
			 @if($house->issale==1)
			{{link_to_route(Str::lower($house->city->city)."-houses-sale-$house->zip","Houses, Condos for Sale in
				".$house->city->city .", ". $house->zip, array(), 
			array('class'=>'aBreadcrumbs '));}}
			   @endif



			 @if($house->issale==0)
			{{link_to_route(Str::lower($house->city->city)."-houses-rent-".$house->zip,"Houses/Apartments for Rent in 
				".$house->city->city .", ". $house->zip, array(), 
			array('class'=>'aBreadcrumbs '));}}
			@endif

	
		</nav>
			<div class="row">
			
			

				@if(isset($house->address))
				<div class="large-9 columns">
					<h1 class="oneHouseAddress label radius">{{$house->address}}</h1>
					&nbsp &nbsp
					
										
					<ul class="inline-list">

					@foreach ($house->saletypes as $type)
						
						@if ($type->pivot->saletype_id==1)
						<li class="label radius foreclosureLabel">
							Foreclosure <br/>
						</li>
						@endif

						@if ($type->pivot->saletype_id==2)
						<li class="label radius shortsaleLabel">
							Bank Owned <br/>
						</li>

						@endif
						
						@if ($type->pivot->saletype_id==3)
						<li class="label radius shortsaleLabel">
							Short Sale <br/>
						</li>
						@endif
						@endforeach

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
					<img width="100px" alt="{{$house->city->city}} Home for 
					@if ($house->issale==1)
						Sale 
					@else
						Rent 
					@endif
View {{$i}}" height="50px" src="{{url('comp/img/images/'.$house->id.'/'.$i.'.jpg')}}"></a>
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


