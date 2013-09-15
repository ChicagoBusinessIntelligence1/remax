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
					<p>Remax 1st Class Realty is a <em>trustful Real Estate Company</em> located in <em>Skokie, IL</em>. We offer a comprehensive service in real estate. We can help to buy, sell or manage residential property. Remax 1st Class Realty will also help to find the right mortgage agent to get the best mortgage conditions as well as get all paper prepared by staff attorneys. We have successful experience in short sales and always have a great investment opportunities. Our main price range is from 35k till 500k, though we also have experience and listings in luxury market.</p>
					<p>Our first line districts are: 
					<ul>
						<li>{{link_to_route('skokie-lists', 'Skokie');}}</li>

						<li>{{link_to_route('niles-lists', 'Niles');}}</li>

						<li>{{link_to_route('evanston-lists', 'Evanston');}}</li>

						<li>{{link_to_route('morton-grove-lists', 'Morton-Grove');}}</li>

						<li>{{link_to_route('glenview-lists', 'Glenview');}}</li>

						<li>{{link_to_route('park-ridge-lists', 'Park-Ridge');}}</li>

						<li>{{link_to_route('lincolnwood-lists', 'Lincolnwood');}}</li>

						<li>{{link_to_route('wilmette-lists', 'Wilmette');}}</li>

						<li>{{link_to_route('winnetka-lists', 'Winnetka');}}</li>

						<li>{{link_to_route('lake-forest-lists', 'Lake-Forest');}}</li>
						<li>Northside of Chicago</li>
						</div>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div class="panel">
					<h4 class="selectedProperty">Our selected property</h4>
					<ul data-orbit>
						<li> <a href="{{URL::to('search/1194')}}">
							<img src="{{url('comp/img/orbit/5.jpg')}}" alt="">
							<div class="orbit-caption">Glenview, IL 60025</div>
						</a>
						</li>
						<li> <a href="{{URL::to('search/1')}}">
							<img src="{{url('comp/img/orbit/1.jpg')}}" alt="">
							<div class="orbit-caption">Skokie, IL 60076   </div>
						</a>
						</li>
						<li>
						<a href="{{URL::to('search/16')}}">
							<img src="{{url('comp/img/orbit/4.jpg')}}" alt="">
							<div class="orbit-caption">Glenview, IL 60025</div>
						</a>
						</li>
						<li><a href="{{URL::to('search/4')}}">
							<img src="{{url('comp/img/orbit/2.jpg')}}" alt="">
							<div class="orbit-caption">Morton Grove, IL</div>
							</a>
						</li>
					</ul>
				</div>
			</div>	
		</div>

		</div>
	@stop

