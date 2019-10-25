@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.Contact')</h2>
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
          <li class="breadcrumb-item active" aria-current="page"> @lang('messages.Contact')</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### FAQ Area Start ##### -->
  <section class="contact-my fdb-block pt-0 mb-5">
    <div class="container p-0 pb-md-5">
      {!!$model->maps!!}
    </div>
    <div class="container">
      <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5">
          <h2>@lang('messages.Contact')</h2>
          <p class="lead">
            {!!$model->comment!!}
          </p>
  
  
          <p class="h6 mt-2">
            <strong>@lang('messages.Email'): </strong> <a href="mailto:{{ $model->email }}">{{ $model->email }}</a>
          </p>
          <p  class="h6 mt-2">
            <strong>@lang('messages.Адрес'): </strong> <a href="tel:{{ $model->address }}">{{ $model->address }}</a>
          </p>
          <p  class="h6 mt-2">
            <strong>@lang('messages.Телефон'): </strong> <a href="tel:{{ $model->phone }}">{{ $model->phone }}</a>
          </p>
          <p  class="h6 mt-2">
              <strong>@lang('messages.work_time'): </strong> <a>{{ $model->work_time }}</a>
          </p>
          

            
        </div>
  
        <div class="col-12 col-md-6 ml-auto pt-5 pt-md-0">
          <form action="/question" method="post">
            @csrf
            <div class="row">
              <div class="col">
                <input type="text" name="name" class="form-control" placeholder="@lang('messages.Your Name')">
              </div>
            </div>
  
            <div class="row mt-4">
              <div class="col">
                <input type="email" name="email" class="form-control" placeholder="@lang('messages.Your Email')">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <textarea class="form-control" name="body" rows="3" placeholder="@lang('messages.1')"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <button type="submit" class="btn btn-primary">@lang('messages.Send Message')</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### FAQ Area End ##### -->

@endsection