@foreach($model as $value)
	<option value="{{ $value->id }}">{{ $value->city_uz }}</option>
@endforeach