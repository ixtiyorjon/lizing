<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>{{ setting('site.site_name') }}</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="/css/bvi.min.css">
  <link rel="stylesheet" href="/css/bvi-font.css">
  <link rel="stylesheet" href="/css/slider.style.css">
  
  <link rel="stylesheet" href="/css1/style.css">
</head>

<body>
  <!-- Preloader -->
 {{--  <div class="preloader d-flex align-items-center justify-content-center Samandar">
    <div class="spinner"></div>
  </div>
 --}}
  <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">

                            <div class="top-header-meta text-left">
                                <a href="/" class="nav-brand logo">
                                    <img src="/img/logo.png" alt="">
                                    <!-- <span>O'ZGROLIZING AKSIYADORLIK JAMYATI расмий-веб сайти</span> -->
                                </a>
                            </div>

                            <div class="header-top-right">
                                <div id="eyeIcon">
                                    <a href="#">
                                      <i class="my-fa-icon bayro"></i> <span>Baryoq</span>
                                    </a>
                                </div>
                                <div id="eyeIcon">
                                    <a href="#">
                                      <i class="my-fa-icon gerp"></i>
                                      <span>Gerb</span>
                                    </a>
                                </div>
                                <div id="eyeIcon">
                                    <a href="#">
                                      <i class="my-fa-icon mathiya"></i>
                                      <span>Madhiya</span>
                                    </a>
                                </div>
                                <div id="eyeIcon">
                                    <a href="#" class="bvi-open">
                                        <i  class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="my-lang">
                                    <div class="dropdown ">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                          {!! $locale !!}
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="/lang/uz">O'zbekcha</a>
                                          <a class="dropdown-item" href="/lang/uzk">Ўзбекча</a>
                                          <a class="dropdown-item" href="/lang/ru">Русский</a>
                                          <a class="dropdown-item" href="/lang/en">English</a>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar Area -->
            <div class="famie-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar" id="famieNav">
                            <!-- Nav Brand -->

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>
                            <!-- Menu -->
                            <div class="classy-menu">
                                <!-- Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <!-- Navbar Start -->
                                <div class="classynav">
                                    {{ menu('Главное меню','layouts.head_menu') }}
                                    <!-- Search Icon -->
                                    <div id="searchIcon">
                                        <i class="icon_search" aria-hidden="true"></i>
                                    </div>


                                </div>
                                <!-- Navbar End -->
                            </div>
                        </nav>

                        <!-- Search Form -->
                        <div class="search-form">
                          <form action="/search" method="get" role="search">
                            <input type="search" required name="q" id="search" placeholder="@lang('messages.Type keywords &amp; press enter...')">
                            <button type="submit" class="d-none"></button>
                          </form>
                          <!-- Close Icon -->
                          <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
  <!-- ##### Header Area End ##### -->

  @yield('content')


  <!-- ##### Footer Area End ##### -->
  <footer class="fdb-block footer-large bg-dark">
    <div class="container pt-3 mb-3">
        <div class="row align-items-center">
            <div class="col-12 col-md-8">
            <ul class="nav justify-content-center justify-content-md-start">
                {{ menu('Нижнее меню','layouts.footer_menu') }}
            </ul>
            </div>


            <div class="col-12 col-md-4" style="text-align:right;">
                <a href="http://www.uz/rus/toprating/cmd/stat/id/27276" target="_top" >
                    <img src="http://www.uz/plugins/top_rating/count/cnt.png?id=27276&amp;r=http%3A//www.agroleasing.uz/kontaktlar&amp;pg=http%3A//www.agroleasing.uz/interaktiv-khizmatlar/sajt-kharitasi&amp;c=Y&amp;j=N&amp;wh=1920x1080&amp;px=24&amp;js=1.3&amp;col=7DC53B&amp;t=ffffff&amp;p=DD444E" width="88" height="31" alt="Топ рейтинг www.uz">
                </a>
            </div>
        </div>
    </div>
    <div class="copywrite-area">
        <div class="container">
            <div class="copywrite-text">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Разработано в -<a href="https://www.goodone.uz/" target="_blank"> GOODONE</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                    </div>
                    <div class="col-12 col-md-6 "  style="text-align:right;">
                         © 2018 Froala. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer>
  <ul class="left_m hidden-xs hidden-sm mytop">
        <li>
            <a class="facebookmy" data-toggle="modal" data-target="#myModal">
                <i class="icon_cabinert_alt" aria-hidden="true" title="kabnet"></i>
                <p> Kirish </p>
            </a>
        </li>
        <li>
            <a class="facebookmy" href="#" title="">
                <i class="calculatorTop" aria-hidden="true" title="kabnet"></i>
                <p> Kalkulyator </p>
            </a>
        </li>
        <li>
            <a class="facebookmy" data-toggle="modal" data-target="#mycontacts">
                <i class="icon-contact"></i>
                <p> Qayta aloqa </p>
            </a>
        </li>
    </ul>
  
  <!-- ##### start modalr okne ##### -->    
    <div class="modal fade regiMy" id="myModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
        
            <div class="cd-tabs">
                <nav>
                  <ul class="cd-tabs-navigation">
                    <li><a href="#" data-content="login" class="selected">@lang('messages.Kirish')</a></li>
                  </ul>
                </nav>
                <ul class="cd-tabs-content">
                  <li data-content="login" class="selected">
                    <form name="login-form">
                      <div class="form-fild">
                        <input type="text" name="" placeholder="Email">
                      </div>
                      <div class="form-fild">
                        <input type="text" name="" placeholder="@lang('messages.Password')">
                      </div>
                      <button type="submit">@lang('messages.YUBORISH')</button>
                    </form>
                  </li>
                </ul>
            </div> 
            
        </div>
      </div>
    </div>
  <!-- #####  modalr okne ##### -->     
  <div class="modal fade modal-contats" id="mycontacts">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
          <h4>@lang('messages.Саволлар ва жавоблар')</h4>
          <form action="/appeal" method="post">
            @csrf
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control" required name="name" placeholder="@lang('messages.Your Name')">
                </div>
                <div class="col-lg-6">
                  <input type="email" class="form-control" required name="email" placeholder="@lang('messages.Your Email')">
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" required name="subject" placeholder="@lang('messages.Your Subject')">
                </div>
                <div class="col-12">
                  <textarea name="comment" class="form-control" required cols="30" rows="10" placeholder="@lang('messages.1')"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn famie-btn">@lang('messages.Send Message')</button>
                </div>
              </div>
            </form>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://johnny.github.io/jquery-sortable/js/jquery-sortable.js"></script>
  
  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/visualimpaired.js"></script>
  <script src="/js/slider.js"></script>
  {{-- <script src="/js/script.js"></script> --}}
  <!-- Popper js -->
  <script src="/js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.jcarousellite.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="/js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="/js/classynav.js"></script>
  <!-- Wow js -->
  <script src="/js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="/js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="/js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="/js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="/js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="/js/active.js"></script>
  <script>
        $('#ham').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            // autoplayHoverPause: true,
            // navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>

</html>