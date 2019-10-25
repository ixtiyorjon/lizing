@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.about')</h2>
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
          <li class="breadcrumb-item active" aria-current="page">@lang('messages.about') </li>
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
              {{-- <h6>18 Aug 2018</h6> --}}
              <h3 class="post-title">{{ $model->getTranslatedAttribute('title',App::getLocale()) }}</h3>

              <p>
                {!! $model->getTranslatedAttribute('body',App::getLocale()) !!}
              </p>

              <img class="w-100 mb-30" src="{{ Voyager::image($model->image) }}" alt="">

          </div>
          <a href="{{ URL::previous() }}" class="btn famie-btn mt-30">@lang('messages.Orqaga')</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### News Details Area End ##### -->

@endsection