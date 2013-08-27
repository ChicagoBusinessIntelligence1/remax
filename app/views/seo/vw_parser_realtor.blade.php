@extends('layouts.master')
@section('content')

<div class="mainContent">
	<div class="row">
		<div class="large-12 columns">
			<h1 class="docs header">Parser from realtor.com</h1>
			
			<div class="panel">
				
				{{Form::open(array('route' => 'parser-realtor-save', 'method'=>'POST'))}}
			
					{{Form::label('url', 'URL of page')}}
					{{Form::text('url', '', array('placeholder'=>'url', 'class'=>'className'))}}
					<br/>			
					{{Form::select('issale', array('9' => 'Please Choose!!!', '1' => 'Sale', '0' =>'Rent'));}}
					{{ Form::submit('Parse', array('class'=>'secondary button small radius'))}}
					
							


			{{Form::close()}}






			</div>
						
		</div>
	</div>
</div>
@stop

<!-- //LOCATION: remax/public/about 
-->