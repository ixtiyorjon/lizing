@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.qonun')@lang('messages.ustaf')</h2>
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
          <li class="breadcrumb-item active" aria-current="page">@lang('messages.qonun')@lang('messages.ustaf')</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Blog Area Start ##### -->
  <section class="famie-blog-area ym-news">
    <div class="container">
      
      <div class="row">
        <!-- Posts Area -->
        <div class="col-12 col-md-8">
            <div class="section-heading text-left">
                <h2 class=" bg-white"><span>@lang('messages.qonun')</span>@lang('messages.ustaf')</h2>
            </div>

            <div class="row mb-30">

              @foreach($model as $value)
                <div class="col-12">
                    <div class="qoust mb-30 wow fadeInUp" data-wow-delay="200ms">
                          <div class="qoust_info">
                              {{ $value->getTranslatedAttribute('title',App::getLocale()) }}
                          </div>
                          <ul class="d-flex justify-content-end mt-15">
                            <li>
                              <a><i class="calendar"></i>{{ date("j F Y", strtotime($value->date)) }}</a>
                            </li>
                            <li>
                              @php $icons=json_decode($value->file) @endphp
                              @foreach($icons as $icon)
                              <a href="{{ Voyager::image($icon->download_link) }}"><i class="fa fa-print"></i>@lang('messages.Download')</a>
                              @endforeach
                            </li>
                            <li>
                              <a href="/usefull-staff/{{ $value->id }}/more" target="_blank"><i class="fa fa-angle-right"></i>@lang('messages.Read More')</a>
                            </li>
                          </ul>
                    </div>
                </div>
              @endforeach 

            </div>

            <!-- pagination -->
            <nav>
              {{ $model->links() }}
            </nav>
        </div>

        <!-- Sidebar Area -->
        <div class="col-12 col-md-4">
           {{ menu('Меню справа','left_block.index') }}
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->

@endsection