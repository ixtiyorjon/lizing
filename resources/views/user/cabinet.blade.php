@extends('layouts.main')


@section('content')

	    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/12.png');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>@lang('messages.User Cabinet')</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> @lang('messages.Главная')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('messages.User Cabinet')</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### USER CABINET ##### -->
    <section class="usercabint-table fdb-block mt-3 mb-5" style="min-height: 350px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                       {{ Session::get('UserInn') }}
                        <span class="font-weight-light"> @lang('messages.List of INN contracts')</span>
                    </h4>
                    <div id="tblBtns"></div>
                    <hr />
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="nomer">#</th>
                                <th>@lang('messages.Contract Number')</th>
                                <th>@lang('messages.Contract name')</th>
                                <th>@lang('messages.Contract Date')</th>
                                <th>@lang('messages.Contract expiration')</th>
                                <th>@lang('messages.Contract Amount')</th>
                                <th>@lang('messages.The number of technicians')</th>
                                <th>@lang('messages.Payments')</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $i=1;?>
                        	@foreach($traty as $value)
	                            <tr>
	                                <td class="nomer"><?php echo $i; $i++; ?></td>
	                                <td>{{ $value->treaty_number }}</td>
	                                <td>{{ $value->treaty_name }}</td>
	                                <td>{{ $value->date }}</td>
	                                <td>{{ $value->date_end }}</td>
	                                <td>{{ $value->number }}</td>
	                                <td>{{ $value->price }}</td>
	                                <td>
	                                	<button id="{{ $value->id }}" type="button" class="btn btn-primary tratId" data-toggle="modal" data-target=".bd-example-modal-lg">@lang('messages.Payments')</button>
	                                </td>
	                            </tr>
	                        @endforeach
          
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### USER CABINET End ##### -->



    <div class="modal fade bd-example-modal-lg maytablaitsa" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modalititle">
                    @lang('messages.List of payments')
                </div>
                <div class="table-responsive">
					<img style='width: 80px;margin: 0 auto;display: block;' src='/img/ajax.gif' class='center'>
                </div>

            </div>
        </div>
    </div>


@stop