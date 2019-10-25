@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.navbat')</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> @lang('messages.Главная') </a></li>
          <li class="breadcrumb-item active" aria-current="page"> @lang('messages.navbat')</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Team Member Area Start ##### -->
  <section class="team-member-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2 class=" bg-white"><span>@lang('messages.Leasing technique')</span> @lang('messages.Online queue')</h2>
                        <!-- <img src="img/core-img/decor.png" alt=""> -->
                    </div>
                </div>
            </div>

            <form>
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="inputState1">@lang('messages.Brand of machinery')</label>
                            <select id="inputStat1 category_id" class="form-control category_id" >
                                <option value="" disabled selected></option>
                                @foreach (\App\TexnicsCategory::get() as $item)
                                    <option value="{{ $item->id }}">{{ $item->getTranslatedAttribute('title',App::getLocale()) }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="inputState2">@lang('messages.The name of the technique'):</label>
                            <select id="texnics_id" class="form-control texnics_id">
                               
                            </select>
                        </div>
                    </div>
                </div>
                
            </form>
        <div  id="table">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">@lang('messages.Name of Provinces')</th>
                        <th scope="col">@lang('messages.Name of districts')</th>
                        <th scope="col">@lang('messages.Name of lessees')</th>
                        <th scope="col">@lang('messages.Date')</th>
                        <th scope="col">@lang('messages.Number of techniques')</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    @foreach($model as $value)
                        <tr>
                            <th scope="row"><?php echo $i; $i++;?></th>
                            <td class="td1"><?php $m=\App\Region::find($value->viloyat); echo $m->region_uz ?></td>
                            <td class="td2"><?php $m=\App\City::find($value->tuman); echo $m->city_uz ?></td>
                            <td class="td3">{{ $value->nomi }}</td>
                            <td class="td4">{{ $value->date }}</td>
                            <td class="td5">{{ $value->number }}</td>
                        </tr>
                    @endforeach
  
                </tbody>

            </table>

        </div>
        </div>
    </section>
  <!-- ##### Team Member Area End ##### -->
<input type="hidden" id="category" value="category">
@endsection