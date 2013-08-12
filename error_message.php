@if(isset($messages))
<div class="panel">
	<ul>
	@foreach ($messages->all() as $message)
	<li>{{$message}}
		</li>
@endforeach
			</ul>
</div>