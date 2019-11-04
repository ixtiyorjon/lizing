@if(count($model)==0)
	<option selected disabled>Для этой категории нет подкатегории</option>
@endif
@foreach($model as $value)
	<option value="{{ $value->id }}">{{ $value->title }}</option>
@endforeach