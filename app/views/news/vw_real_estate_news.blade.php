@extends('layouts.master')
@section('content')
<!-- //LOCATION: remax/public
-->
<div id="mainContent">
	<div class="row">
		<div class="large-12 columns menues">
			<div class="newsContent">

				<h1>Real Estate News</h1>		
				<hr/>
				<br/>
				@foreach($news as $n)
				<h4>{{$n->title}}</h4>
				<hr/>
				<p>{{$n->body}}</p>
			</br>
			@endforeach
		</div>				
	</div>
</div>
</div>
@stop
