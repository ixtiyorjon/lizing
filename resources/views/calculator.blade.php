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
                            <select id="inputState3" class="form-control summa">
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
                            <select id="inputState4" class="form-control summa">
                                <option>180 000,000</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState3">@lang('messages.Lease amount of the contract'):(@lang('messages.ml, sum'))</label>
                            <select id="inputState3" class="form-control summa">
                                <option>1 844 257,944</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="inputState3">@lang('messages.Date of leasing the machinery'):</label>
                            <input type='text' class='datepicker-here form-control' placeholder="Выберите даты" />
                        </div>
                    </div>
                    <div class="col-12 three-buttons">
                        <button type="button" class="btn btn-light">@lang('messages.Cleaning')</button>
                        <button type="button" class="btn btn-primary">@lang('messages.Export to Excel')</button>
                        <button type="button" class="btn btn-success">@lang('messages.Calculation')</button>
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
                <table class="table table-sm kanrez axad">
                <thead>
                    <tr>
                        <th scope="col">Техниканинг қолдиқ қиймати</th>
                        <th scope="col">Лизинг тўлови тўлашнинг охирги санаси</th>
                        <th scope="col">Кунлар сони</th>
                        <th scope="col">Техниканинг ҳар 3 ойлик лизинг даврига тўғри келадиган қиймати қисми</th>
                        <th scope="col">Ҳар 3 ойлик давр учун ҳисобланган лизинг фоизи суммаси миқдори</th>
                        <th scope="col">Ҳар 3 ойда тўланадиган лизинг тўлови миқдори</th>
                    </tr>
                </thead>
                <tbody class="table-mycolor">
                    <tr>
                        <td scope="row">1</td>
                        <td>720 000,000 </td>
                        <td>31.05.2019 </td>
                        <td>10 </td>
                        <td>1 970,983 </td>
                        <td>4 931,507</td>
                        <td>6 902,490</td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>720 000,000 </td>
                        <td>30.06.2019 </td>
                        <td>30 </td>
                        <td>5 912,948</td>
                        <td>14 794,521</td>
                        <td>20 707,469</td>
                    </tr>
                    <tr class="table-mycolor2">
                        <td scope="row">#</td>
                        <td>720 000,000 </td>
                        <td>30.06.2019 </td>
                        <td>40 </td>
                        <td>7 883,931</td>
                        <td>19 726,027</td>
                        <td>27 609,958</td>
                    </tr>
                </tbody>
                <tbody class="table-mycolor">
                    <tr>
                        <td scope="row">3</td>
                        <td>712 116,069 </td>
                        <td>31.07.2019</td>
                        <td>31</td>
                        <td>6 110,047</td>
                        <td>15 120,273 </td>
                        <td>21 230,319</td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td>712 116,069</td>
                        <td>31.08.2019 </td>
                        <td>31 </td>
                        <td>6 110,047</td>
                        <td>15 120,273</td>
                        <td>21 230,319</td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td>712 116,069</td>
                        <td>30.09.2019 </td>
                        <td>30 </td>
                        <td>5 912,948</td>
                        <td>14 632,522</td>
                        <td>20 545,470</td>
                    </tr>
                    <tr class="table-mycolor2">
                        <td scope="row">#</td>
                        <td>712 116,069</td>
                        <td>30.09.2019 </td>
                        <td>90 </td>
                        <td>18 133, 042</td>
                        <td>44 873 068‬</td>
                        <td>63 006 108</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </section>

@stop