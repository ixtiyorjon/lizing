<option  disabled selected>@lang('messages.Please select')</option>
@foreach($model as $value)
	<option value="{{ $value->id }}">{{ $value->getTranslatedAttribute('name',App::getLocale()) }}</option>
@endforeach