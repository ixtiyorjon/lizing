@if(count($model)==0)
	<option selected disabled>Bu kategoriya uchun quyi kategoriya kiritilmagan</option>
@endif
@foreach($model as $value)
	<option value="{{ $value->id }}">{{ $value->title }}</option>
@endforeach