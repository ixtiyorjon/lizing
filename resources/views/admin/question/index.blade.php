@extends('voyager::master')

@section('page_header')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   --}}
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
@stop
@section('css')
	@include('admin.include.style')
@stop
@section('content')
	<div class="container">
		<h3>Savollar va Javoblar </h3><br>
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col" style="width: 10px">#</th>
		      <th scope="col" class="td" style="width: 50px">F I O</th>
		      <th scope="col" class="td" style="width: 50px">email</th>
		      <th class="td3">Savollar</th>
		      <th class="td3" style="width: 100px">Javoblar</th>
		      <th scope="col">MVC</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; foreach($model as $value) : ?>
			    <tr>
			      <th scope="row">{{ $i }}</th>
			      <td class="td1" style="width: 80px">
			      	@if($value->reading=='')<img src="/img/new.png" style="width: 20px">@endif
			      	{{ $value->name }}</td>
			      <td class="td1" style="width: 50px">{{ $value->email }}</td>
			      <td class="td1">{{ $value->body }}</td>
			      <td class="td1" style="width: 300px">
			      	<ul class="list-group">
			      		<li class="list-group-item text-center add_li">
			      			<button type="button" class="btn btn-primary answer" data-toggle="modal" data-target="#myModal" id="{{ $value->id }}" style="width: 100%; height: 30px;">Javob yozish</button>
			      		</li>
			      		@foreach(\App\Answer::getAll($value->id) as $answer)
							<li class="list-group-item">{{str_limit($answer->body,20) }}
							  	<div class="pull-right">
						      	@include('admin.question.include.buttons1', ['id' => $answer->id])
						      </div>
						    </li>
						@endforeach
					</ul>
			      </td>
			      <td class="td3">
			      	@include('admin.question.include.button', ['url'=>'/admin/question/'.$value->id,'value'=>$value])
			      </td>
			    </tr>
			<?php $i++; endforeach ?>
		  </tbody>
		</table>
		{{ $model->links() }}
	</div>
@include('admin.question.include.modal_dialog',['cat_url'=>'/admin/question','subcat_url'=>'/admin/question'])
@section('javascript')
	@include('admin.question.include.script')
@stop
@stop