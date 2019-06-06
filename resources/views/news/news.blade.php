@extends('layouts.main')

@section('content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Новости</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Главная</a></li>
          <li class="breadcrumb-item active" aria-current="page">Новости</li>
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
              <h6><i class="calendar"></i>{{ $value->created_at->format('Y-m-d') }}</h6>
              <a href="/news/more/{{ $value->slug }}" class="post-title">{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</a>
              <img src="img/bg-img/26.jpg" alt="" class="post-thumb">
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
          <div class="sidebar-area">

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <form action="#" method="post" class="search-widget-form">
                <input type="search" class="form-control" placeholder="Search">
                <button type="submit"><i class="icon_search" aria-hidden="true"></i></button>
              </form>
            </div>

            <!-- Single Widget Area -->
              <div class="single-widget-area">
                <ul class="cata-list">
                  <li><a href="#">Умумий маълумотлар</a></li>
                  <li><a href="#">Матбуот хизмати</a></li>
                  <li><a href="#">Гувоҳномалар</a></li>
                  <li><a href="#">Марказий аппарат</a></li>
                  <li><a href="#">Овоз бериш</a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->


@endsection