<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>{{ setting('site.site_name') }}</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="/css/bvi.min.css">
  {{-- <link rel="stylesheet" href="/css/bvi-font.css"> --}}
  <link rel="stylesheet" href="/css/slider.style.css">
  
  <link rel="stylesheet" href="/css1/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-html5-1.5.4/cr-1.5.0/fh-3.1.4/datatables.min.css" />
</head>

<body>
  <!-- Preloader -->
  <!--<div class="preloader d-flex align-items-center justify-content-center Samandar">-->
  <!--  <div class="spinner"></div>-->
  <!--</div>-->

  @include('layouts.header')
  <!-- ##### Header Area End ##### -->
<div id="AjaxContent">
  @yield('content')
</div>
{{-- <div id="AjaxContent1">
  @yield('content')
</div> --}}

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
                            @lang('messages.Designed by') -<a href="https://www.goodone.uz/" target="_blank"> GOODONE</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                    </div>
                    <div class="col-12 col-md-6 "  style="text-align:right;">
                         © 2019  @lang('messages.All Rights Reserved')
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer>
  <ul class="left_m hidden-xs hidden-sm mytop">
        <li>
            <a class="facebookmy" data-toggle="modal" data-target="#myModal">
                <i class="icon_cabinert_alt" aria-hidden="true" title="cabinet"></i>
                <p> @lang('messages.Kirish') </p>
            </a>
        </li>
        <li>
            <a class="facebookmy" href="/calculator" title="">
                <i class="calculatorTop" aria-hidden="true" title="calculator"></i>
                <p> @lang('messages.Kalkulyator') </p>
            </a>
        </li>
        <li>
            <a class="facebookmy" data-toggle="modal" data-target="#mycontacts">
                <i class="icon-contact"></i>
                <p> @lang('messages.Contact Us') </p>
            </a>
        </li>
  </ul>
  <ul class="left_m hidden-xs hidden-sm mybottom">
    @foreach($socials as $value)
        <li>
            <a target="_blank" class="{{ $value->title?strtolower($value->title): 'facebook'}}my" href="{{ $value->url }}" title="{{ $value->title }}">
              @php $icons=json_decode($value->image) @endphp
                @foreach($icons as $icon)
                <i class="glyphicon {{ $value->title?strtolower($value->title): 'facebook'}} " style="display: block;
  -webkit-mask: url({{ Voyager::image($icon->download_link) }});
  mask: url({{ Voyager::image($icon->download_link) }});
  -webkit-mask-size: cover;
  mask-size: cover;
  background-color: #fff;"></i>
                @endforeach
                <p> {{ $value->title }} </p>
            </a>
        </li>
    @endforeach
    </ul>
  
  <!-- ##### start modalr okne ##### -->    
    <div class="modal fade regiMy" id="myModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
        
            <div class="cd-tabs">
                <nav>
                  <ul class="cd-tabs-navigation">
                    <li class="ajax_loading">
                      <span class="selected" id="ajax_loading_val">@lang('messages.Kirish')</span>
                      <span id="ajax_loading"></span>
                    </li> 
                  </ul>
                </nav>
                <ul class="cd-tabs-content">
                  <li data-content="login" class="selected" style="padding-top: 0">
                    @if(!Session::get('UserInn'))
                      <div id="smsForm">
                        <form class="login-form">
                          <div class="form-fild">
                            <label id="ajax_label" style="margin-top: -30px;"></label>
                           <input type="text" name="inn" placeholder="@lang('messages.INN number')" id="inn_number" required>
                          </div>
                          <div class="form-fild" id="phone_block" style="display: none">
                            <input type="text" name="phone" id="phone_number" placeholder="@lang('messages.Phone number')" required> 
                          </div>
                          <button type="submit" class="btn famie-btn inn_send">@lang('messages.YUBORISH')</button>
                        </form>
                      </div>
                    @elseif(Session::get('UserInn') && Session::get('sms_code'))
                      <form action="/sms_code/verify" method="POST" class="login-form">
                        @csrf
                        <div class="form-fild">
                         <label id="" style="margin-top: -30px;"></label>
                         <input type="text" placeholder="SMS CODE" name="sms_code" required>
                        </div>
                        <button type="submit" class="btn famie-btn">@lang('messages.YUBORISH')</button>
                      </form>
                    @elseif(Session::get('UserInn') && !Session::get('sms_code'))
                      <form action="/userInn/exit" method="POST" class="login-form">
                        @csrf
                        <div class="form-fild">
                          <a href="/user/cabinet"><h3 align="center">@lang('messages.Kabinetga kirish')</h3> </a>                      
                        </div>
                        <button type="submit" class="btn famie-btn">@lang('messages.CHIQISH')</button>
                      </form>

                    @endif
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
          <form action="/question" method="post">
            @csrf
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control" required name="name" placeholder="@lang('messages.Your Name')">
                </div>
                <div class="col-lg-6">
                  <input type="email" class="form-control" required name="email" placeholder="@lang('messages.Your Email')">
                </div>
                <div class="col-12">
                  <textarea name="body" class="form-control" required cols="30" rows="10" placeholder="@lang('messages.1')"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn famie-btn">@lang('messages.Send Message')</button>
                </div>
              </div>
            </form>
            </div>
        </div>
    </div>



  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->

  <script src="/js/visualimpaired.js"></script>
  <script src="/js/slider.js"></script>
   @yield('script')
  
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
  <script type="text/javascript" src="/js/datatables.min.js"></script>
    
    
  <script src="/js/active.js"></script>
  <script src="/js/ajax.js"></script>
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
         $(document).ready(function () {
            var table = $('#example').DataTable({
                fixedHeader: false,
                colReorder: true,
            });

            var buttons = new $.fn.dataTable.Buttons(table, {
                buttons: [
                    'excel',
                    'pdf'
                    // 'colvis'
                ]
            }).container().appendTo($('#tblBtns'));

            var setButtonStyle = function () {
                var btns = document.querySelectorAll('.dt-buttons')[0].children;
                [].forEach.call(btns, function (btn) {
                    btn.classList.remove('btn-secondary');
                    btn.classList.add('btn-outline-secondary')
                });
            }();
        });
    </script>
</body>

</html>