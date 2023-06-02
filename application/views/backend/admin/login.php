<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <link href="<?= base_url('asset-login/'); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('asset-login/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('asset-login/'); ?>css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        .bg {
            background-size: cover;
        }
    </style>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/backend_assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/backend_assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->



        <header>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="#"><img src="images/logo-2.png" alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->


        <!-- Login Section -->
        <div class="login-section bg" style="background-image: url('<?= base_url('asset-login/'); ?>images/login/')">
            <div class="auto-container">
                <div class="inner-container">
                    <!-- Title Box -->
                    <div class="title-box">
                        <!-- <div class="title">sign in</div> -->
                        <h2>Sistem Pengelolaan Alat Olahraga SMPN 2 CIBARUSAH</h2>
                    </div>
                    <div class="image mb-4 text-center">
                        <!--<img src="<?= base_url('asset-login/images/login/pos_indonesia.png'); ?>" title="poltek" width="150" /> -->
                    </div>
                    <div class="title-box">
                        <h2><span></span></h2>
                        <div class="title">Login Admin</div>
                    </div>

                    <!-- Login Form -->
                    <div class="panel-body styled-form">
                        <form class="text-center" action="do_login" method="post" role="form" id="login-form">
                            <div role="alert" class="alert alert-success hidden">
                                <strong>Berhasil!</strong> <span>Login berhasil, anda akan dialihkan.</span>
                            </div>
                            <div role="alert" class="alert alert-warning hidden">
                                <strong>Memproses!</strong> <span>Mohon tunggu ...</span>
                            </div>
                            <div role="alert" class="alert alert-danger hidden">
                                <strong>Gagal!</strong> <span>Login gagal.</span>
                            </div>

                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group text-center">
                                    <button class="theme-btn btn-block btn-style-three"><span class="txt">Login</span></button>
                                </div>

                                <!-- <div class="form-group">
                                    <div class="or text-danger">Hubungi Administrator</div>
                                </div> -->
                                <!--                                 
                                <div class="form-group mb-4">
                                    <div class="users">untuk registrasi akun / lupa password
                                         <a href="#">Signup</a> 
                                    </div>
                                </div> -->

                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Login Section -->

        <!-- Main Footer -->
        <footer class="main-footer">

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright text-right">Copyright &copy; 2023 UBSI Karawang 12207164</div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->





    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/backend_assets/dist/js/sb-admin-2.js"></script>

    <!-- Validation Plugin -->
    <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery-validation/jquery.validate.js"></script>

    <!-- VALIDATE JS -->
    <script type="text/javascript">
        var jvalidate = $("#login-form").validate({
            ignore: [],
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }
            },
            submitHandler: function(form) {
                var target = $(form).attr('action');
                $('#login-form .alert-warning').removeClass('hidden');
                $('#login-form .alert-success').addClass('hidden');
                $('#login-form .alert-danger').addClass('hidden');
                $.ajax({
                    url: target,
                    type: 'POST',
                    dataType: 'json',
                    data: $(form).serialize(),
                    success: function(response) {
                        $('#login-form .alert-warning').addClass('hidden');
                        if (response.status == 'ok') {
                            $('#login-form .alert-success').removeClass('hidden').children('span').text(response.msg);
                            window.location.href = response.redirect;
                        } else
                            $('#login-form .alert-danger').removeClass('hidden').children('span').text(response.msg);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert(textStatus, errorThrown);
                    }
                });
            }
        });
    </script>


    <script src="<?= base_url('asset-login/'); ?>js/jquery.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/jquery.fancybox.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/appear.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/parallax.min.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/tilt.jquery.min.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/jquery.paroller.min.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/owl.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/wow.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/nav-tool.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/jquery-ui.js"></script>
    <script src="<?= base_url('asset-login/'); ?>js/script.js"></script>


</body>

</html>