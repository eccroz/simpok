<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login | Remark Admin Template</title>

  <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/site.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/flag-icon-css/flag-icon.css">


  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/login.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo base_url();?>assets/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url();?>assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="<?php echo base_url();?>assets/images/logo.png" alt="...">
        <h2 class="brand-text">Remark</h2>
      </div>
      <p>Sign into your pages account</p>
      <form method="post" action="login.html">
        <div class="form-group">
          <label class="sr-only" for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="Name">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="password"
          placeholder="Password">
        </div>
        <div class="form-group clearfix">
          <div class="checkbox-custom checkbox-inline pull-left">
            <input type="checkbox" id="inputCheckbox" name="checkbox">
            <label for="inputCheckbox">Remember me</label>
          </div>
          <a class="pull-right" href="forgot-password.html">Forgot password?</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
      </form>
      <p>Still no account? Please go to <a href="register.html">Register</a></p>

      <footer class="page-copyright">
        <p>WEBSITE BY amazingSurge</p>
        <p>© 2015. All RIGHT RESERVED.</p>
        <div class="social">
          <a href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a href="javascript:void(0)">
            <i class="icon bd-dribbble" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <!-- End Page -->


  <!-- Core  -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url();?>assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/intro-js/intro.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="<?php echo base_url();?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

  <!-- Scripts -->
  <script src="<?php echo base_url();?>assets/js/core.js"></script>
  <script src="<?php echo base_url();?>assets/js/site.js"></script>

  <script src="<?php echo base_url();?>assets/js/sections/menu.js"></script>
  <script src="<?php echo base_url();?>assets/js/sections/menubar.js"></script>
  <script src="<?php echo base_url();?>assets/js/sections/sidebar.js"></script>

  <script src="<?php echo base_url();?>assets/js/configs/config-colors.js"></script>
  <script src="<?php echo base_url();?>assets/js/configs/config-tour.js"></script>

  <script src="<?php echo base_url();?>assets/js/components/asscrollable.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/animsition.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/slidepanel.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/switchery.js"></script>
  <script src="<?php echo base_url();?>assets/js/components/jquery-placeholder.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>