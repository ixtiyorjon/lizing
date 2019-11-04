{{-- @extends('voyager::master')

@section('content') --}}
		<div class="container">
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col" class="td1">Техника ( en )</th>
		      <th scope="col" class="td1">Техника ( ru )</th>
		      <th scope="col" class="td1">Техника ( uz )</th>
		      <th scope="col" class="td1">Техника ( uzk )</th>
		      <th scope="col" class="td1">Фотографии</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    	<td>{{ $model->getTranslatedAttribute('name','en') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('name','ru') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('name','uz') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('name','uzk') }}</td>
		    	<td>
		    		@foreach(json_decode($model->image) as $image1)
			      		<img width="50px" height="50px" src="/storage/{{ str_replace('public','',$image1) }}">
			      	@endforeach
		    	</td>
		    </tr>
		  </tbody>
		</table>
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col" class="td1">Стоимость обю</th>
		      <th scope="col" class="td1">Сумма аванса</th>
		      <th scope="col" class="td1">Аванс</th>
		      <th scope="col" class="td1">годовая маржа</th>
		      <th scope="col" class="td1">Срок лизинга</th>
		      <th scope="col" class="td1">Доставка</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    	<td>{{ $model->narxi }}</td>
		    	<td>{{ $model->avans_summ }}</td>
		    	<td>{{ $model->avans }}</td>
		    	<td>{{ $model->yillik_foiz }}</td>
		    	<td>{{ $model->muddat }}</td>
		    	<td>{{ $model->dostavka }}</td>
		    </tr>
		  </tbody>
		</table>
		@if(!Request::ajax())
		<a href="/admin/texnics-subcategory" class="btn btn-success">назад</a>
		@endif
		<button type="button" class=" btn btn-success ozgartirish" data-dismiss="modal" aria-label="Close">закрыта</button>  
		<a href="/admin/texnic/{{ $model->id }}/edit" class="btn btn-primary ozgartirish pull-right"><i class="glyphicon glyphicon-pencil"></i>Изменение</a>
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