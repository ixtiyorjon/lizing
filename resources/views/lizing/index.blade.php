@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/12.png');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Лизинг техника</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Главная</a></li>
          <li class="breadcrumb-item"><a href="/category-texnics">Лизинг техника</a></li>
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
                <h2 class=" bg-white"><span>Lizing  </span>Texnika</h2>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-lg-3">
  
           
            <div class="sticky" id='cssmenua2'>
                <ul>
                    @foreach($texnics_category as $value)
                        <li class='active has-sub'><a href='/texnics/{{ $value->slug }}'><span>{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</span></a>
                            <ul>
                                @foreach(\App\TexnicsSubcategory::getTexnics($value->id) as $sub_cat)
                                <li><a href='#'><span>{{ $sub_cat->getTranslatedAttribute('title',App::getLocale()) }}</span></a></li>
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
                            <img src="{{ Voyager::image($value->image) }}" alt="" class="timg">
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-8">
                        <div class="tinfo mb-30">
                            <div class="tinfoname">
                                {{ $value->getTranslatedAttribute('name',App::getLocale()) }}
                            </div>
                            <div class="tinfosumm">
                                <ul>  
                                    <li>Техника нархи:  <span>{{ $value->narxi }} мл,сум</span></li>
                                    <li>Аванс суммаси:   <span>{{ $value->avans_summ }} мл,сум</span></li>
                                    <li>Аванс:           <span>{{ $value->avans }}%</span></li>
                                    <li>Лизинг муддати:   <span>{{ $value->muddat }} йилгача</span></li>
                                    <li>Yetkazib berish:   <span>{{ $value->dostavka }} kun</span></li>
                                </ul>
                            </div>
                            <div class="tinfopad">
                                <a href="/texnics_more/{{ $value->slug }}">Батафсил</a>
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