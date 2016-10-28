<!DOCTYPE html>
<html class="no-js before-run" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap admin template">
        <meta name="author" content="">

        <title>SI-MPOK | Sistem Informasi Manajemen Polikinik BMKG</title>

        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/logo.png">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-extend.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/site.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/animsition/animsition.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/asscrollable/asScrollable.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/switchery/switchery.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/intro-js/introjs.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/slidepanel/slidePanel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/flag-icon-css/flag-icon.css">


        <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/web-icons/web-icons.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fonts/brand-icons/brand-icons.min.css">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


        <!--[if lt IE 9]>
          <script src="<?php echo base_url(); ?>/assets/vendor/html5shiv/html5shiv.min.js"></script>
          <![endif]-->

        <!--[if lt IE 10]>
          <script src="<?php echo base_url(); ?>/assets/vendor/media-match/media.match.min.js"></script>
          <script src="<?php echo base_url(); ?>/assets/vendor/respond/respond.min.js"></script>
          <![endif]-->

        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>/assets/vendor/modernizr/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/breakpoints/breakpoints.js"></script>
        <script>
            Breakpoints();
        </script>
    </head>
    <body>
        <!--[if lt IE 8]>
              <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

        <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                        data-toggle="menubar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>
                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                        data-toggle="collapse">
                    <i class="icon wb-more-horizontal" aria-hidden="true"></i>
                </button>
                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                        data-toggle="collapse">
                    <span class="sr-only">Toggle Search</span>
                    <i class="icon wb-search" aria-hidden="true"></i>
                </button>
                <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                    <img class="navbar-brand-logo" src="<?php echo base_url(); ?>/assets/images/logo.png">
                    <span class="navbar-brand-text"><img src="<?php echo base_url(); ?>/assets/images/logos.png"> </span>
                </div>
            </div>

            <div class="navbar-container container-fluid">
                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                    <!-- Navbar Toolbar -->
                    <ul class="nav navbar-toolbar">
                        <li class="hidden-float" id="toggleMenubar">
                            <a data-toggle="menubar" href="#" role="button">
                                <i class="icon hamburger hamburger-arrow-left">
                                    <span class="sr-only">Toggle menubar</span>
                                    <span class="hamburger-bar"></span>
                                </i>
                            </a>
                        </li>
                        <li class="hidden-xs" id="toggleFullscreen">
                            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                            </a>
                        </li>
                        <li class="hidden-float">
                            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
                                <span class="sr-only">Toggle Search</span>
                            </a>
                        </li>

                    </ul>
                    <!-- End Navbar Toolbar -->

                    <!-- Navbar Toolbar Right -->
                    <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                        <li class="dropdown">
                            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <span class="avatar avatar-online">
                                    <img src="<?php echo base_url(); ?>/assets/images/portraits/5.jpg" alt="...">
                                    <i></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                                </li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                                </li>
                                <li class="divider" role="presentation"></li>
                                <li role="presentation">
                                    <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <i class="icon wb-bell" aria-hidden="true"></i>
                                <span class="badge badge-danger up">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <li class="dropdown-menu-header" role="presentation">
                                    <h5>NOTIFICATIONS</h5>
                                    <span class="label label-round label-danger">New 5</span>
                                </li>

                                <li class="list-group" role="presentation">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">A new order has been placed</h6>
                                                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Completed the task</h6>
                                                        <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Settings updated</h6>
                                                        <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Event started</h6>
                                                        <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Message received</h6>
                                                        <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer" role="presentation">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon wb-settings" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" role="menuitem">
                                        All notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
                               data-animation="scale-up" role="button">
                                <i class="icon wb-envelope" aria-hidden="true"></i>
                                <span class="badge badge-info up">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                                <li class="dropdown-menu-header" role="presentation">
                                    <h5>MESSAGES</h5>
                                    <span class="label label-round label-info">New 3</span>
                                </li>

                                <li class="list-group" role="presentation">
                                    <div data-role="container">
                                        <div data-role="content">
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-online">
                                                            <img src="<?php echo base_url(); ?>/assets/portraits/2.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Mary Adams</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                                                        </div>
                                                        <div class="media-detail">Anyways, i would like just do it</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-off">
                                                            <img src="<?php echo base_url(); ?>/assets/portraits/3.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Caleb Richards</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                                                        </div>
                                                        <div class="media-detail">I checheck the document. But there seems</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-busy">
                                                            <img src="<?php echo base_url(); ?>/assets/portraits/4.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">June Lane</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                                <div class="media">
                                                    <div class="media-left padding-right-10">
                                                        <span class="avatar avatar-sm avatar-away">
                                                            <img src="<?php echo base_url(); ?>/assets/portraits/5.jpg" alt="..." />
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Edward Fletcher</h6>
                                                        <div class="media-meta">
                                                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                                                        </div>
                                                        <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer" role="presentation">
                                    <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                        <i class="icon wb-settings" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" role="menuitem">
                                        See all messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="toggleChat">
                            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
                                <i class="icon wb-chat" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Navbar Toolbar Right -->
                </div>
                <!-- End Navbar Collapse -->

                <!-- Site Navbar Seach -->
                <div class="collapse navbar-search-overlap" id="site-navbar-search">
                    <form role="search">
                        <div class="form-group">
                            <div class="input-search">
                                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                        data-toggle="collapse" aria-label="Close"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Site Navbar Seach -->
            </div>
        </nav>
        <div class="site-menubar">
            <div class="site-menubar-body">
                <div>
                    <div>
                        <ul class="site-menu">
                            <li class="site-menu-category">Main Menu</li>
                            <li class="site-menu-item">
                                <a href="#" data-slug="dashboard">
                                    <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                                    <span class="site-menu-title">Dashboard</span>

                                </a>

                            </li>
                            <li class="site-menu-item">
                                <a href="#" data-slug="dashboard">
                                    <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                                    <span class="site-menu-title">Dokter</span>

                                </a>

                            </li>
                            <li class="site-menu-item">
                                <a href="#" data-slug="dashboard">
                                    <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                                    <span class="site-menu-title">Pasien</span>

                                </a>

                            </li>
                            <li class="site-menu-item">
                                <a href="#" data-slug="dashboard">
                                    <i class="site-menu-icon wb-heart" aria-hidden="true"></i>
                                    <span class="site-menu-title">Rawat</span>

                                </a>

                            </li>
                            
                            
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" data-slug="page">
                                    <i class="site-menu-icon wb-rubber" aria-hidden="true"></i>
                                    <span class="site-menu-title">Obat</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">

                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="" data-slug="page-faq">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Data Obat</span>
                                        </a>
                                    </li>

                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="#" data-slug="page-gallery">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Jenis</span>
                                        </a>
                                    </li>                
                                </ul>
                            </li>

                            
                            <li class="site-menu-item">
                                <a class="animsition-link" href="" data-slug="page-faq">
                                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                    <span class="site-menu-title">Log History</span>
                                </a>
                            </li>


                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)" data-slug="page">
                                    <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
                                    <span class="site-menu-title">Pengaturan</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">

                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="" data-slug="page-faq">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Poly</span>
                                        </a>
                                    </li>

                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="#" data-slug="page-gallery">
                                            <i class="site-menu-icon " aria-hidden="true"></i>
                                            <span class="site-menu-title">Pengguna</span>
                                        </a>
                                    </li>                
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="site-menubar-footer">
            </div>
        </div>



        <!-- Page -->
        <div class="page">
            <div class="page-content">
                <h2>Dashboard</h2>
                <div class="col-xlg-3 col-md-12" style="">
                    <div class="row height-full">
                        <div class="col-xlg-12 col-md-6" style="height:50%;">
                            <!-- Panel Overall Sales -->
                            <div class="widget widget-shadow">
                                <div class="widget-content widget-radius padding-30 bg-blue-600 white">
                                    <div class="counter counter-lg counter-inverse text-left">
                                        <div class="counter-label margin-bottom-20">
                                            <div>PASIEN TERDAFTAR</div>
                                            <div class="blue-200"></div>
                                        </div>
                                        <div class="counter-number-group margin-bottom-15">
                                            <span class="counter-number-related">TOTAL</span>
                                            <span class="counter-number">128</span>
                                        </div>
                                        <div class="counter-label">
                                            <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                    <span class="counter-number font-size-14">BULAN INI</span>
                                                    <span class="counter-number-related font-size-14">35</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Overall Sales -->
                        </div>                       
                        <div class="col-xlg-12 col-md-6" style="height:50%;">
                            <!-- Panel Overall Sales -->
                            <div class="widget widget-shadow">
                                <div class="widget-content widget-radius padding-30 bg-orange-600 white">
                                    <div class="counter counter-lg counter-inverse text-left">
                                        <div class="counter-label margin-bottom-20">
                                            <div>DATA RAWAT</div>
                                            <div class="blue-200"></div>
                                        </div>
                                        <div class="counter-number-group margin-bottom-15">
                                            <span class="counter-number-related">TOTAL</span>
                                            <span class="counter-number">1288</span>
                                        </div>
                                        <div class="counter-label">
                                            <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                    <span class="counter-number font-size-14">BULAN INI</span>
                                                    <span class="counter-number-related font-size-14">35</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Overall Sales -->
                        </div>                       
                    </div>

                    <!--//sfdsf-->
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
        <!-- End Page -->


        <!-- Footer -->
        <footer class="site-footer">
            <span class="site-footer-legal">© 2017 Badan Meteorologi, Klimatologi dan Geofisika | Poliklinik BMKG</span>
            <div class="site-footer-right">
                Supported By: <a href="#">PT QWERTYUIOP</a>
            </div>
        </footer>

        <!-- Core  -->
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/animsition/jquery.animsition.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/asscroll/jquery-asScroll.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

        <!-- Plugins -->
        <script src="<?php echo base_url(); ?>/assets/vendor/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/intro-js/intro.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/screenfull/screenfull.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/slidepanel/jquery-slidePanel.js"></script>


        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>/assets/js/core.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/site.js"></script>

        <script src="<?php echo base_url(); ?>/assets/js/sections/menu.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/sections/menubar.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/sections/sidebar.js"></script>

        <script src="<?php echo base_url(); ?>/assets/js/configs/config-colors.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/configs/config-tour.js"></script>

        <script src="<?php echo base_url(); ?>/assets/js/components/asscrollable.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/components/animsition.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/components/slidepanel.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/components/switchery.js"></script>


        <script>
            (function (document, window, $) {
                'use strict';

                var Site = window.Site;
                $(document).ready(function () {
                    Site.run();
                });
            })(document, window, jQuery);
        </script>

    </body>

</html>