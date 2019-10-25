@extends('layouts.main')

@section('content')

	    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/18.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>@lang('messages.The State symbols')</h2>
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
                    <li class="breadcrumb-item active" aria-current="page">@lang('messages.The State symbols')</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
@if(App::getLocale()=='uz')
    <!-- ##### FAQ Area Start ##### -->
    <section class="symbols fdb-block pt-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>O'ZBEKISTON RESPUBLIKASINING DAVLAT MADHIYASI</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                            O`zbekiston Respublikasi Davlat madhiyasining matni va musiqasi O`zbekiston Respublikasining
                            1992 yil 10 dekabrdagi 768-XII-sonli «O`zbekiston Respublikasining Davlat madhiyasi
                            to`g`risida»gi Qonuni bilan tasdiqlangan.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            O`zbekiston Respublikаsining Dаvlаt mаdhiyasi O`zbekiston Respublikаsi Dаvlаt
                            suverenitetining rаmzidir.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            O`zbekiston Respublikаsining Dаvlаt mаdhiyasigа zo`r ehtirom bilаn qаrаsh O`zbekiston
                            Respublikаsi hаr bir fuqаrosining vаtаnpаrvаrlik burchidir.
                        </strong>
                    </h4>
                    <h4 class="mah4">Mutal Burhonov <strong> musiqasi</strong></h4>
                    <h4 class="mah4">Abdulla Oripov <strong>so'zi</strong></h4>

                    <div class="madhiya-text text-center">
                        <p>Serquyosh hur o'lkam, elga baxt, najot,</p>

                        <p>Sen o'zing do'stlarga yo'ldosh, mehribon!</p>

                        <p>Yashnagay to abad ilmu fan, ijod,</p>

                        <p>Shuhrating porlasin toki bor jahon!</p>

                        <p>&nbsp;</p>

                        <p>Oltin bu vodiylar - jon O'zbekiston,</p>

                        <p>Ajdodlar mardona ruhi senga yor!</p>

                        <p>Ulug' xalq qudrati jo'sh urgan zamon,</p>

                        <p>Olamni mahliyo aylagan diyor!</p>

                        <p>&nbsp;</p>

                        <p>Bag'ri keng o'zbekning o'chmas iymoni,</p>

                        <p>Erkin, yosh avlodlar senga zo'r qanot!</p>

                        <p>Istiqlol mash'ali tinchlik posboni,</p>

                        <p>Xaqsevar, ona yurt, mangu bo'l obod!</p>

                        <p>&nbsp;</p>

                        <p>Oltin bu vodiylar - jon O'zbekiston,</p>

                        <p>Ajdodlar mardona ruhi senga yor!</p>

                        <p>Ulug' xalq qudrati jo'sh urgan zamon,</p>

                        <p>Olamni mahliyo aylagan diyor!</p>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- ##### FAQ Area End ##### -->
@elseif(App::getLocale()=='uzk')
    <!-- ##### FAQ Area Start ##### -->
    <section class="symbols fdb-block pt-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>ЎЗБЕКИСТОН РЕСПУБЛИКАСИНИНГ ДАВЛАТ МАДҲИЯСИ</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикаси Давлат мадҳиясининг матни ва мусиқаси Ўзбекистон Республикасининг
                            1992 йил 10 декабрдаги 768-ХII-сонли «Ўзбекистон Республикасининг Давлат мадҳияси
                            тўғрисида»ги Қонуни билан тасдиқланган.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикасининг Давлат мадҳияси Ўзбекистон Республикаси Давлат суверенитетининг
                            рамзидир.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикасининг Давлат мадҳиясига зўр эҳтиром билан қараш Ўзбекистон
                            Республикаси ҳар бир фуқаросининг ватанпарварлик бурчидир.
                        </strong>
                    </h4>
                    <h4 class="mah4">Мутал Бурҳонов<strong> мусиқаси </strong></h4>
                    <h4 class="mah4">Абдулла Орипов<strong>сўзи</strong></h4>

                    <div class="madhiya-text text-center">
                        <p>Серқуёш ҳур ўлкам, элга бахт, нажот, </p>
                        <p>Сен ўзинг дўстларга йўлдош, меҳрибон! </p>
                        <p>Яшнагай то абад илму фан, ижод, </p>
                        <p>Шуҳратинг порласин токи бор жаҳон!</p> <br>


                        <p>Олтин бу водийлар - жон Ўзбекистон, </p>
                        <p>Аждодлар мардона руҳи сенга ёр! </p>
                        <p>Улуғ халқ қудрати жўш урган замон, </p>
                        <p>Оламни маҳлиё айлаган диёр!</p> <br>

                        <p>Бағри кенг ўзбекнинг ўчмас иймони, </p>
                        <p>Эркин, ёш авлодлар сенга зўр қанот! </p>
                        <p>Истиқлол машъали тинчлик посбони, </p>
                        <p>Хақсевар, она юрт, мангу бўл обод!</p> <br>

                        <p>Олтин бу водийлар - жон Ўзбекистон, </p>
                        <p>Аждодлар мардона руҳи сенга ёр! </p>
                        <p>Улуғ халқ қудрати жўш урган замон, </p>
                        <p>Оламни маҳлиё айлаган диёр!</p>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- ##### FAQ Area End ##### -->
@elseif(App::getLocale()=='ru')
    <!-- ##### FAQ Area Start ##### -->
    <section class="symbols fdb-block pt-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>ГОСУДАРСТВЕННЫЙ ГИМН РЕСПУБЛИКИ УЗБЕКИСТАН</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                            Текст и музыкальная редакция Государственного гимна Республики Узбекистан утверждены законом
                            Республики Узбекистан «О Государственном гимне Республики Узбекистан» от 10 декабря 1992 г.
                            № 768-ХII.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Государственный гимн Республики Узбекистан является символом государственного суверенитета
                            Республики Узбекистан.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Глубокое уважение к Государственному гимну Республики Узбекистан — патриотический долг
                            каждого гражданина Республики Узбекистан.
                        </strong>
                    </h4>
                    <h4 class="mah4"><strong> Музыка -</strong> Мутала Бурхонова </h4>
                    <h4 class="mah4"> <strong>Слова - </strong>Абдуллы Орипова</h4>

                    <div class="madhiya-text text-center">
                        <p> Серқуёш, ҳур ўлкам, элга бахт, нажот,</p>
                        <p> Сен ўзинг дўстларга йўлдош, меҳрибон!</p>
                        <p> Яшнагай то абад илму фан, ижод,</p>
                        <p> Шуҳратинг порласин токи бор жаҳон!</p>


                        <p> Олтин бу водийлар — жон Ўзбекистон,</p>
                        <p> Аждодлар мардона руҳи сенга ёр!</p>
                        <p> Улуғ халқ қудрати жўш урган замон,</p>
                        <p> Оламни маҳлиё айлаган диёр!</p>

                        <p> Бағри кенг ўзбекнинг ўчмас иймони,</p>
                        <p> Эркин, ёш авлодлар сенга зўр қанот!</p>
                        <p> Истиқлол машъали, тинчлик посбони,</p>
                        <p> Ҳақсевар, она юрт, мангу бўл обод!</p>

                        <p> Олтин бу водийлар — жон Ўзбекистон,</p>
                        <p> Аждодлар мардона руҳи сенга ёр!</p>
                        <p> Улуғ халқ қудрати жўш урган замон,</p>
                        <p> Оламни маҳлиё айлаган диёр!</p>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- ##### FAQ Area End ##### -->
@elseif(App::getLocale()=='en')
    <!-- ##### FAQ Area Start ##### -->
    <section class="symbols fdb-block pt-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>NATIONAL ANTHEM</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                                The law "On national anthem of the Republic of Uzbekistan" was adopted on the December 10, 1992 at the 11th session of the Supreme Council of Uzbekistan.
                        </strong>
                    </h4>
                    
                    <h4 class="mah4"><strong>Poem by</strong> A. Aripov  </h4>
                    <h4 class="mah4"> <strong>Music by </strong>M. Burkhanov</h4>

                    <div class="madhiya-text text-center">
                            <p>My country, sunny and free, salvation to your people, </p>
                            <p>You are a warmhearted companion to the friends </p>
                            <p>Flourish eternally with knowledge and invention, </p>
                            <p>May your fame shine as long as the world exists!</p>
                            
                            <p>These golden valleys-dear Uzbekistan, </p>
                            <p>Manly spirit of ancestors is companion to you! </p>
                            <p>When the great power of people became exuberant </p>
                            <p>You are the country that amazes the world!</p>
                            
                            <p>Belief of generous Uzbek does not die out, </p>
                            <p>Free, young children are a strong wing for you! </p>
                            <p>The torch of independence, guardian of peace, </p>
                            <p>Just motherland be eternally prosperous!</p>
                            
                            <p>Refrain: These golden valleys-dear Uzbekistan, </p>
                            <p>Manly spirit of ancestors is companion to you! </p>
                            <p>When the great power of people became exuberant </p>
                            <p>You are the country that amazes the world!</p>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- ##### FAQ Area End ##### -->
@endif

@stop