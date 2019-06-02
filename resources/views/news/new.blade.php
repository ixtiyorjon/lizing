@extends('layouts.main')

@section('content')

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('/img/bg-img/18.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>Информация</h2>
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
          <li class="breadcrumb-item active" aria-current="page">Информация</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### News Details Area Start ##### -->
  <section class="news-details-area section-padding-0-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- News Details Content -->
          <div class="news-details-content">
              <h6>{{ $model->created_at->format('Y | m | d') }}</h6>
              <h3 class="post-title">{{ $model->getTranslatedAttribute('title',App::getLocale()) }}</h3>

              <p>
               {{ str_limit($model->getTranslatedAttribute('title',App::getLocale()),100) }}
              </p>

              <img class="w-100 mb-30" src="/{{Voyager::image($model->image)}}" alt="">

             {{--  <p> 
                Форумнинг иккинчи кунида “Ўзагролизинг” АЖ Бошқарув раиси А. 
                Холмурадов ўзининг маърузаси билан иштирок этди. Маъруза давомида 
                “Ўзагролизинг” АЖ фаолиятига доир молиявий, иқтисодий маълумотлар бериб ўтилди.
              </p>

              <img class="w-100 mb-30" src="/img/bg-img/n2.jpg" alt="">
              <p>
                  “Ўзагролизинг” АЖ узоқ йиллардан буён мамлакатимиз лизинг бозорида етакчи
                  ўринларни эгаллаб келмоқда ва қишлоқ хўжалик техникаларини лизинг асосида 
                  етказиб берувчи энг йирик лизинг компанияси хисобланади.
              </p>

              <!-- Famie Blockquote -->
              <blockquote class="famie-blockquote d-flex">
                <div class="quote-icon pt-2">
                  <img src="/img/core-img/quote.png" alt="">
                </div>
                <div class="quote-text">
                  <h5>
                      (фото: Ўзбекистон Лизинг берувчилар ассоциацияси Бош директори З.Б. Мустафаев,
                      “Ўзагролизинг” АЖ Бошқарув раиси А.А. Холмурадов,
                      HumoPartners асосчиси Х.А. Абдурахманов)
                  </h5>
                </div>
              </blockquote>

              <p>
                  Ҳалқаро форум якунида “Ўзагролизинг” АЖ ва ҳорижий лизинг компаниялари 
                  ўртасида ҳамкорлик қилиш бўйича музокаралар олиб борилди, келгусидаги режалар 
                  белгилаб олинди.
              </p> --}}
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ##### News Details Area End ##### -->

@endsection