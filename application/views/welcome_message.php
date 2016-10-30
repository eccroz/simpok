<html lang="en" class="gr__dataonline_bmkg_go_id"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>DATA ONLINE - PUSAT DATABASE - BMKG</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <meta content="" name="description">
        <meta content="" name="author">
        <link href="<?php echo base_url() ?>assets/css-custom/css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/uniform.default.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url() ?>assets/css-custom/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/plugins.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/layout.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/default.css" rel="stylesheet" type="text/css" id="style_color">
        <link href="<?php echo base_url() ?>assets/css-custom/custom.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css-custom/dashboard.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css-custom/notify.css">

        <script src="<?php echo base_url() ?>assets/js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <!--<script type="text/javascript" src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/config.js.download"></script>-->
        <!--<script> window.MC = {baseUrl: 'http://dataonline.bmkg.go.id/'};</script>-->
    </head>

    <body data-gr-c-s-loaded="true">
        <div class="page-header navbar-fixed-top">
            <div class="page-header-top">
                <div class="container">
                    <a class="navbar-brand " href="">
                        <img src="<?php echo base_url() ?>assets/img/logo.png" alt="DATA ONLINE - PUSAT DATABASE - BMKG">
                    </a>
                </div>
            </div>
        </div>
        <div class="page-container" style="margin-top:120px">

            <div class="page-content" style="min-height: 278px;">
                <div class="container">

                    <div class="row margin-top-10">
                        <div class="col-md-8 col-sm-12">
                            <div class="portlet light dashboard-menu-container">
                                <div class="portlet-body">
                                    <div class="dashboard-menu row">
                                         
                                        <div class="col-md-4 menu-row">
                                            <a href="">
                                                <div class="panel do-panel-icon ">
                                                    <div class="panel-body">
                                                        <div class="icon-wrapper">
                                                            <img width="140px;" src="https://laskarmim.files.wordpress.com/2011/09/rs1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer"><h4>Metadata Stasiun</h4></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 menu-row">
                                            <a href="">
                                                <div class="panel do-panel-icon">
                                                    <div class="panel-body">
                                                        <div class="icon-wrapper">
                                                            <img width="140px;" src="https://laskarmim.files.wordpress.com/2011/09/rs1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer"><h4>Metadata Stasiun</h4></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4 menu-row">
                                            <a href="">
                                                <div class="panel do-panel-icon">
                                                    <div class="panel-body">
                                                        <div class="icon-wrapper">
                                                            <img width="140px;" src="https://laskarmim.files.wordpress.com/2011/09/rs1.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="panel-footer"><h4>Metadata Stasiun</h4></div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
 
                        </div>
                        <div class="col-md-3 col-sm-12">

                            <div class="portlet light login-portlet">
                                <div class="portlet-body">
                                    <form class="login-form" method="post" action="http://dataonline.bmkg.go.id/main/login">
                                        <h4 class="form-title">Masuk ke aplikasi</h4>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Nama Pengguna</label>
                                            <div class="input-icon">
                                                <i class="fa fa-user"></i>
                                                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" name="username" placeholder="Nama Pengguna" autofocus="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label visible-ie8 visible-ie9">Kata Sandi</label>
                                            <div class="input-icon">
                                                <i class="fa fa-lock"></i>
                                                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Kata Sandi" name="password">
                                            </div>
                                        </div>

                                        <div class="form-actions" style="height:50px;">
                                            <button type="submit" class="btn btn-success pull-right">
                                                Masuk <i class="m-icon-swapright m-icon-white"></i>
                                            </button>
                                        </div>

                                        <div>
                                            <p>
                                                <a class="btn btn-xs btn-primary" href="http://dataonline.bmkg.go.id/register">Registrasi </a>
                                                <a class="btn btn-xs btn-primary" id="forgot-true" href="http://dataonline.bmkg.go.id/home#forgot">Lupa Password ? </a>
                                            </p>
                                        </div>

                                    </form>

                                    <form class="forgot-form" method="post" action="http://dataonline.bmkg.go.id/admin/system/auth/pwreset_code_request" style="display: none;">
                                        <h4 class="form-title">Lupa Password aplikasi</h4>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" name="email" autofocus="">
                                        </div>
                                        <div class="form-group">
                                            <img src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/1477798114.2526.jpg" style="width: 200; height: 50; border: 0;" alt=" ">									<label class="control-label">Masukkan kode diatas</label>
                                            <input class="form-control placeholder-no-fix" type="test" autocomplete="off" name="captcha">
                                        </div>

                                        <div class="loader-forgot" style="display: none;">
                                            <i class="fa fa-gear fa-spin"></i> Harap Tunggu...
                                        </div>

                                        <div class="form-actions" style="height:50px;">
                                            <button type="submit" class="btn btn-success pull-right">
                                                Proses <i class="m-icon-swapright m-icon-white"></i>
                                            </button>
                                        </div>

                                        <div>
                                            <p>
                                                <a class="btn btn-xs btn-primary" id="forgot-false" href="http://dataonline.bmkg.go.id/home#login">Kembali </a>
                                            </p>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <span class="load-css"></span>
                            <span class="load-js">

                                <script src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/jquery.form.js.download" type="text/javascript"></script><script src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/login.js.download" type="text/javascript"></script><script src="http://dataonline.bmkg.go.id/admin/asset/plugins/jquery-form/jquery.form.js" type="text/javascript"></script><script src="http://dataonline.bmkg.go.id/assets/js/login.js" type="text/javascript"></script></span>
                            <!-- END PORTLET-->


                        </div>

                        <!-- END PORTLET-->

                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN FOOTER -->

        <div class="page-prefooter">
            <div class="container">
                <div class="row">
                    <div style="text-align: justify;" class="col-md-4 col-sm-6 col-xs-12 footer-block">
                        <h2>Tentang Aplikasi</h2>
                        <p>
                            Aplikasi DATA ONLINE adalah aplikasi layanan data untuk pengguna,
                            baik untuk kalangan internal BMKG maupun eksternal yang terdiri dari kalangan
                            Perguruan Tinggi, Institusi Kementrian/Lembaga, Swasta, dan Masyarakat pengguna data
                            MKKuG
                        </p>
                    </div>


                    <div style="float:right" class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>Kontak</h2>
                        <address class="margin-bottom-40">
                            PUSAT DATABASE - BMKG <br>
                            Telp : (021) 4246321, Fax : (021) 4246703  <br> 
                            Email : <a>dataonline@bmkg.go.id</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-footer">
            <div class="container">
                Hak Cipta © 2015. BMKG		- PUSAT DATABASE	</div>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END FOOTER -->
        <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/jquery-ui.min.js.download" type="text/javascript"></script>
        <script src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/bootstrap.min.js.download" type="text/javascript"></script>
        <script type="text/javascript" src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/notify.js.download"></script>
        <script src="./DATA ONLINE - PUSAT DATABASE - BMKG_files/jquery.validate.min.js.download" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                APP.loadJs("http://dataonline.bmkg.go.id/admin/asset/plugins/jquery-form/jquery.form.js");
                APP.loadJs("http://dataonline.bmkg.go.id/assets/js/login.js");

                Login.init();
            });
        </script>



    </body></html>