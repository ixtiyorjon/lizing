{{-- @extends('voyager::master')

@section('content') --}}

	<div class="container">
		<form action="/admin/texnics-category/{{ $model->id }}" method="POST" enctype="multipart/form-data">
    	@csrf
    	<input type="hidden" name="_method" value="PUT">
		  <div class="form-group col-lg-6">
		    <label for="email">Название категории ( en ):</label>
		    <input required type="text" class="form-control" name="title_en" id="title_en" value="{{ $model->title }}">
		  </div>
		  <div class="form-group col-lg-6">
		    <label for="email">Название категории ( ru ):</label>
		    <input required type="text" class="form-control" name="title_ru" id="title_ru" value="{{ $model->getTranslatedAttribute('title','ru') }}">
		  </div>
		  <div class="form-group col-lg-6">
		    <label for="email">Название категории ( uz ):</label>
		    <input required type="text" class="form-control" name="title_uz" id="title_uz" value="{{ $model->getTranslatedAttribute('title','uz') }}">
		  </div>
		  <div class="form-group col-lg-6">
		    <label for="email">Название категории (uzk):</label>
		    <input required type="text" class="form-control" name="title_uzk" id="title_uzk" value="{{ $model->getTranslatedAttribute('title','uzk') }}">
		  </div>
		  <div class="form-group col-lg-12">
	        <img width="100px" src="{{ Voyager::image($model->image) }}"/><br>
		    <label for="pwd">картина:</label>
		    <input type="file" class="form-control" name="image" value="{{ $model->image }}">
		    <input type="hidden" class="form-control" name="hidden_image" value="{{ $model->image }}">
		  </div>
		  <div class="modal-footer col-lg-12" style="padding: 15px;">
		  	<button type="button" class="pull-left btn btn-success ozgartirish" data-dismiss="modal" aria-label="Close">закрытие</button>
		  	{{-- <a href="/admin/texnics-category" class="btn btn-primary">Orqaga</a> --}}
		  	<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i>  сохранение</button>
		</div>
		</form>
	</div>

{{-- @stop --}}