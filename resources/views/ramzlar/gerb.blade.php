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
                        <h2 class="bg-white"><span>O'ZBEKISTON RESPUBLIKASI DAVLAT GERBI</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/Emblem_of_Uzbekistan.svg" class="float-left" alt="Paris" width="100%"
                        height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        Davlat gerbi O`zbekiston Respublikasining
                        <strong>
                            1992 yil 2 iyuldagi 616-XII-sonli «O`zbekiston Respublikasi Davlat gerbi to`g`risida»gi
                            Qonuni bilan tasdiqlangan.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            OO`zbekiston Respublikаsi Dаvlаt gerbi quyidаgi ko`rinishgа egа: tog`lаr,
                            dаryolаr vа so`l tomoni bug`doy boshoqlаridаn, o`ng tomoni esа chаnoqlаri ochilgаn g`o`zа
                            shoxlаridаn
                            iborаt chаmbаrgа o`rаlgаn gullаgаn vodiy uzrа quyosh zаrrin nurlаrini sochib turаdi.
                            Gerbning yuqori qismidа
                            Respublikа hurligining rаmzi sifаtidа sаkkizburchаk tаsvirlаngаn bo`lib, uning ichki qismidа
                            yarim oy vа yulduz
                            tаsvirlаngаn. Gerbning mаrkаzidа bаxt vа erksevаrlik rаmzi — qаnotlаrini yozgаn Humo qushi
                            tаsvirlаngаn. Gerbning
                            pаstki qismidа O`zbekiston Respublikаsi Dаvlаt bаyrog`ini ifodа etuvchi chаmbаr lentаsining
                            bаntidа «O'zbekiston» deb yozib qo`yilgаn.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            O`zbekiston Respublikаsi Dаvlаt gerbining rаngli ko`rinishidа: Humo qushi vа dаryolаr —
                            kumush
                            rаngidа; quyosh, boshoqlаr, pаxtа chаnoqlаri vа «O'zbekiston» yozuvi — oltin rаngidа; g`o`zа
                            shoxlаri vа bаrglаri, tog`lаr vа vodiy — yashil rаngdа; chаnoqlаrdаgi pаxtа — oq rаngdа;
                            lentа — O`zbekiston
                            Respublikаsi Dаvlаt bаyrog`ining rаnglаrini аks ettiruvchi uch xil rаngdа; sаkkizburchаk —
                            oltin zаrhаl bilаn
                            hoshiyalаngаn holdа hаvo rаngdа; yarim oy vа yulduzlаr — oq rаngidа tаsvirlаngаn.
                        </strong>
                    </h4>

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
                        <h2 class="bg-white"><span>ЎЗБЕКИСТОН РЕСПУБЛИКАСИ ДАВЛАТ ГЕРБИ</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/Emblem_of_Uzbekistan.svg" class="float-left" alt="Paris" width="100%"
                        height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        Давлат герби Ўзбекистон Республикасининг
                        <strong>
                            1992 йил 2 июлдаги 616-XII-сонли «Ўзбекистон Республикаси Давлат герби тўғрисида»ги Қонуни
                            билан тасдиқланган.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикаси Давлат герби қуйидаги кўринишга эга: тоғлар, дарёлар ва сўл
                            томони буғдой бошоқларидан, ўнг томони эса чаноқлари очилган ғўза шохларидан иборат чамбарга
                            ўралган гуллаган водий узра қуёш заррин нурларини сочиб туради. Гербнинг юқори қисмида
                            Республика
                            ҳурлигининг рамзи сифатида саккизбурчак тасвирланган бўлиб, унинг ички қисмида ярим ой ва
                            юлдуз тасвирланган. Гербнинг марказида бахт ва эрксеварлик рамзи — қанотларини ёзган Ҳумо
                            қуши тасвирланган. Гербнинг пастки қисмида Ўзбекистон Республикаси Давлат байроғини ифода
                            этувчи чамбар лентасининг бантида «Ўзбекистон» деб ёзиб қўйилган.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Ўзбекистон Республикаси Давлат гербининг рангли кўринишида: Ҳумо қуши ва дарёлар — кумуш
                            рангида; қуёш, бошоқлар, пахта чаноқлари ва «Ўзбекистон» ёзуви — олтин рангида; ғўза шохлари
                            ва барглари, тоғлар ва водий — яшил рангда; чаноқлардаги пахта — оқ рангда; лента —
                            Ўзбекистон Республикаси Давлат байроғининг рангларини акс эттирувчи уч хил рангда;
                            саккизбурчак — олтин зарҳал билан ҳошияланган ҳолда ҳаво рангда; ярим ой ва юлдузлар — оқ
                            рангида тасвирланган.
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
                        <h2 class="bg-white"><span>ГОСУДАРСТВЕННЫЙ ГЕРБ РЕСПУБЛИКИ УЗБЕКИСТАН</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/Emblem_of_Uzbekistan.svg" class="float-left" alt="Paris" width="100%"
                        height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">

                        <strong>
                            Государственный герб утвержден законом Республики Узбекистан «О Государственном гербе
                            Республики Узбекистан» от 2 июля 1992 г. № 616-XII.
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            Государственный герб Республики Узбекистан представляет собой изображение восходящего солнца
                            над горами, реками и цветущей долиной, окруженными венком, состоящим справа из колосьев
                            пшеницы и слева — из веток хлопчатника с раскрытыми коробочками хлопка. В верхней части
                            герба находится восьмигранник, символизирующий знак утверждения республики, внутри которого
                            полумесяц со звездой. В центре герба изображена птица Хумо с раскрытыми крыльями — символ
                            счастья и свободолюбия. Внизу на банте ленты венка, символизирующей Государственный флаг
                            Республики Узбекистан, надпись «O'zbekiston».
                        </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            В цветном изображении Государственного герба Республики Узбекистан птица Хумо и реки —
                            серебристые; солнце, колосья, раскрытые коробочки хлопка и надпись «O'zbekiston» —
                            золотистые; ветки, листья хлопчатника, горы и долины — зеленые, хлопок в раскрытых
                            коробочках — белый; лента трехцветная, воспроизводящая цвета Государственного флага
                            Республики Узбекистан; восьмигранник голубой, обрамленный золотистой каймой; полумесяц и
                            звезда — белые.
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
                        <h2 class="bg-white"><span>STATE EMBLEM OF THE REPUBLIC OF UZBEKISTAN</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-4">
                    <img src="img/bg-img/Emblem_of_Uzbekistan.svg" class="float-left" alt="Paris" width="100%"
                        height="100%">
                </div>
                <div class="col-12">

                    <h4 class="mah4">
                        <strong>
                            The law about "The State Emblem" was approved by the 10-th session of the Supreme Council of
                            the Republic of Uzbekistan on July 2, 1992. </strong>
                    </h4>
                    <h4 class="mah4">
                        <strong>
                            The new state emblem of the Republic of Uzbekistan was created to reflect the many centuries
                            of experience of the Uzbek people. <br>

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
    <!-- ##### FAQ Area End ##### -->
@endif

@stop