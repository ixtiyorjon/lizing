@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>{{ $model->getTranslatedAttribute('title',App::getLocale()) }}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="/news">@lang('messages.Новости')</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $model->getTranslatedAttribute('title',App::getLocale()) }}</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### News Details Area Start ##### -->
  <section class="news-details-area section-padding-0-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- News Details Content -->
          <div class="news-details-content">
              <h6><?php
                  $date = new \Carbon\Carbon($model->created_at);
                  echo (App::getLocale()=='uzk')?$date->locale('uz')->isoFormat('LL'):$date->locale(App::getLocale())->isoFormat('LL');
                ?></h6>
              <h3 class="post-title">{{ $model->getTranslatedAttribute('title',App::getLocale()) }}</h3>

              <img class="w-100 mb-30" src="{{Voyager::image($model->image)}}" alt="">
              <p>
               {!! $model->getTranslatedAttribute('body',App::getLocale()) !!}
              </p>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ##### News Details Area End ##### -->

@endsection