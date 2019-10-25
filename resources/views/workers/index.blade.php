@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.ishchilar')</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container d-flex justify-content-between">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> @lang('messages.Главная')</a></li>
          <li class="breadcrumb-item active" aria-current="page">@lang('messages.ishchilar')</li>
        </ol>
      </nav>
      <div class="print">
         <button class="print-button"><span class="print-icon"></span><p>@lang('messages.Print')</p></button>
      </div>
     
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Team Member Area Start ##### -->
  <section class="team-member-area mb-50 pukav" >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading">
             <h2 class=" bg-white">@lang('messages.ishchilar')</h2>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-8" id="printTable">

        @foreach($model as $value)
          <div class="row mb-30">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="single-team-member wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-img">
                      <img src="{{ Voyager::image($value->image) }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-8 bg-padd">
                  <div class="contact-info my-por-ifon">
                    <div class="imiya"> {{ $value->getTranslatedAttribute('name',App::getLocale()) }}</div>
                    <div class="vaki"> {{ $value->getTranslatedAttribute('lavozim',App::getLocale()) }}</div>
                    <div class="stan"> @lang('messages.Reception days'): {{ $value->getTranslatedAttribute('qabul_kuni',App::getLocale()) }}</div>
                    @if($value->email)
                    <div class="stan"> @lang('messages.Email address'):   {{ $value->email }} </div>
                    @endif
                    <div class="stan"> @lang('messages.Телефон'): {{ $value->tel }}</div>
                  </div>
                </div>
            </div>
          @endforeach
          {{ $model->links() }}

        </div>

        <div class="col-12 col-sm-12 col-lg-4">
          {{ menu('Меню справа','left_block.index') }}
        </div>

      </div>


       


    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->

@endsection