@extends('layouts.main')

@section('content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.Новости')</h2>
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
          <li class="breadcrumb-item active" aria-current="page">@lang('messages.Новости')</li>
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
          <div class="posts-area">
            <!-- Single Blog Post Area -->
            @foreach($model as $value)
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
              <h6><i class="calendar" style="  -webkit-mask: url(/img/calendar.svg);mask: url(/img/calendar.svg);"></i>
                <?php
                  $date = new \Carbon\Carbon($value->created_at);
                  echo (App::getLocale()=='uzk')?$date->locale('uz')->isoFormat('LLLL'):$date->locale(App::getLocale())->isoFormat('LLLL');
                ?>
              </h6>
              <a href="/news/more/{{ $value->slug }}" class="post-title">{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</a>
              <img src="{{ Voyager::image($value->image) }}" alt="" class="post-thumb">
              <p class="post-excerpt">
                {{ str_limit($value->getTranslatedAttribute('title',App::getLocale()),100) }}
              </p>
            </div>
            @endforeach
            <!-- Single Blog Post Area -->
          </div>
          <!-- pagination -->
          {{ $model->links() }}
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