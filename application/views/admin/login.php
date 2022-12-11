<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Mar 2020 14:11:18 GMT -->
<head>
    <!-- <title>Edugate | Login</title> -->
    <title> <?php echo (isset($title))?$title:"Admin"; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/libs/owl-carousel-2.0/<?php echo base_url();?>assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    --><!--link(type="text/css", rel='stylesheet', href='<?php echo base_url();?>assets/css/color-1.css', id="color-skins")-->
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="<?php echo base_url();?>assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/js-cookie/js.cookie.js"></script>
    <script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', '<?php echo base_url();?>assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', '<?php echo base_url();?>assets/css/color-1.css');
    }


    </script>
</head>
<body><!-- HEADER-->
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-login rlp">
                    <div class="container">
                        <div class="login-wrapper rlp-wrapper">
                            <div class="login-table rlp-table"><a href="index.html"><img src="<?php echo base_url();?>assets/images/logo-color-1.png" alt="" class="login"/></a>
                            <form action="<?php echo base_url('admin/check'); ?>" method="post">
                                <div class="login-title rlp-title">login to your edugate.com account!</div>
                                <div class="login-form bg-w-form rlp-form">
                                    <div class="row">
                                        <div class="col-md-12"><label for="regemail" class="control-label form-label">email <span class="highlight">*</span></label><input id="regemail" type="email" placeholder="" name="email" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                        <div class="col-md-12"><label for="regpassword" class="control-label form-label">password <span class="highlight">*</span></label><input id="regpassword" type="password" name="pass" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                    </div>
                                </div>
                                <div class="login-submit">
                                    <button type="submit" class="btn btn-login btn-green"><span>sign in</span></button>
                                </div>
                                <div class="login-submit" style="margin-top:5px;">
                                <button  class="btn btn-login btn-green"><span><a href="<?php echo base_url('admin/login');?>" style="color:white;">admin</a></span></button>
                                    <button  class="btn btn-login btn-green"><span><a href="<?php echo base_url('students/login');?>" style="color:white;">student</a></span></button>
                                    <button  class="btn btn-login btn-green"><span><a href="<?php echo base_url('instructor/login');?>" style="color:white;">instractor</a></span></button>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer></footer>
<!-- THEME SETTING-->
<div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>
    <a href="javascript:;" class="btn-theme-setting"><i class="fa fa-tint"></i></a>

    <div class="content-theme-setting"><h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
    </div>
</div>
<!-- LOADING--><!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', '<?php echo base_url();?>assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', '<?php echo base_url();?>assets/images/logo-color-1.png');
}</script>
<script src="<?php echo base_url();?>assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="<?php echo base_url();?>assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/appear/jquery.appear.js"></script>
<script src="<?php echo base_url();?>assets/libs/count-to/jquery.countTo.js"></script>
<script src="<?php echo base_url();?>assets/libs/wow-js/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url();?>assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE--></body>

<!-- Mirrored from swlabs.co/edugate/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Mar 2020 14:11:18 GMT -->
</html>