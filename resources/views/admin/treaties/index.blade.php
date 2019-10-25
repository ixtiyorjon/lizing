@extends('voyager::master')

@section('css')
	@include('admin.include.style')
@stop

@section('content')

	<div class="container">

	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Yangi Shartnoma kiritish
	</button>
<h3><span style="color: #000; font-weight: bold;">{{ $userid->inn }}</span> INN uchun kiritilgan sharnomalar ro'yhati</h3>
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col" class="td1">Shartnoma raqami</th>
		      <th scope="col" class="td1">Shartnoma nomi</th>
		      <th scope="col" class="td1">Shartnoma sanasi</th>
		      <th scope="col" class="td1">Shartnomaning tugash sanasi</th>
		      <th scope="col" class="td1">Shartnoma summasi</th>
		      <th scope="col" class="td1">Texnika soni</th>
		      <th class="td" width="400px">To'lovlar</th>
		      <th class="td3">MVC</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=1; foreach($model as $value) : ?>
			    <tr>
			      <th scope="row">{{ $i }}</th>
			      <td class="td1">{{ $value->treaty_number }}</td>
			      <td class="td1">{{ $value->treaty_name }}</td>
			      <td class="td1">{{ $value->date }}</td>
			      <td class="td1">{{ $value->date_end }}</td>
			      <td class="td1 tolanishi_kk">{{ $value->number }}</td>
			      <td class="td1 soni">{{ $value->price }}</td>
			      <td class="td" width="400px"><br>
			      	<p><a id="parametr" class="" href="/admin/payments/list/{{ $value->id }}/{{ $userid->id }}" >To'lovlar ro'yhati</a></p>
			      	<p><button type="button" class="btn btn-primary tolov_kiritish" id="{{ $value->id }}" data-toggle="modal" data-target="#myModal2">To'lov  kiritish</button></p>
			      </td>
			      <td class="td3">
			      	@include('admin.user-inn.include.buttons', ['url'=>'/admin/treaties/'.$value->id])
			      </td>
			    </tr>
			<?php $i++; endforeach ?>
		  </tbody>
		  <tfoot style="background: #ccc;">
			  <th scope="col" style="font-weight: bold;">#</th>
		      <th scope="col" class="td1"></th>
		      <th scope="col" class="td1"></th>
		      <th scope="col" class="td1"></th>
		      <th scope="col" class="td1" style="font-weight: bold;"></th>
		      <th scope="col" class="td1" style="font-weight: bold;" id="tolanishi_kk"></th>
		      <th scope="col" class="td1" style="font-weight: bold;" id="soni"></th>
		      <th class="td3"></th>
		      <th class="td3">#</th>
		  </tfoot>	
		</table>
<a href="/admin/user-inn" class="btn btn-primary btn-lg">Orqaga</a>
	</div>

@include('admin.treaties.include.modal_dialog',['id'=>$id,'name'=>$userid->inn])
@section('javascript')
	@include('admin.include.script')
	@include('admin.treaties.include.script')
@stop
@stop