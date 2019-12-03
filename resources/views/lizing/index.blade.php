@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/12.png');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>@lang('messages.Leasing technique')</h2>
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
          <li class="breadcrumb-item"><a href="/category-texnics">@lang('messages.Leasing technique')</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $Breadcrumbs->getTranslatedAttribute('title',App::getLocale()) }}</li>
        </ol>
      </nav>
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
                <h2 class=" bg-white">@lang('messages.<span> Leasing </span> Technique')</h2>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-lg-3">
            
            <div id='cssmenua3'>
              <ul>
                @foreach($texnics_category as $value)
                <li class='has-sub'><a href='/texnics/{{ $value->slug }}'><span>{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</span></a>
                  <ul>
                    @foreach(\App\TexnicsSubcategory::getTexnics($value->id) as $sub_cat)
                      <li><a href='/texnics/{{ $value->slug }}/{{ $sub_cat->slug }}'><span>{{ $sub_cat->getTranslatedAttribute('title',App::getLocale()) }}</span></a></li>
                    @endforeach
                  </ul>
                  </li>
                  @endforeach
              </ul>
            </div>
          
        </div>

        <div class="col-12 col-sm-12 col-lg-9" id="printTable">

            @foreach($texnics as $value)
                <div class="mash_pra row mb-30">
                    <div class="col-12 col-sm-12 col-lg-4 taimg">
                        <a href="#">
                          <?php $image = json_decode($value->image)?>
                            <img src="{{ Voyager::image($image[0]) }}" alt="" class="timg">
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-8">
                        <div class="tinfo mb-30">
                            <div class="tinfoname">
                                {{ $value->getTranslatedAttribute('name',App::getLocale()) }}
                            </div>
                            <div class="tinfosumm">
                                <ul>  
                                    <li>@lang('messages.Cost of machinery'):  <span>{{ $value->narxi }} @lang('messages.ml, sum')</span></li>
                                    <li>@lang('messages.Advance amount'):   <span>{{ $value->avans_summ }} @lang('messages.ml, sum')</span></li>
                                    <li>@lang('messages.Advance'):           <span>{{ $value->avans }}%</span></li>
                                    <li>@lang('messages.Leasing term'):   <span>{{ $value->muddat }} @lang('messages.Up to the year')</span></li>
                                    <li>@lang('messages.Delivery'):   <span>{{ $value->dostavka }} @lang('messages.day')</span></li>
                                </ul>
                            </div>
                            <div class="tinfopad">
                                <a href="/texnics_more/{{ $value->slug }}">@lang('messages.Read More')</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        {{ $texnics->links() }}
        </div>

      </div>
    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->




@endsection

@section('script')
    <script>
        ( function( $ ) {
        $( document ).ready(function() {
        $('#cssmenua3 > ul > li > a').click(function() {
          $('#cssmenua3 li').removeClass('active');
          $(this).closest('li').addClass('active'); 
          var checkElement = $(this).next();
          if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('normal');
          }
          if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#cssmenua3 ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
          }
          if($(this).closest('li').find('ul').children().length == 0) {
            return true;
          } else {
            return false;   
          }     
        });
        });
        } )( jQuery );

    </script>
@stop
