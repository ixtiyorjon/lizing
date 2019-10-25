@extends('voyager::master')

@section('css')
	@include('admin.include.style')
@stop

@section('content')


<div class="container">
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Yangi Shartnoma kiritish
	</button>
	<h4 >
		<span style="color: #000; font-weight: bold;">
			{{ $treaty->treaty_number }} | {{ $treaty->treaty_name }}
		</span> 
		shartnomaning to'lovlar ro'yhati
	</h4>
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col" class="td1">Sanadan</th>
		      <th scope="col" class="td1">Sanagacha</th>
		      <th scope="col" class="td1">to'lanishi kerak (sum)</th>
		      <th scope="col" class="td1">To'langan sana</th>
		      <th scope="col" class="td1">To'langan (sum)</th>
		      <th scope="col" class="td1">Qoldiq</th>
		      <th class="td3">MVC</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(count($model)==0)
	          <tr scope="row"><th colspan="8" style="text-align: center;">Malumot yo`q</th></tr>
	        @endif
		  	<?php $i=1; foreach($model as $value) : ?>
			    <tr>
			      <th scope="row">{{ $i }}</th>
			      <td class="td1">
			      	<span>{{ $value->date_from }}</span>
		              <div class="form-group" style="display: none" id="{{ $value->i }}date_from">
		                <input class="form-control" type="text" name="date_from" id="{{ $value->id }}date_from_v" value="{{ $value->date_from }}">
		              </div>
			      	
			      </td>
			      <td class="td1">{{ $value->date_to }}</td>
			      <td class="td1 tolanishi_kk">{{ $value->to_be_paid }}</td>
			      <td class="td1">{{ $value->date_payment }}</td>
			      <td class="td1 tolangan_sum">{{ $value->paid }}</td>
			      <td class="td1 qoldiq_summ">{{ $value->paid-$value->to_be_paid }}</td>
			      <td class="td3">
			      	@include('admin.user-inn.include.buttons', ['url'=>'/admin/payments/'.$value->id])
			      </td>
			    </tr>
			<?php $i++; endforeach ?>
		  </tbody>
		  <tfoot style="background: #ccc;">
			  <th scope="col" style="font-weight: bold;">#</th>
		      <th scope="col" class="td1"></th>
		      <th scope="col" class="td1"></th>
		      <th scope="col" class="td1" style="font-weight: bold;" id="tolanishi_kk"></th>
		      <th scope="col" class="td1"></th>
		      <th scope="col" class="td1" style="font-weight: bold;" id="tolangan_sum_n"></th>
		      <th scope="col" class="td1" style="font-weight: bold;" id="qoldiq_summ_n"></th>
		      <th class="td3">#</th>
		  </tfoot>	
		</table>
<a href="/admin/treaties/list/{{ $user_id }}" class="btn btn-primary btn-lg">Orqaga</a>
	</div>


@include('admin.payments.include.modal_dialog',['id'=>$treaty->id,'treaty'=>$treaty])
@section('javascript')
	@include('admin.include.script')
	{{-- @include('admin.treaties.include.script') --}}
@stop
@stop