@extends('layouts.main')

@section('content')
  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
    <div class="welcome-slides owl-carousel">
      
      <!-- Single Welcome Slides -->
      @foreach($slider as $value)
        <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url({{ Voyager::image($value->image) }});">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-lg-12">
                <div class="welcome-content" style="text-align: center;">
                  <h2 data-animation="fadeInUp" data-delay="200ms">{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</h2>
                  <p data-animation="fadeInUp" data-delay="400ms">{{ $value->getTranslatedAttribute('body',App::getLocale()) }}</p>
                  <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Technique  Start ##### -->
  <section class="technique bg-white mt-50 mb-50">
      <div class="container">
          <div class="section-heading"> 
              <h2 class=" bg-white"><span>Lizing  </span>Texnika</h2>
              <!-- <img src="img/core-img/decor.png" alt=""> -->
          </div>
          <div class="row">
           
            <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                       <div class="imgTava imt1"></div>
                       <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
            
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt2"></div>
                      <div class="titleTehno">Texnika nomiTexnika nomi Texnika nomi</div>
                    </a>
                  </div>
              </div>
            
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt3"></div>
                      <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
            
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt4"></div>
                      <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
           
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                       <div class="imgTava imt5"></div>
                       <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
          
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt6"></div>
                      <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
          
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt7"></div>
                      <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
           
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt8"></div>
                      <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
            
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt9"></div>
                      <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
            
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                       <div class="imgTava imt10"></div>
                       <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
             
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt11"></div>
                      <div class="titleTehno">Texnika nomi</div>
                    </a>
                  </div>
              </div>
          
              <div class="col-12 col-md-4 col-lg-3">
                  <div class="mytenolog">
                    <a href="#">
                      <div class="imgTava imt12"></div>
                      <div class="titleTehno">Ko'proq</div>
                    </a>
                  </div>
              </div>
              
          </div>
      </div>  
  </section>
  <!-- ##### Technique end ##### -->

  <!-- ##### News Area Start ##### -->
  <section class="news-area bg-gray p-50">
    <div class="container">
      <div class="section-heading">
          <h2 class="bg-gray"><span>Долзарб  </span>  Янгиликлар</h2>
          <!-- <img src="img/core-img/decor.png" alt=""> -->
      </div>
      <div class="row">
        <!-- Featured Post Area -->
        <div class="col-12 col-lg-6">
          <div class="featured-post-area mb-100 wow fadeInUp" data-wow-delay="100ms">
            <img src="{{ Voyager::image($new->image) }}" alt="">
            <!-- Post Content -->
            <div class="post-content">
              <h6>{{ $new->created_at->format('Y-m-d') }}</h6>
              <a href="/new/{{ $new->slug }}" class="post-title">
                {{ $new->getTranslatedAttribute('title',App::getLocale()) }}</a>
            </div>
          </div>
        </div>
        <!-- Single Blog Area -->
        <div class="col-12 col-lg-6 mb-100">
        @foreach($news as $value)
          <!-- Single Blog Area -->
          <div class="single-blog-area style-2 wow fadeInUp" data-wow-delay="300ms">
            <!-- Post Content -->
            <div class="post-content">
              <h6>{{ $value->created_at->format('Y-m-d') }}</h6>
              <a href="/new/{{ $new->slug }}" class="post-title">{{ $value->getTranslatedAttribute('title',App::getLocale()) }}</a>
              <p>{{ str_limit($value->getTranslatedAttribute('body',App::getLocale()),70) }}</p>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- ##### News Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area section-padding-100-0 pb-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Content -->
        <div class="col-12 col-md-8">
          <div class="about-us-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2 class=" bg-white"><span>{{ $about->getTranslatedAttribute('title',App::getLocale()) }}</span></h2>
              <!-- <img src="img/core-img/decor.png" alt=""> -->
            </div>
            <p>{!! str_limit($about->getTranslatedAttribute('body',App::getLocale()),150) !!}</p>
            <a href="/about" class="btn famie-btn mt-30">Read More</a>
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
  <section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax big-obuna" style="background-image: url('img/fon1.jpg');">
    <div class="container">
      <!-- Newsletter Form -->
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <h4>Сайтга мурожаатлар</h4>
            <ul class="skill-list"> 
              <li class="skill">
                <h3>QABUL QILINDI: 930</h3>
                <progress class="skill-2" max="100" value="75">
                  <strong>Skill Level: 75%</strong>
                </progress>
              </li>
              <li class="skill">
                <h3>ISH JARAYONIDA:500</h3>
                <progress class="skill-1" max="100" value="50">
                  <strong>Skill Level: 50%</strong>
                </progress>
              </li>

              <li class="skill">
                <h3>KO'RIB CHIQILDI: 100</h3>
                <progress class="skill-3" max="100" value="25">
                  <strong>Skill Level: 25%</strong>
                </progress>
              </li>
            </ul>
            <button type="submit" class="btn famie-btn">Обуна бўлиш</button>
        </div>
        <!-- <div class="col-12 col-lg-4">
          <form action="#" method="post" class="obuna">
            <input type="text" class="form-control" placeholder="Исм">
            <input type="text" class="form-control" placeholder="Email">
            <button type="submit" class="btn famie-btn">Обуна бўлиш</button>
          </form>
        </div> -->
        <div class="col-12 col-lg-4">
          <h4>Саволлар ва жавоблар</h4>
          <form action="#" method="post">
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="name" placeholder="Your Name">
                </div>
                <div class="col-lg-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email">
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Your Subject">
                </div>
                <div class="col-12">
                  <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn famie-btn">Send Message</button>
                </div>
              </div>
            </form>
        </div>
            
      </div>
    </div>
  </section>
  <!-- ##### Newsletter Area End ##### -->


  <!-- ##### News Area Start ##### -->
  <section class="news-area bg-white bgImg">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Section Heading -->
            <div class="section-heading">
              <!-- <p>Make the green world</p> -->
              <h2 class="bg-white"><span>Foydali havolalar</span></h2>
            </div>
          </div>
        </div>
        <div class="row" data-wow-delay="200ms">
          @foreach($link as $value)  
            <div class="col-12 col-lg-3">
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
 
  <section class="fdb-block  bg-gray section-padding-100">
      <div class="container">
        <div class="row">
          <!-- Single Information Area -->
          <div class="col-12 col-md-3">
            <div class="single-information-area text-center  wow fadeInUp" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
              <div class="contact-icon">
                <i class="icon-telegram"></i>
              </div>
              <h5>Telegram</h5>
              <h6><a href="https://t.me/{{ setting('site.telegram') }}">{{ setting('site.telegram') }}</a></h6>
            </div>
          </div>
          <!-- Single Information Area -->
          <div class="col-12 col-md-3">
            <div class="single-information-area text-center  wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
              <div class="contact-icon">
                <i class="icon_phone"></i>
              </div>
              <h5>Телефон</h5>
              <h6><a href="tel:{{ setting('site.tel') }}">{{ setting('site.tel') }}</a></h6>
            </div>
          </div>
          <!-- Single Information Area -->
          <div class="col-12 col-md-3">
            <div class="single-information-area text-center  wow fadeInUp" data-wow-delay="1000ms" style="visibility: visible; animation-delay: 1000ms; animation-name: fadeInUp;">
              <div class="contact-icon">
                <i class="icon_mail_alt"></i>
              </div>
              <h5>Эл.адрес</h5>
              <h6><a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></h6>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="single-information-area text-center  wow fadeInUp" data-wow-delay="1500ms" style="visibility: visible; animation-delay: 1500ms; animation-name: fadeInUp;">
              <div class="contact-icon">
                <i class="icon_pin_alt"></i>
              </div>
              <h5>Адрес</h5>
              <h6><a href="#">{{ setting('site.address') }}</a></h6>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection