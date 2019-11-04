@extends('layouts.main')

@section('content')
<div>
  <!-- ##### Hero Area Start ##### -->
  <div class="my-slidre">
        <div class="page-hero d-flex flex-column align-content-stretch flex-wrap">
            <div class=slider_main_block style="background-size:cover;background-position:bottom center;">
                <!--страхование имущества-->
              @foreach($slider as $value)
                <div>
                    <div class="container">

                        <div class="site-slider__content">
                            <div class="site-slider__title">{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</div>
                            <div class="site-slider__description">
                              {{ str_limit($value->getTranslatedAttribute('body',App::getLocale()),100) }}
                            </div>
                            <a href="/slider/{{ $value->slug }}" class="button-main-slider" tabindex="0">@lang('messages.Read More')</a>
                        </div>
                    </div>
                    <div class="bgslider"
                        data-mobile="{{ Voyager::image($value->image) }}"
                        data-tablet="{{ Voyager::image($value->image) }}"
                        data-desctop="{{ Voyager::image($value->image) }}">
                    </div>
                </div>
              @endforeach

            </div>
            <script type="text/javascript">
                if (document.querySelector('.slider_main_block') != null) {

                    if (window.innerWidth < 750) {
                        document.querySelector('.slider_main_block').setAttribute('style', 'background-image:url(' + document.querySelector('.slider_main_block').getAttribute('data-mobile') + '); background-size:cover;background-position:bottom center;')
                    }
                    if (window.innerWidth > 749 && window.innerWidth < 1185) {
                        document.querySelector('.slider_main_block').setAttribute('style', 'background-image:url(' + document.querySelector('.slider_main_block').getAttribute('data-tablet') + '); background-size:cover;background-position:bottom center;')
                    }
                    if (window.innerWidth > 1184) {
                        document.querySelector('.slider_main_block').setAttribute('style', 'background-image:url(' + document.querySelector('.slider_main_block').getAttribute('data-desktop') + ');background-size:cover;background-position:bottom center;')
                    }
                }
            </script>
            <!-- Area End [SliderMain] -->
        </div>
    </div>
    <div class="for-eliment">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">

                    <div class="rt-info-text-8">
                        <div class="service-box" data-icon-hv-color="#222222" data-title-hv-color="#1fa12e"
                            data-title-color="#ffffff">
                            <span><i style="color:#ffffff;" class="flaticon-green-1-nature"
                                    aria-hidden="true"></i></span>
                            <h3><a style="color:#ffffff" href="/calculator">@lang('messages.Kalkulyator')</a></h3>
                            <a class="btn-quote2 btn-light " href="/calculator">@lang('messages.Read More')</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">

                    <div class="rt-info-text-8">
                        <div class="service-box" data-icon-hv-color="#222222" data-title-hv-color="#1fa12e"
                            data-title-color="#ffffff">
                            <span><i style="color:#ffffff;" class="flaticon-green-2-nature"
                                    aria-hidden="true"></i></span>
                            <h3><a style="color:#ffffff" href="/online_order">@lang('messages.navbat')</a></h3>
                            <a class="btn-quote2 btn-light " href="/online_order">@lang('messages.Read More')</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">

                    <div class="rt-info-text-8">
                        <div class="service-box" data-icon-hv-color="#222222" data-title-hv-color="#1fa12e"
                            data-title-color="#ffffff">
                            <span><i style="color:#ffffff;" class="flaticon-green-4-nature"
                                    aria-hidden="true"></i></span>
                            <h3><a style="color:#ffffff" href="category-texnics">@lang('messages.Leasing technique')</a></h3>
                            <a class="btn-quote2 btn-light " href="category-texnics">@lang('messages.Read More')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- ##### Hero Area End ##### -->
  
  <!-- ##### News Area Start ##### -->
    <section class="news-area bg-gray p-50">
        <div class="container mb-3 bt-3">
            <div class="section-heading">
                <h2 class="bg-gray">@lang('messages.<span>Important </span> news')</h2>
                <!-- <img src="img/core-img/decor.png" alt=""> -->
            </div>
            <div class="row">
                <!-- Single Blog Area -->
              @foreach($news as $value)
                <div class="col-12  col-sm-6 col-md-6 col-lg-4">

                    <!-- Single Blog Area -->
                    <div class="single-blog-area style-2 wow fadeInUp" >
                        <img src="{{ Voyager::image($value->image) }}" alt="">
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="/news/more/{{ $value->slug }}" class="post-title">{{ str_limit($value->getTranslatedAttribute('title',App::getLocale()),45) }}</a>
                            <p>{{ str_limit($value->getTranslatedAttribute('body',App::getLocale()),120) }}</p>
                            <h6>{{ $value->created_at->format('d.m.Y') }}</h6>
                        </div>
                    </div>

                </div>
              @endforeach

            </div>
        </div>
        </div>
    </section>
    <!-- ##### News Area End ##### -->

  <!-- ##### Technique  Start ##### -->
  <section class="technique bg-white mt-50 mb-50">
      <div class="container">
          <div class="section-heading"> 
              <h2>@lang('messages.<span> Leasing </span> Technique')</h2>
              <!-- <img src="img/core-img/decor.png" alt=""> -->
          </div>
          <div class="row">

          @foreach ($texnic_category as $value)
            <div class="col-12 col-md-4 col-lg-3">
              <div class="mytenolog">
              <a href="/texnics/{{ $value->slug }}">
                  <div class="imgTava imt1" style="-webkit-mask: url({{Voyager::image($value->image)}});
                  mask: url({{Voyager::image($value->image)}})"></div>
                  <div class="titleTehno">{{$value->title}}</div>
                </a>
              </div>
            </div>
          @endforeach
            @if(count($texnic_category)>11)
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="{{ url('category-texnics') }}">
                      <div class="imgTava imt12"></div>
                      <div class="titleTehno">@lang('messages.More')</div>
                    </a>
                  </div>
              </div>
            @endif
          </div>
      </div>  
  </section>
  <!-- ##### Technique end ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area section-padding-100-0 pb-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Content -->
        <div class="col-12 col-md-8">
          <div class="about-us-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2><span>{{ $about->getTranslatedAttribute('title',App::getLocale()) }}</span></h2>
              <!-- <img src="img/core-img/decor.png" alt=""> -->
            </div>
            <p>{!! str_limit($about->getTranslatedAttribute('body',App::getLocale()),150) !!}</p>
            <a href="/about" class="btn famie-btn mt-30">@lang('messages.Read More')</a>
          </div>
        </div>

        <!-- Famie Video Play -->
        <div class="col-12 col-md-4">
          <div class="famie-video-play mb-100">
            <img src="img/bg-img/6.jpg" alt="">
            <!-- Play Icon -->
            <a href="{{ $about->video }}" class="play-icon"><i class="fa fa-play"></i></a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->

  
  <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax big-obuna"
        style="background-image: url('img/fon1.jpg');">
        <div class="container">
            <!-- Newsletter Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="rm-card-item shadown p-3">
                        <div class="rm-card-item_content maee">
                            <h3 class="rm-title"><i class="icon-forum"></i>@lang('messages.Apply to the site')</h3>
                            <!-- <p class="psor">Сайтимизда қанақа мавзулар ёритилиши керак деб биласиз?</p> -->
                        </div>
                        <form>
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.ACCEPTED')I : {{ \App\Question::number() }} </div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Question::getAll() }}" style="width:{{ \App\Question::active() }}%">
                                        {{ \App\Question::active() }}%
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.WORK PROCESS') : {{ \App\Question::noAnswer() }}</div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Question::getAll() }}" style="width:{{ \App\Question::noAnswerFoiz() }}%">
                                        {{ \App\Question::noAnswerFoiz() }}%
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.THE ANSWER GIVEN') : {{ \App\Question::answer() }}</div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Question::getAll() }}" style="width:{{ \App\Question::answerFoiz() }}%">
                                        {{ \App\Question::answerFoiz() }}%
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button type="submit" class="btn famie-btn mt-3" data-toggle="modal"
                            data-target="#mycontacts">@lang('messages.Leave a request')</button>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="rm-card-item shadown p-3">
                    @if(!Session::get('poll'))
                    <div class="pollForm">
                        <div class="rm-card-item_content">
                            <h3 class="rm-title"><i class="icon-forum"></i> @lang('messages.Poll')</h3>
                            <p class="psor">@lang('messages.You know what topics should be covered on our site')?</p>
                        </div>
                        <form action="/poll" method="post" id="pollForm">
                        @csrf 
                            <div class="custom-control custom-radio">
                                <input type="radio" value='traktor' class="custom-control-input" id="customRadio" name="poll">
                                <label class="custom-control-label" for="customRadio"> @lang('messages.Learn more about tractors')</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" value='kombayn' class="custom-control-input" id="customRadio1" name="poll">
                                <label class="custom-control-label" for="customRadio1">@lang('messages.For more information about the Combines')</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" value='lizing' class="custom-control-input" id="customRadio2" name="poll">
                                <label class="custom-control-label" for="customRadio2">@lang('messages.Leasing materials')</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" value='yangiliklar' class="custom-control-input" id="customRadio3" name="poll">
                                <label class="custom-control-label" for="customRadio3">@lang('messages.The latest news in the country')</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" value='xojalik' class="custom-control-input" id="customRadio4" name="poll">
                                <label class="custom-control-label" for="customRadio4">@lang('messages.Agricultural news')</label>
                            </div>
                            <button type="submit" class="btn famie-btn pulls">@lang('messages.Subscription')</button>
                        </form>
                    </div>
                    @else
                    <div class="pollForm1">
                        <div class="rm-card-item_content">
                            <h3 class="rm-title"><i class="icon-forum"></i> @lang('messages.Poll')</h3>
                        </div>
                        <form style="margin-left: -23px">
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.Learn more about tractors') </div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Pull::pullAll() }}" style="width:{{ \App\Pull::pull('traktor') }}%">
                                        {{ \App\Pull::pull('traktor') }}%
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.For more information about the Combines')</div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Pull::pullAll() }}" style="width:{{ \App\Pull::pull('kombayn') }}%">
                                        {{ \App\Pull::pull('kombayn') }}%
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.Leasing materials')</div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Pull::pullAll() }}" style="width:{{ \App\Pull::pull('lizing') }}%">
                                        {{ \App\Pull::pull('lizing') }}%
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.The latest news in the country')</div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Pull::pullAll() }}" style="width:{{ \App\Pull::pull('yangiliklar') }}%">
                                        {{ \App\Pull::pull('yangiliklar') }}%
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-radio">
                                <div>@lang('messages.Agricultural news')</div>
                                <div class="progress clearfix">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                                        aria-valuemax="{{ \App\Pull::pullAll() }}" style="width:{{ \App\Pull::pull('xojalik') }}%">
                                        {{ \App\Pull::pull('xojalik') }}%
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                    </div>
                </div>
               <div class="col-12 col-md-6 col-lg-4">
                    <div class="rm-card-item shadown p-3">
                        <div class="rm-card-item_content">

                            <h3 class="rm-title"><i class="icon-price"></i> @lang('messages.Exchange rates')</h3>
                            <table class="table rm-table text-right">
                                <thead>
                                    <tr>
                                        <td class="text-center"><i class="icon-circle"></i></td>
                                        <td>@lang('messages.MB Course')</td>
                                        <td colspan="2" class="text-center">@lang('messages.Indicator')</td>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    @for ($i = 1; $i <= count($valyuta); $i++) 
                                    <tr>
                                        <td class="text-center">{{ $valyuta[$i]['Ccy'] }}</td>
                                        <td>{{ $valyuta[$i]['summ'] }}</td>
                                        <td><span class="{{ ($valyuta[$i]['Diff']>=0)?'oi oi-caret-top':'oi oi-caret-top' }}"></span><?=$valyuta[$i]['Diff']?></td>
                                    </tr>
                                  @endfor
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->


  <!-- ##### News Area Start ##### -->
  <section class="news-area bg-white bgImg myar">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Section Heading -->
            <div class="section-heading">
              <!-- <p>Make the green world</p> -->
              <h2 class="bg-white">@lang('messages.<span>Foydali </span> havolalar')</h2>
            </div>
          </div>
        </div>
        <div class="row" data-wow-delay="200ms">
          @foreach($link as $value)  
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="single-farming-practice-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                  <div class="media_rec">
                      <a target="_blank" title="{!! $value->getTranslatedAttribute('title',App::getLocale()) !!}" href="{{ $value->url }}">
                        <img src="{{ Voyager::image($value->image) }}" class="newProjectIcon projectIcon0" alt=""><br>
                        <span class="newProjectName projectName0">{!! $value->getTranslatedAttribute('title',App::getLocale()) !!}</span>
                      </a>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
  </section>
 <!-- ##### News Area end ##### -->
 
    <section class="silder-partners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>@lang('messages.Our partners')</span></h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="ham">
              @foreach($partner as $value)
                <div class="item">
                    <div class="single-logo-container">
                        <a target="_blank" href="{{ $value->link }}" tabindex="-1">
                            <img title="{{ $value->link }}" class="wls-logo" alt="#" src="{{ Voyager::image($value->image) }}">
                        </a>
                    </div>
                </div>
              @endforeach
              
            </div>
        </div>
    </section>
</div>   
@endsection