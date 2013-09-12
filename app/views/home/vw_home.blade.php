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
					<p>Remax 1st Class Realty is a <em>trustful Real Estate Company</em> located in <em>Skokie, IL</em>. We offer a comprehensive service in real estate. We can help to buy, sell or manage residential property. Remax 1st Class Realty will also help to find the right mortgage agent to get the best mortgage conditions as well as get all paper prepared by staff attorneys. We have successful experience in short sales and always have a great investment opportunities. Our main price range is from 35k till 500k, though we also have experience and listing in luxury market.</p>
					<p>Our first line districts are Skokie, Morton Grove, Evanston, Niles, Lincolnwood, Glenview, Park Ridge, Wilmette, Winnetka, Lake Forest, and the Northside of Chicago.</p>
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

		<div class="row">
			<div class="large-12 columns">	
				<div class="panel radius">
					<h3>Why Remax 1st Class Realty is worth to work with:</h3>
					<hr/>
					<ul class="ulWorkWith">
						<li>
							<p>we offer one stop service for home selling or purchase. We have long term partnerships with major banks and can negotiate the best possible deal. We can help you find the right specialist to get the lowest mortgage rate and move you to your new home during one week. Our clients always have all papers signed on time with all details covered.</p>
						</li>
						<li>
							<p>we have no hidden fees and as a Remax Representative, we are very flexible in commissions. We always prioritize the client interest and in some cases we work without commissions when they are obstacles to closing. Our main mission is client satisfaction and long term partnership.</p>
						</li>
						<li>
							<p>Remax 1st Class offers comprehensive service in real estate - we can help you avoid foreclosure without any influence on your credit score.</p>
						</li>
						<li>
							<p>we also can sell your residential property in the shortest time as we have a wide network of real estate partnerships in the area and our commissions are never the problem. We have a great experience in pre-sell preparation when small investments could bring the highest return.</p>
						</li>
						<li>
							<p>we always have the best options for investment opportunities in the area and we also have management experience.</p>
						</li>
						<li>
							<p>in 2012 we sold more than 100 residential properties for middle-class families and 40 of them directly from banks.</p>
						</li>
					</ul>
				</div>
			</div>		
		</div>

	</div>
	@stop

