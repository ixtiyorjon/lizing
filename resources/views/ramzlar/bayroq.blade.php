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
	    <!-- ##### FAQ Area Start ##### -->
@if(App::getLocale()=='uz')
    <section class="symbols fdb-block pt-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>O'ZBEKISTON RESPUBLIKАSINING DАVLАT BАYROG'I</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/uzbaeyoq.jpg" class="float-left" alt="Paris" width="100%" height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        "Davlat bayrog`i O`zbekiston Respublikasining
                        <strong>
                            1991 yil 18 noyabrdagi 407-XII-sonli «O`zbekiston Respublikasining Davlat bayrog`i
                            to`g`risida»gi Qonuni bilan tasdiqlangan.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            O`zbekiston Respublikаsining Dаvlаt bаyrog`i O`zbekiston Respublikаsi dаvlаt
                            suverenitetining rаmzidir.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            O`zbekiston Respublikаsining Dаvlаt bаyrog`i xаlqаro munosаbаtlаrdа O`zbekiston
                            Respublikаsining timsoli bo`lаdi.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            O`zbekiston Respublikаsining Dаvlаt bаyrog`i — bаyroqning butun uzunligi bo`ylаb o`tgаn to`q
                            moviy rаng, oq rаng vа to`q yashil rаngli uchtа endаn tаrkib topgаn to`g`ri to`rtburchаk
                            shаklidаgi mаtodir.
                        </strong>
                    </h4>

                </div>
            </div>
        </div>
    </section>
@elseif(App::getLocale()=='uzk')
    <!-- ##### FAQ Area End ##### -->

    <!-- ##### FAQ Area Start ##### -->
    <section class="symbols fdb-block pt-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <p>Make the green world</p> -->
                        <h2 class="bg-white"><span>ЎЗБЕКИСТОН РЕСПУБЛИКАСИНИНГ ДАВЛАТ БАЙРОҒИ</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/uzbaeyoq.jpg" class="float-left" alt="Paris" width="100%" height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        Давлат байроғи Ўзбекистон Республикасининг
                        <strong>
                            1991 йил 18 ноябрдаги 407-XII-сонли «Ўзбекистон Республикасининг Давлат байроғи тўғрисида»ги
                            Қонуни билан тасдиқланган.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикасининг Давлат байроғи Ўзбекистон Республикаси давлат суверенитетининг
                            рамзидир.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикасининг Давлат байроғи халқаро муносабатларда Ўзбекистон
                            Республикасининг тимсоли бўлади.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикасининг Давлат байроғи — байроқнинг бутун узунлиги бўйлаб ўтган тўқ
                            мовий ранг, оқ ранг ва тўқ яшил рангли учта эндан таркиб топган тўғри тўртбурчак шаклидаги
                            матодир.
                        </strong>
                    </h4>

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
                        <h2 class="bg-white"><span>ГОСУДАРСТВЕННЫЙ ФЛАГ РЕСПУБЛИКИ УЗБЕКИСТАН</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/uzbaeyoq.jpg" class="float-left" alt="Paris" width="100%" height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                            Государственный флаг Республики Узбекистан утвержден законом Республики Узбекистан «О
                            государственном флаге Республики Узбекистан» от 18 ноября 1991 г. № 407-XII.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Государственный флаг Республики Узбекистан является символом государственного суверенитета
                            Республики Узбекистан.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Государственный флаг Республики Узбекистан представляет Республику Узбекистан в
                            международных отношениях.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Государственный флаг Республики Узбекистан представляет собой прямоугольное полотнище из
                            трех горизонтальных полос насыщенного голубого, белого и насыщенного зеленого цветов во всю
                            длину флага.
                        </strong>
                    </h4>

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
                        <h2 class="bg-white"><span>THE STATE EMBLEM</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/uzbaeyoq.jpg" class="float-left" alt="Paris" width="100%" height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                            The law about "The State Emblem" was approved by the 10-th session of the Supreme Council of
                            the Republic of Uzbekistan on July 2, 1992.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            The new state emblem of the Republic of Uzbekistan was created to reflect the many centuries
                            of experience of the Uzbek people.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            The state emblem of the Republic presents the image of the rising sun over a flourishing
                            valley. Two rivers run through the valley, representing the Syrdarya and Amudarya. The
                            emblem is bordered by wheat on the right side and branches of cotton with opened cotton
                            bolls on the left side.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            The eight-angle star is at the top of the emblem, symbolizing the unity and confirmation of
                            the republic. The crescent and star inside the eight-pointed star are the sacred symbols of
                            Islam. The mythical bird Semurg with outstretched wings is placed in the center of the
                            emblem as the symbol of the national Renaissance. The entire composition aims to express to
                            desire of the Uzbek people for peace, happiness and prosperity. At the bottom of the emblem
                            inscribed the word "Uzbekistan" written in Uzbek on a ribbon in the national colors of the
                            flag.
                        </strong>
                    </h4>

                </div>
            </div>
        </div>
    </section>
 @endif
    <!-- ##### FAQ Area End ##### -->

@stop