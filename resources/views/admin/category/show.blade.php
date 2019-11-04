{{-- @extends('voyager::master')

@section('content') --}}
		<div class="container">
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col" class="td1">Категории  ( en )</th>
		      <th scope="col" class="td1">Категории  ( ru )</th>
		      <th scope="col" class="td1">Категории  ( uz )</th>
		      <th scope="col" class="td1">Категории  (uzk)</th>
		      <th scope="col" class="td1">картина</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    	<td>{{ $model->getTranslatedAttribute('title','en') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('title','ru') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('title','uz') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('title','uzk') }}</td>
		    	<td><img width="100px" src="{{ Voyager::image($model->image) }}"></td>
		    </tr>
		  </tbody>
		</table>
		@if(!Request::ajax())
		<a href="/admin/texnics-category" class="btn btn-success">назад</a>
		@endif
		<button type="button" class=" btn btn-success ozgartirish" data-dismiss="modal" aria-label="Close">закрыта</button>  
		<a href="/admin/texnics-category/{{ $model->id }}/edit" class="btn btn-primary ozgartirish pull-right"><i class="glyphicon glyphicon-pencil"></i>Изменение</a>
	</div>
{{-- @stop --}}
<script type="text/javascript">
	 $('.ozgartirish').click(function(e){
            e.preventDefault();
            $('#myModalkorish').modal('show')
            .find('#modalContent1')
            .load($(this).attr('href'));
        });
</script>