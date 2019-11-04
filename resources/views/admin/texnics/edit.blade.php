{{-- @extends('voyager::master')

@section('content') --}}

	<div class="container">
		<form action="/admin/texnic/{{ $model->id }}" method="POST" enctype="multipart/form-data">
    	@csrf
    	<input type="hidden" name="_method" value="PUT">
    	<div class="form-group col-lg-3">
			    <label for="email">Наименование тех. ( en ):</label>
			    <input type="text" class="form-control" required name="name_en" value="{{ $model->getTranslatedAttribute('name','en') }}">
			  </div>
			  <div class="form-group col-lg-3">
			    <label for="email">Наименование тех. ( ru ):</label>
			    <input type="text" class="form-control" required name="name_ru" value="{{ $model->getTranslatedAttribute('name','ru') }}">
			  </div>
			  <div class="form-group col-lg-3">
			    <label for="email">Наименование тех. ( uz ):</label>
			    <input type="text" class="form-control" required name="name_uz" value="{{ $model->getTranslatedAttribute('name','uz') }}">
			  </div>
			  <div class="form-group col-lg-3">
			    <label for="email">Наименование тех. ( uzk ):</label>
			    <input type="text" class="form-control" required name="name_uzk" value="{{ $model->getTranslatedAttribute('name','uzk') }}">
			  </div>
			  <div class="form-group col-lg-12">
		        {{-- <img width="100px" src="{{ Voyager::image($model->image) }}"/><br> --}}
			    <label for="pwd">Фотографии (может быть несколько):</label>
			    <input type="file" class="form-control" name="image[]" enctype="multipart/form-data" multiple>
			    <input type="hidden" class="form-control" name="hidden_image" value="{{ $model->image }}">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Стоимость оборудования ( сум ):</label>
			    <input type="text" class="form-control" name="narxi" required placeholder="например: 585 210 000" value="{{ $model->narxi }}">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Сумма аванса ( сум ):</label>
			    <input type="text" class="form-control" name="avans_summ" required placeholder="например: 117 042 000" value="{{ $model->avans_summ }}">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Аванс ( % ):</label>
			    <input type="text" class="form-control" name="avans" required placeholder="например: 20%" value="{{ $model->avans }}">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">годовая маржа ( % ):</label>
			    <input type="text" class="form-control" name="yillik_foiz" required placeholder="например: 7%" value="{{ $model->yillik_foiz }}">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Срок лизинга ( год ):</label>
			    <input type="text" class="form-control" name="muddat" required placeholder="например: 7,10,12" value="{{ $model->muddat }}">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Доставка оборудования ( день ):</label>
			    <input type="text" class="form-control" name="dostavka" required placeholder="например: 120" value="{{ $model->dostavka }}">
			  </div>
			  <div class="modal-footer">
			  <button type="submit" class="btn btn-primary">Сохранить</button>
			</div>
		</form>
	</div>

{{-- @stop --}}