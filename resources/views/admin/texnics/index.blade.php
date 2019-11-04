@extends('voyager::master')

@section('css')
	@include('admin.include.style')
@stop

@section('content')

	<div class="container">
		<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Новые техники
	</button>

		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col" class="td1">Название (ru)</th>
		      <th scope="col" class="td2">картина</th>
		      <th class="td3">Параметры</th>
		      <th class="td3">MVC</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; foreach($model as $value) : ?>
			    <tr>
			      <th scope="row">{{ $i }}</th>
			      <td class="td1">{{ $value->name }}</td>
			      <td class="td2">
			      	@foreach(json_decode($value->image) as $image1)
			      		<a target="_blank" href="/storage/{{ str_replace('public','',$image1) }}" style="text-decoration: none">
			      			<img height="40px" src="/storage/{{ str_replace('public','',$image1) }}">
			      		</a>
			      	@endforeach
			      </td>
			      <td class="td3" style="vertical-align: middle;">
			      	<a id="parametr" href="/admin/params/{{ $value->id }}" class="ozgartirish">Параметры</a>
			      </td>
			      <td class="td3" style="width: 105px;vertical-align: middle;">
			      	@include('admin.include.buttons', ['url'=>'/admin/texnic/'.$value->id])
			      </td>
			    </tr>
			<?php $i++; endforeach ?>
		  </tbody>
		</table>
		{{ $model->links() }}
	</div>
@include('admin.texnics.include.modal_dialog',['cat_url'=>'/admin/texnic','subcat_url'=>'/admin/texnic'])
@section('javascript')
	@include('admin.include.script')
@stop
@stop
