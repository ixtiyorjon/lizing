@extends('voyager::master')

@section('css')
	@include('admin.include.style')
@stop

@section('content')

<div class="container">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Navbat Kiritish
	</button>
	<br><br>
	<table id="dtBasicExample" class="table table-striped table-hover table-sm table-bordered" cellspacing="0" width="100%">
		<thead>
		  	<tr>
		      <th scope="col">#</th>
		      <th scope="col" class="td">Viloyat</th>
		      <th scope="col" class="td">Tuman</th>
		      <th class="td th-sm">Lizing oluvchi</th>
		      <th class="td">sana</th>
		      <th class="td">texnika soni</th>
		      <th id="nosort" class="td th-sm">
		      	<label for="email">Status:</label>
		      	<form action="/admin/online-order/sort" method="POST">
		        	@csrf
			      	<select class="form-control status" name="status" onchange="submit()">
			      		<option value="" disabled selected>Tanlang</option>
			      		<option {{ ($status=='all')?'selected':'' }} value="all">Barchasi</option>
			      		<option {{ ($status=='active')?'selected':'' }} value="active">Onlayn Navbat</option>
			      		<option {{ ($status=='inactive')?'selected':'' }} value="inactive">Navbatdan tashqari</option>
			      	</select>
		      	</form>
		      </th>
		      {{-- <th class="td th-sm">MVC</th> --}}
		    </tr>
		</thead>
		<tbody>
		    <?php $i=1; foreach($model as $value) : ?>
		    <tr>
		      <th scope="row">{{ $i }}</th>
		      <td class="td">
		      	<?php $m=\App\Region::find($value->viloyat); echo $m->region_uz ?>
		      	</td>
		      <td class="td">
		      	<?php $m=\App\City::find($value->tuman); echo $m->city_uz ?>
		      </td>
		      <td class="td">{{ $value->nomi }}</td>
		      <td class="td">{{ $value->date }}</td>
		      <td class="td">{{ $value->number }}</td>
		      <td class="td">
		      	<form action="/admin/online-order/status" method="POST">
		        	@csrf
		        	<input type="hidden" name="id" value="{{ $value->id }}">
		        	<input type="hidden" name="holat" value="{{ $status }}">
		      		<input type="checkbox" class="custom-control-input statusChec" name="status" {{ ($value->given=='active')?'checked':'' }} onclick="submit()">
		      	</form>
		      </td>
		      {{-- <td class="td3">
		      	@include('admin.include.buttons', ['url'=>'/admin/online-order/'.$value->id])
		      </td> --}}
		    </tr>
		<?php $i++; endforeach ?>
		</tbody>
		<tfoot>
		    <tr>
		      <th>#</th>
		      <th>Viloyat</th>
		      <th>Tuman</th>
		      <th>Lizing oluvchi</th>
		      <th>sana</th>
		      <th>texnika soni</th>
		      <th>Status</th>
		      {{-- <td>MVC</td> --}}
		    </tr>
		</tfoot>
	</table>
	
</div>
@include('admin.online_order.include.modal_dialog',['cat_url'=>'/admin/online_order','subcat_url'=>'/admin/online_order'])
@section('javascript')
	@include('admin.online_order.include.script')
@stop
@stop
