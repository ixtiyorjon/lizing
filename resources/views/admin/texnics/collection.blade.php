@foreach($model as $value)
	<option value="{{ $value->id }}">{{ $value->name }}</option>
@endforeach