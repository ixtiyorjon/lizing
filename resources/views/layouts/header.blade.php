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
                                    <a href="/flag">
                                      <i class="my-fa-icon bayro"></i> <span>@lang('messages.Flag')</span>
                                    </a>
                                </div>
                                <div id="eyeIcon">
                                    <a href="/gerb">
                                      <i class="my-fa-icon gerp"></i>
                                      <span>@lang('messages.Emblem')</span>
                                    </a>
                                </div>
                                <div id="eyeIcon">
                                    <a href="/anthem">
                                      <i class="my-fa-icon mathiya"></i>
                                      <span>@lang('messages.Anthem')</span>
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


                                <!-- Navbar Toggler -->
                                <div class="classy-navbar-toggler">
                                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                                </div>
                                <!-- Menu -->
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
                            <div class="classy-menu">

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