<div class="container">

	<h4 style="margin-top: -25px;">
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
			      <td class="td1">{{ $value->to_be_paid }} sum</td>
			      <td class="td1">{{ $value->date_payment }}</td>
			      <td class="td1">{{ $value->paid }} sum</td>
			      <td class="td1">{{ $value->paid-$value->to_be_paid }}</td>
			      <td class="td3">
			      	<span id="{{ $value->id }}mvc">
			      		<a href="/admin/payments/{{ $value->id }}/edit" class="btn btn-info ozgartirish"><i class="glyphicon glyphicon-pencil"></i></a>
			      		<button class="korish" id="#{{ $value->id }}"><i class="glyphicon glyphicon-pencil"></i></button>
	                <form action="/admin/payments/{{ $value->id }}" method="POST" class="ochirish1">
						<input name="_method" type="hidden" value="DELETE">
						@csrf
					    <button onclick="return confirm('Siz ushbu malumotni rostdan ham o\'chirmoqchimisiz ?');" type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
					</form>
	              </span>
	              <span id="{{ $value->id }}edit_del" style="display: none">
	                <a href="/admin/params/edit/{{ $value->id }}" class="saqlash" id="#{{ $value->id }}">
	                	<i class="glyphicon glyphicon-floppy-disk"></i>
	                </a>
	                <a class="bekor" id="#{{ $value->id }}">
	                	<i class="glyphicon glyphicon-remove"></i>
	                </a>
	              </span>
			      </td>
			    </tr>
			<?php $i++; endforeach ?>
		  </tbody>
		</table>

	</div>
