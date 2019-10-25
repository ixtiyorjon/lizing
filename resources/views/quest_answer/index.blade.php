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
              <?php $i=1; ?>
            @foreach($model as $value)
            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6><a role="button" aria-expanded="true"  aria-controls="collapse{{ $value->id }}" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse{{ $value->id }}">{{ $value->body }}
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="collapse{{ $value->id }}" class="accordion-content collapse {{ ($i==1)?'show':'' }}">
                  @foreach(\App\Answer::getAll($value->id) as $answer)
                    <p>{{$answer->body}}</p>
                  @endforeach
                </div>
                
            </div>
            <?php $i++;?>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### FAQ Area End ##### -->

@endsection