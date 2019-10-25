@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/12.png');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.Leasing technique')</h2>
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
          <li class="breadcrumb-item"><a href="/category-texnics">@lang('messages.Leasing technique')</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $model->getTranslatedAttribute('name',App::getLocale()) }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Team Member Area Start ##### -->
  <section class="team-member-area mb-50 pukav" >
    <div class="container">
      <div class="row">
          
          <div class="col-12 col-sm-12 col-lg-5">
                <div class="detail-gallery">
                    <div class="mid">
                      <?php $images= json_decode($model->image)?>
                      <img src="{{ Voyager::image($images[0]) }}" alt=""/>
                    </div>
                    <div class="gallery-control">
                    @if(count($images)>1)
                      <div class="carousel"  data-visible="4">
                          <ul class="list-none">
                            @foreach($images as $image)
                              <li><a href="#" class="active"><img src="{{ Voyager::image($image) }}" alt=""/></a></li>
                            @endforeach
                          </ul>
                      </div>
                      <a href="#" class="prev"><i class="icon ion-ios-arrow-thin-left"></i></a>
                      <a href="#" class="next"><i class="icon ion-ios-arrow-thin-right"></i></a>
                    @endif
                    </div>
                </div>
                  <!-- End Gallery -->
          </div>
          
          <div class="col-12 col-sm-12 col-lg-7">
              <div class="tinfo mb-30 listpro">
                  <div class="tinfoname">
                      {{ $model->getTranslatedAttribute('name',App::getLocale()) }}
                  </div>
                  <div class="tinfosumm">
                      <ul>  
                          <li>@lang('messages.Cost of machinery'):  <span>{{ $model->narxi }} @lang('messages.ml, sum')</span></li>
                          <li>@lang('messages.Advance amount'):   <span>{{ $model->avans_summ }} @lang('messages.ml, sum')</span></li>
                          <li>@lang('messages.Advance'):           <span>{{ $model->avans }}%</span></li>
                          <li>@lang('messages.Leasing term'):   <span>{{ $model->muddat }} @lang('messages.Up to the year')</span></li>
                          <li>@lang('messages.Delivery'):   <span>{{ $model->dostavka }} @lang('messages.day')</span></li>
                      </ul>
                      <!-- <div class="tinfopad d-flex tpaoku justify-content-between">
                          <a href="#" class="detailskonkulatr">Калькулятор</a>
                          <a href="#">Оформить</a>
                      </div> -->
                  </div>
              </div>
          </div>

          <div class="col-12 col-sm-12 col-lg-12">
              <table class="table table-striped tavatble">
                  <!-- <thead>
                    <tr>
                        <th colspan="2" >
                          <p>Трактор сельскохозяйственный Agroplus 410F с базовым оснащением </p>
                        </th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <th scope="col">@lang('messages.Parameter')</th>
                      <th scope="col">@lang('messages.Value')</th>
                    </tr>

                    @foreach(\App\TagList::where('texnics_id',$model->id)->get() as $value)
                      <tr>
                        <td>{{ $value->getTranslatedAttribute('name',App::getLocale()) }}</td>
                        <td>	{{ $value->value }}</td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
          </div>
            
    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->

@endsection