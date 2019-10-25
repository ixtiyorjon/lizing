<table class="table table-bordered table-hover table-striped" id="example tbody_ajax">
	<thead>
	    <tr>
	        <th class="nomer">#</th>
	        <th>@lang('messages.From the date')</th>
	        <th>@lang('messages.Till date')</th>
	        <th>@lang('messages.Amount to be paid')</th>
	        <th>@lang('messages.Date paid')</th>
	        <th>@lang('messages.Amount paid')</th>
	        <th>@lang('messages.Balance')</th>
	    </tr>
	</thead>
	<tbody >
		@if(count($model)==0)
			<tr>
				<td colspan="7"><h2 align="center">@lang('messages.No references were found')</h2></td>
			</tr>
		@endif
		<?php $i=1; $t_old=0; $t=0; $qoldiq=0; $q=0; ?>
		@foreach($model as $value)
		    <tr>
		        <td class="nomer"><?php echo $i; $i++; ?></td>
		        <td>{{ date('j-M-Y', strtotime($value->date_from))  }}</td>
		        <td>{{ date('d-M-Y', strtotime($value->date_to))  }}</td>
		        <td>{{ $value->to_be_paid }} <?php $t_old=$t_old+$value->to_be_paid; ?></td>
		        <td>{{ date('d-M-Y', strtotime($value->date_payment))  }} </td>
		        <td>{{ $value->paid }} <?php $t=$t+$value->paid; ?></td>
		        <td> <?php $q=$value->paid-$value->to_be_paid; echo $q; $qoldiq=$qoldiq+$q; ?> </td>
		    </tr>
		@endforeach
		
	</tbody>
	<tfoot>
	    <tr>
	        <th class="nomer" colspan="3"> @lang('messages.Total')</th>
	        <th>{{ $t_old }}</th>
	        <th></th>
	        <th>{{ $t }}</th>
	        <th>{{ $qoldiq }}</th>
	    </tr>
	</tfoot>
</table>