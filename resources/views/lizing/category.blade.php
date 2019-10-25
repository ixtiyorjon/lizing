@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/12.png');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.Technique category')</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb"  style="padding-bottom: 0">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> @lang('messages.Главная')</a></li>
          <li class="breadcrumb-item active" aria-current="page">@lang('messages.Technique category')</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Technique  Start ##### -->
<section class="technique techniqueProList bg-white mt-50 mb-50">
    <div class="container">
        <div class="section-heading"> 
            <h2>@lang('messages.<span> Leasing </span> Technique')</h2>
        </div>
        <div class="row">
        
        @foreach($texnics_category as $value)
          <div class="col-12 col-md-4 col-lg-2">
                <div class="mytenolog">
                  <a href="/texnics/{{ $value->slug }}">
                    <div class="imgTava imt1" style="-webkit-mask: url({{ Voyager::image($value->image) }});
                                                      mask: url({{ Voyager::image($value->image) }});
                                                      -webkit-mask-size: cover;"></div>
                    <div class="titleTehno">{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</div>
                  </a>
                </div>
            </div>
          @endforeach
            
        </div>
    </div>  
</section>
<!-- ##### Technique end ##### -->

@endsection