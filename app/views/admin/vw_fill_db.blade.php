@extends('layouts.master')
@section('content')
<!-- 
//LOCATION: remax/public 
-->
<div class="mainContent">
	<div class="row">
		<div class="large-12 columns userPanel">
			{{ Form::open(array('route' => 'admin-db-store')) }}
			<ol>
				<li>
					{{ Form::label('agents', 'Agent') }}
					<select id="agents" name="agents">
						@foreach($m_agents as $m_agent)
					<option value="{{$m_agent->id}}">
       				{{$m_agent->firstname}} {{$m_agent->lastname}}
    				</option>	
						@endforeach
					</select>




				</li>

				<li>
					{{ Form::label('salediningroom', 'Salediningroom') }}
					<select id="salediningroom" name="salediningroom">
						@foreach($salediningrooms as $salediningroom)
					<option value="{{$salediningroom->id}}">
       				{{$salediningroom->diningroomsize}} {{$salediningroom->diningroomfeatures}}
    				</option>	
						@endforeach
					</select>
				</li>

				<li>
					{{ Form::label('salelivingroom_id', 'Salelivingroom id:') }}
					{{ Form::text('salelivingroom_id') }}
				</li>

				<li>
					{{ Form::label('saleschool_id', 'Saleschool id:') }}
					{{ Form::text('saleschool_id') }}
				</li>

				<li>
					{{ Form::label('salepropertyinfo_id', 'Salepropertyinfo id:') }}
					{{ Form::text('salepropertyinfo_id') }}
				</li>

				<li>
					{{ Form::label('salepublicrecord_id', 'Salepublicrecord id:') }}
					{{ Form::text('salepublicrecord_id') }}
				</li>

				<li>
					{{ Form::label('salefamroom_id', 'Salefamroom id:') }}
					{{ Form::text('salefamroom_id') }}
				</li>

				<li>
					{{ Form::label('salelaundryroom_id', 'Salelaundryroom id:') }}
					{{ Form::text('salelaundryroom_id') }}
				</li>

				<li>
					{{ Form::label('saleexerciseroom_id', 'Saleexerciseroom id:') }}
					{{ Form::text('saleexerciseroom_id') }}
				</li>

				<li>
					{{ Form::label('salebasement_id', 'Salebasement id:') }}
					{{ Form::text('salebasement_id') }}
				</li>

				<li>
					{{ Form::label('saleutilityroom_id', 'Saleutilityroom id:') }}
					{{ Form::text('saleutilityroom_id') }}
				</li>

				<li>
					{{ Form::label('salewalkincloset_id', 'Salewalkincloset id:') }}
					{{ Form::text('salewalkincloset_id') }}
				</li>

				<li>
					{{ Form::label('saleotherroom_id', 'Saleotherroom id:') }}
					{{ Form::text('saleotherroom_id') }}
				</li>

				<li>
					{{ Form::label('saleinteriorfeature_id', 'Saleinteriorfeature id:') }}
					{{ Form::text('saleinteriorfeature_id') }}
				</li>

				<li>
					{{ Form::label('saleappliance_id', 'Saleappliance id:') }}
					{{ Form::text('saleappliance_id') }}
				</li>

				<li>
					{{ Form::label('salegarageandparking_id', 'Salegarageandparking id:') }}
					{{ Form::text('salegarageandparking_id') }}
				</li>

				<li>
					{{ Form::label('salebuildingconstruction_id', 'Salebuildingconstruction id:') }}
					{{ Form::text('salebuildingconstruction_id') }}
				</li>

				<li>
					{{ Form::label('saleutility_id', 'Saleutility id:') }}
					{{ Form::text('saleutility_id') }}
				</li>

				<li>
					{{ Form::label('salehomefeature_id', 'Salehomefeature id:') }}
					{{ Form::text('salehomefeature_id') }}
				</li>

				<li>
					{{ Form::label('saleamenity_id', 'Saleamenity id:') }}
					{{ Form::text('saleamenity_id') }}
				</li>

				<li>
					{{ Form::label('propertytype_id', 'Propertytype id:') }}
					{{ Form::text('propertytype_id') }}
				</li>

				<li>
					{{ Form::label('status_id', 'Status id:') }}
					{{ Form::text('status_id') }}
				</li>

				<li>
					{{ Form::label('saleexteriorfeature_id', 'Saleexteriorfeature id:') }}
					{{ Form::text('saleexteriorfeature_id') }}
				</li>

				<li>
					{{ Form::label('salebedroom_id', 'Salebedroom id:') }}
					{{ Form::text('salebedroom_id') }}
				</li>

				<li>
					{{ Form::label('salebathroom_id', 'Salebathroom id:') }}
					{{ Form::text('salebathroom_id') }}
				</li>

				<li>
					{{ Form::label('salekitchen_id', 'Salekitchen id:') }}
					{{ Form::text('salekitchen_id') }}
				</li>

				<li>
					{{ Form::label('listing', 'Listing:') }}
					{{ Form::text('listing') }}
				</li>

				<li>
					{{ Form::label('details', 'Details:') }}
					{{ Form::textarea('details') }}
				</li>

				<li>
					{{ Form::label('bedrooms', 'Bedrooms:') }}
					{{ Form::text('bedrooms') }}
				</li>

				<li>
					{{ Form::label('bathrooms', 'Bathrooms:') }}
					{{ Form::text('bathrooms') }}
				</li>

				<li>
					{{ Form::label('halfbathroom', 'Halfbathroom:') }}
					{{ Form::text('halfbathroom') }}
				</li>

				<li>
					{{ Form::label('size', 'Size:') }}
					{{ Form::text('size') }}
				</li>

				<li>
					{{ Form::label('year', 'Year:') }}
					{{ Form::text('year') }}
				</li>

				<li>
					{{ Form::label('address', 'Address:') }}
					{{ Form::textarea('address') }}
				</li>

				<li>
					{{ Form::label('price', 'Price:') }}
					{{ Form::text('price') }}
				</li>

				<li>
					{{ Form::label('pricesqft', 'Pricesqft:') }}
					{{ Form::text('pricesqft') }}
				</li>

				<li>
					{{ Form::submit() }}
				</li>
			</ol>
			{{ Form::close() }}

		</div>
	</div>
</div>
@stop