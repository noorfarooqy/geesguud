<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Geesguud - Adminstration</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/drongo_logo.svg">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="/assets/css/style-primary.css">

</head>

<body>

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="/">
                            <img src="/images/geesguud_logo.png" alt="">
                            <img src="/images/geesguud_logo.png" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#">
                                            @if (Cookie::get('locale') === "en")
                                            <img class="lang-flag" src="/assets/images/flags/flag-1.jpg" alt="">
                                            @else
                                            <img class="lang-flag" src="/assets/images/flags/flag-5.png" height="15" alt="">
                                            @endif
                                            <i class="zmdi zmdi-caret-down drop-arrow"></i>
                                        </a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li>
                                                <a href="" onclick="event.preventDefault(); document.querySelector('form#english-form').submit()">
                                                    <img src="/assets/images/flags/flag-1.jpg" alt=""> 
                                                    English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" onclick="event.preventDefault(); document.querySelector('form#swedish-form').submit()">
                                                <img class="lang-flag" src="/assets/images/flags/flag-5.png" height="15" alt="">
                                                Swedish
                                                </a>
                                            </li>
                                        </ul>
                                        <form action="/lang" method="post" id="english-form">
                                            <input type="hidden" name="language" value="1">
                                            @csrf
                                        </form>
                                        <form action="/lang" method="post" id="swedish-form">
                                            <input type="hidden" name="language" value="2">
                                            @csrf
                                        </form>

                                    </li>


                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="/assets/images/avatar/avatar-1.jpg" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">
                                                {{Auth::user()->name}}
                                            </span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">{{Auth::user()->name}}</a></h5>
                                                <a class="mail" href="#">{{Auth::user()->email}}</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li class=""><a href="/admin"><i class="ti-home"></i> <span>{{__('admin_menu.Dashboard')}}</span></a></li>
                        <li class="has-sub-menu"><a href="/admin/teams"><i class="ti-package"></i> <span> {{__('admin_menu.Team')}} </span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="/admin/teams/leagues"><span>{{__('admin_menu.Teams_leagues')}}</span></a></li>
                                <li><a href="/admin/teams/categories"><span>{{__('admin_menu.Teams_categories')}}</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="/admin/members"><i class="ti-crown"></i> <span>{{__('admin_menu.Members')}}</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="/admin/members/list"><span>{{__('admin_menu.Members_list')}}</span></a></li>
                                <li><a href="/admin/members/new"><span>{{__('admin_menu.Members_new')}}</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-stamp"></i> <span>{{__('admin_menu.News')}}</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="/admin/news/published"><span>{{__('admin_menu.News_published')}}</span></a></li>
                                <li><a href="/admin/news/new"><span>{{__('admin_menu.News_new')}}</span></a></li>
                                <li><a href="/admin/news/inactive"><span>{{__('admin_menu.News_inactive')}}</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="ti-layout"></i> <span>{{__('admin_menu.Users')}}</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="/admin/user/list"><span>{{__('admin_menu.Users_list')}}</span></a></li>
                                <li><a href="/admin/user/new"><span>{{__('admin_menu.Users_new')}}</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            @yield('body-content')

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">{{gmdate('Y', time())}} &copy; <a target="_blank" href="https://drongo.tech">Drongo Technology</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/vendor/popper.min.js"></script>
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="/assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="/assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="/assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="/assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="/assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="/assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="/assets/js/plugins/vmap/vmap.active.js"></script>

</body>

</html>