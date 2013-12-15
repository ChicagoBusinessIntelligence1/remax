@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="innerContent">


	<div class="row">
		<div class="large-12 columns about-us">
			<div class="panel radius">
				<h1 class="welcome">Welcome to <br/>Remax 1st Class Realty</h1>
				<hr/>
				<p>Remax 1st Class Realty is a <em> Real Estate Company</em> located in <em>Skokie, IL</em>. We offer a comprehensive service in real estate. We can help to buy, sell or manage residential property, assist in finding the best mortgage conditions as well as find professional attorneys to get all paper prepared. We have successful experience in short sales and always have a great investment opportunities. Our main price range is from 35k till 500k, though we also have experience and listings in luxury market.</p>
				<p><em class="label secondary subheader">Our first line districts are:</em> 
					<ul class="no-bullet inline-list ulFirstLineDistricts">
						<li class="liFirstLineDistricts">{{link_to_route('skokie-lists', 'Skokie');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('niles-lists', 'Niles');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('evanston-lists', 'Evanston');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('morton-grove-lists', 'Morton-Grove');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('glenview-lists', 'Glenview');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('park-ridge-lists', 'Park-Ridge');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('lincolnwood-lists', 'Lincolnwood');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('wilmette-lists', 'Wilmette');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('winnetka-lists', 'Winnetka');}}</li>

						<li class="liFirstLineDistricts">{{link_to_route('lake-forest-lists', 'Lake-Forest');}}</li>
						<li class="liFirstLineDistricts">Northside of Chicago</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div class="panel">
					<h4 class="selectedProperty">Our selected property</h4>
					<ul data-orbit>
						<a href="{{URL::to('Homes-Sale-Skokie/4')}}">
							<img src="{{url('comp/img/images/8367689/1.jpg')}}" alt="">
							<div class="orbit-caption">Skokie, IL 60203</div>
						</a>
					</li>
									<li>
					<a href="{{URL::to('Homes-Sale-Skokie/14')}}">
						<img src="{{url('comp/img/images/8450115/1.jpg')}}" alt="">
						<div class="orbit-caption">Skokie, IL 60077</div>
					</a>
				</li>
				
		</ul>
	</div>
</div>	
</div>

</div>
@stop

