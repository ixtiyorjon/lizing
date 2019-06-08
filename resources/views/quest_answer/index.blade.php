@extends('layouts.main')

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.savol') @lang('messages.javob')</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> @lang('messages.Главная')</a></li>
          <li class="breadcrumb-item active" aria-current="page"> @lang('messages.savol') @lang('messages.javob')</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->
  <!-- ##### FAQ Area Start ##### -->
  <section class="famie-faq-area mb-50">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading">
              <h2 class=" bg-white"><span>@lang('messages.savol') </span> @lang('messages.javob')</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Are organic products of the same quality as other food and drink ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="collapseOne" class="accordion-content collapse show">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Do organic products taste different from other food and drink ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseTwo" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Are all of your poultry, meat and fish products raised humanely ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseThree" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Does FAMIE contain any ingredients from China or outside of North America ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseFour" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseFive" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">Are you a retailer interested in bringing in FARMIE products ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseFive" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### FAQ Area End ##### -->

@endsection