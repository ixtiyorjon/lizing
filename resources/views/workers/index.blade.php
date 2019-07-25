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
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> @lang('messages.Главная')</a></li>
          <li class="breadcrumb-item active" aria-current="page">@lang('messages.ishchilar')</li>
        </ol>
      </nav>
      <div class="print">
         <button class="print-button"><span class="print-icon"></span><p>Чоп килиш</p></button>
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

          <div class="row mb-30">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="single-team-member wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-img">
                      <img src="/img/bg-img/r23.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-8 bg-padd">
                  <div class="contact-info my-por-ifon">
                    <div class="imiya"> Холмурадов Акмал Арсланович</div>
                    <div class="vaki"> Бошқарув раиси</div>
                    <div class="stan"> Қабул кунлари: душанба-жума  08:00-11:00</div>
                    <div class="stan"> Электрон почта манзили:   info@agroleasing.uz </div>
                    <div class="stan"> Телефон: (+998 71) 244-62-73</div>
                  </div>
                </div>
            </div>

            <div class="row mb-30">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="single-team-member wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-img">
                      <img src="/img/bg-img/r23.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-8 bg-padd">
                  <div class="contact-info my-por-ifon">
                    <div class="imiya"> Холмурадов Акмал Арсланович</div>
                    <div class="vaki"> Бошқарув раиси</div>
                    <div class="stan"> Қабул кунлари: душанба-жума  08:00-11:00</div>
                    <div class="stan"> Электрон почта манзили:   info@agroleasing.uz </div>
                    <div class="stan"> Телефон: (+998 71) 244-62-73</div>
                  </div>
                </div>
            </div>

            <div class="row mb-30">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="single-team-member wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-img">
                      <img src="/img/bg-img/r23.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-8 bg-padd">
                  <div class="contact-info my-por-ifon">
                    <div class="imiya"> Холмурадов Акмал Арсланович</div>
                    <div class="vaki"> Бошқарув раиси</div>
                    <div class="stan"> Қабул кунлари: душанба-жума  08:00-11:00</div>
                    <div class="stan"> Электрон почта манзили:   info@agroleasing.uz </div>
                    <div class="stan"> Телефон: (+998 71) 244-62-73</div>
                  </div>
                </div>
            </div>

        </div>

        <div class="col-12 col-sm-12 col-lg-4">
               @include('left_block.index')
        </div>

      </div>


       


    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->

@endsection