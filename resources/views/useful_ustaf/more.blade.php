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
                    <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> @lang('messages.Главная')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $model->getTranslatedAttribute('title',App::getLocale()) }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="symbols fdb-block pt-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>{{ $model->getTranslatedAttribute('title',App::getLocale()) }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    @php $icons=json_decode($model->file) @endphp
                      @foreach($icons as $icon)
                      <a href="{{ Voyager::image($icon->download_link) }}" class="float-left" alt="Paris" width="100%" height="100%"><i class="fa fa-print"></i>@lang('messages.Download')</a>
                      @endforeach
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                            {{ $model->getTranslatedAttribute('body',App::getLocale()) }}
                        </strong>
                    </h4>

                </div>
            </div>
        </div>
    </section>

@stop


