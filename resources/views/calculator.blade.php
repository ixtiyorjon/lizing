@extends('layouts.main')

@section('content')

        <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/12.png');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>@lang('messages.Leasing calculator')</h2>
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
                    <li class="breadcrumb-item active" aria-current="page">@lang('messages.Leasing calculator')</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <!-- ##### Team Member Area Start ##### -->
    <section class="team-member-area mb-50 pukav">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white ka-title"><span>@lang('messages.Leasing payments calculator')</span></h2>
                    </div>
                </div>
            </div>

            <form>
                <div class="form-row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState1">@lang('messages.Brand of machinery')</label>
                            <select id="inputStat1" class="form-control category_id">
                                <option value="" disabled selected></option>
                                @foreach (\App\TexnicsCategory::get() as $item)
                                    <option value="{{ $item->id }}">{{ $item->getTranslatedAttribute('title',App::getLocale()) }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState2">@lang('messages.The name of the technique'):</label>
                            <select id="texnics_id" class="form-control texnika">
                               
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState3">@lang('messages.Cost of machinery'):(@lang('messages.ml, sum'))</label>
                            <select id="tex_narxi" class="form-control summa">
                                <option selected id="t_sum"></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState4">@lang('messages.Annual leasing rate'):(%)</label>
                            <select id="yillik_foiz" class="form-control">
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState3">@lang('messages.Leasing term'):</label>
                            <select id="muddat" class="form-control">
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState4">@lang('messages.Prepayment rate'):</label>
                            <select id="avans" class="form-control">
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState4">@lang('messages.Prepayment amount'):(@lang('messages.ml, sum'))</label>
                            <select id="avans_summ" class="form-control summa">
                                
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState3">@lang('messages.Доставка оборудования ( день )'):</label>
                            <select id="delivery" class="form-control summa">
                                
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState3">@lang('messages.Date of leasing the machinery'):</label>
                            <input id="datetime" type="date" class='datepicker-here form-control' placeholder="Выберите даты" />
                        </div>
                    </div>
                    <div class="col-12 three-buttons">
                        <button id="clearCalc" type="button" class="btn btn-light"  style="display: none">@lang('messages.Cleaning')</button>
                        <button type="button" id="exportBtn" onclick="fnExcelReport();" class="btn btn-primary" style="display: none">@lang('messages.Export to Excel')</button>
                        <button type="button" class="btn btn-success" id="calculation" >@lang('messages.Calculation')</button>
                        <iframe id="txtArea1" style="display:none"></iframe>
                    </div>

                </div>
            </form>


            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white ka-title"><span>@lang('messages.Leasing payments accounting and payment schedule')</span></h2>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-sm kanrez axad" id="headerTable">
                <thead>
                    <tr>
                        <th scope="col"> № </th>
                        <th scope="col">@lang('messages.Leasing payment is the date of payment')</th>
                        <th scope="col">@lang('messages.The residual value of the technique')</th>
                        <th scope="col">@lang('messages.Main debt')</th>
                        <th scope="col">@lang('messages.Margin')</th>
                        <th scope="col">@lang('messages.Lease payment amount every 3 months')</th>
                    </tr>
                </thead>
                <tbody class="table-mycolor" id="t_body">
                    
                </tbody>
            </table>
            </div>
        </div>
    </section>

@stop