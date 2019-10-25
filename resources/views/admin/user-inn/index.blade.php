@extends('voyager::master')

@section('css')
	@include('admin.include.style')
@stop

@section('content')

	<div class="container">

	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Yangi INN kiritish
	</button>
<br><br>
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col" style="width: 30px">#</th>
		      <th scope="col" class="td1" style="text-align: center;"><span></span>INN 	
		      	<input type="search" name="" autofocus class="form-control qidirish" style="width: 800px; display: inline-block;" placeholder="Search">
		      </th>
		      <th class="td3">Shartnoma</th>
		      <th class="td3">MVC</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; foreach($model as $value) : ?>
			    <tr>
			      <th scope="row" style="width: 30px">{{ $i }}</th>
			      <td class="td1" style="text-align: center;">{{ $value->inn }}</td>
			      <td class="td3" style="vertical-align: middle;">
			      	<a id="parametr" href="/admin/treaties/list/{{ $value->id }}" >Shartnoma</a>
			      </td>
			      <td class="td3">
			      	@include('admin.user-inn.include.buttons', ['url'=>'/admin/user-inn/'.$value->id])
			      </td>
			    </tr>
			<?php $i++; endforeach ?>
		  </tbody>
		</table>
{{ $model->links() }}
	</div>

@include('admin.user-inn.include.modal_dialog',['cat_url'=>'/admin/user-inn','subcat_url'=>'/admin/user-inn'])
@section('javascript')
	@include('admin.include.script')
@stop
@stop