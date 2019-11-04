@extends('voyager::master')

@section('page_header')
@stop
@section('css')
	@include('admin.include.style')
@stop

@section('content')

	<div class="container">
	<br>
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Добавить новую категорию
	</button>

		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col" class="td1">Название категории (uz)</th>
		      <th scope="col" class="td2">Подкатегория (uz)</th>
		      <th class="td3">MVC</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $i=1; foreach($model as $value): ?>
		    <tr>
			      <th scope="row">{{ $i }}</th>
			      <td class="td1">{{ $value->title }}</td>
			      <td class="td2">
			      	<ul class="list-group">
			      		<li class="list-group-item text-center add_li">
			      			<a data="{{ $value->id }}" type="button"  class="btn btn-primary btn-lg tex_cat_id" data-toggle="modal" data-target="#myModal1">Создать подкатегоря</a>
			      		</li>
			      		@foreach(\App\TexnicsSubcategory::getTexnics($value->id) as $tex_sub_cat)
							<li class="list-group-item">{{ $tex_sub_cat->title }} 
							  	<div class="pull-right">
						      	@include('admin.include.buttons1', ['id' => $tex_sub_cat->id])
						      </div>
						    </li>
						@endforeach
					</ul>
			      </td>
		      <td class="td3">
		      	@include('admin.include.buttons', ['url'=>'/admin/texnics-category/'.$value->id])
		      </td>
			<?php $i++; endforeach; ?>
		    </tr>
		  </tbody>
		</table>
		{{ $model->links() }}
	</div>

<!-- Modal -->
@include('admin.include.modal_dialogs',['cat_url'=>'/admin/texnics-category','subcat_url'=>'/admin/texnics-subcategory'])

@section('javascript')
	@include('admin.include.script')
@stop
@stop