<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Mar 2020 14:11:18 GMT -->
<head><title>Edugate | Register</title>
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
                <div class="page-register rlp">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table"><a href="index.html"><img src="<?php echo base_url();?>assets/images/logo-color-1.png" alt="" class="login"/></a>

                                <div class="register-title rlp-title">create your account and join with us!</div>
                                <form action="<?php echo base_url("instructor/register-confirm") ;?>" enctype="multipart/form-data" method="post">
                                <div class="register-form bg-w-form rlp-form">
                                    <div class="row">
                                        <div class="col-md-6"><label for="regname" class="control-label form-label">NAME <span class="highlight">*</span></label><input id="regname" name="name"type="text" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="regemail" class="control-label form-label">email <span class="highlight">*</span></label><input id="regemail" name="email"type="email" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="regpassword" class="control-label form-label">password <span class="highlight">*</span></label><input id="regpassword" name="password"type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="reregpassword" class="control-label form-label">confirm password <span class="highlight">*</span></label><input id="reregpassword"name="repassword" type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="designation" class="control-label form-label">designation <span class="highlight">*</span></label><input id="designation"name="designation" type="text" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="contact" class="control-label form-label">contact <span class="highlight">*</span></label><input id="contact"name="contact" type="text" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        <div class="col-md-6"><label for="short_desc" class="control-label form-label">Short description <span class="highlight">*</span></label><input id="short_desc"name="short_desc" type="text" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>

                                        <div class="col-md-6"><label for="images" class="control-label form-label">images <span class="highlight">*</span></label><input id="images"name="pic" type="file" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                        
                                    </div>
                                </div>
                               
                                <div class="register-submit">
                                    <button type="submit"  class="btn btn-register btn-green"><span>Submit</span></button>
                                </div>
                                <div class="register-submit" style="margin-top:5px;">
                                   
                                    <button  class="btn btn-register btn-green"><span><a href="<?php echo base_url('students/register');?>" style="color:white;">student</a></span></button>
                                    <button  class="btn btn-register btn-green"><span><a href="<?php echo base_url('instructor/register');?>" style="color:white;">instractor</a></span></button>
                                </div>
                                </form>
                            </div>
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

<!-- Mirrored from swlabs.co/edugate/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Mar 2020 14:11:18 GMT -->
</html>



<!-- <!DOCTYPE html>
<html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Design_Gurus" name="author">
    <meta content="WOW Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title><?php echo (isset($title))?$title:"Admin"; ?></title>

    <!--favicon-->
    <link href="<?php echo base_url();?>assets/images/favicon.ico" rel="shortcut icon">

    <!--Preloader-CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/preloader/preloader.css">

    <!--bootstrap-4-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

    <!--Custom Scroll-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/customScroll/jquery.mCustomScrollbar.min.css">
    <!--Font Icons-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/simple-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/dripicons/dripicons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/eightyshades/eightyshades.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/foundation/foundation-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/metrize/metrize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/typicons/typicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/weathericons/css/weather-icons.min.css">

    <!--Date-range-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/date-range/daterangepicker.css">
    <!--Drop-Zone-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/dropzone/dropzone.css">
    <!--Full Calendar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/full-calendar/fullcalendar.min.css">
    <!--Normalize Css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
    <!--Main Css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
</head>
<body>

<!---Preloader Starts Here--->
<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h1 class="ip-logo text-center"><img class="img-fluid" src="assets/images/logo-c.png" alt="" class="ip-logo text-center"/></h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
</div>
<!---Preloader Ends Here--->

<section style="background: url(../../../images.pexels.com/photos/38519/macbook-laptop-ipad-apple-38519663a.jpg?w=940&amp;h=650&amp;auto=compress&amp;cs=tinysrgb);background-size: cover">
    <div class="height-100-vh bg-primary-trans">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 col-lg-5">
                    <div class="register-div">
                        <p class="logo mb-1">WOW - Admin</p>
                        <p class="mb-4" style="color: #a5b5c5">Create an account.</p>

                        <!-- form er error check korar jonno-->
                        <?php 
                            $t =$this->session->flashdata('s');
                                $string = read_file($t);
                                if($string){

                                    echo '<p>'. $string .'</p>';
                                }
                               
                        $success =$this->session->flashdata('success');
                        if($success){
                            echo '<h2>'. $success .'</h2>';
                        }
                        
                        
                        ?>
                        <form id="needs-validation" action="<?php echo base_url("instructor/register-confirm") ;?>" enctype="multipart/form-data" method="post">

                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control input-lg" placeholder="Enter first name" value="<?php echo set_value('fullname'); ?>"  name="name" type="text" />
                                <!-- <div class="invalid-feedback">This field is required.</div> -->
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control input-lg" placeholder="Enter email address" value="<?php echo set_value('email'); ?>" name="email" type="text" />
                                <!-- <div class="invalid-feedback">This field is required.</div> -->
                            </div>

                            <div class="form-group">
                                <label>Create Password</label>
                                <input class="form-control input-lg" placeholder="Create strong password" value="<?php echo set_value('password'); ?>"name="password" type="password" />
                                <!-- <div class="invalid-feedback">This field is required.</div> -->
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control input-lg" placeholder="Confirm password" value="<?php echo set_value('repassword'); ?>" name="repassword" type="repassword" />
                                <!-- <div class="invalid-feedback">This field is required.</div> -->
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <input class="form-control" value="<?php echo set_value('pic'); ?>" name="pic" type="file" />
                                <!-- <div class="invalid-feedback">This field is required.</div> -->
                            </div>
                            <div class="form-group">
                                <label>address</label>
                                <textarea class="form-control" value="<?php echo set_value('address'); ?>" name="address" type="text" ></textarea>
                                <!-- <div class="invalid-feedback">This field is required.</div> -->
                            </div>

                            <!-- <div class="checkbox">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">I agree to the Grapes <a href="javascript:void(0);" class="btn-link">Terms and Privacy</a>.</span>
                                </label>
                            </div> -->
                            <input type="submit" value="register" class="btn btn-primary mt-2">

                            <small class="text-muted mt-5 mb-1 d-block">Already have an account? <a href="pages_login.html">Login Now!</a></small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---Right Tray--->
<!-- <div class="right-sidebar px-3">
    <button class="right-side-toggle"><i class="fa fa-cog fa-spin"></i></button>
	<div class="block bg-trans" style="margin-bottom: 0">
        <div class="block-heading">
            <h5>Top Navigation</h5>
        </div>
        <ul class="list-unstyled top-nav themecolors">
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/cyan"><div class="color-div" style="background: #18BCC9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/blue"><div class="color-div" style="background: #1880c9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/green"><div class="color-div" style="background: #18c97e"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/red"><div class="color-div" style="background: #e13f4c"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/purple"><div class="color-div" style="background: #723fe1"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="topNavigationLayout/orange"><div class="color-div" style="background: rgb(255,120,45)"><i class="fa fa-check my-auto"></i></div></a></li>
        </ul>
    </div>
	
    <div class="block bg-trans">
        <div class="block-heading">
            <h5>Side Navigation</h5>
        </div>
        <ul class="list-unstyled side-nav themecolors">
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/cyan"><div class="color-div active" style="background: #18BCC9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/blue"><div class="color-div" style="background: #1880c9"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/green"><div class="color-div" style="background: #18c97e"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/red"><div class="color-div" style="background: #e13f4c"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/purple"><div class="color-div" style="background: #723fe1"><i class="fa fa-check my-auto"></i></div></a></li>
            <li><a href="javascript:void(0)" data-laycolor="sideNavigationLayout/orange"><div class="color-div" style="background: rgb(255,120,45)"><i class="fa fa-check my-auto"></i></div></a></li>
        </ul>
    </div>
</div> -->
 
<!--Jquery-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<!--Bootstrap Js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!--Modernizr Js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>

<!--Morphin Search JS-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/morphin-search/classie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/morphin-search/morphin-search.js"></script>
<!--Morphin Search JS-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/preloader/pathLoader.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/preloader/preloader-main.js"></script>

<!--Chart js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/charts/Chart.min.js"></script>

<!--Sparkline Chart Js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sparkline/jquery.charts-sparkline.js"></script>

<!--Custom Scroll-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/customScroll/jquery.mCustomScrollbar.min.js"></script>
<!--Sortable Js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/sortable2/sortable.min.js"></script>
<!--DropZone Js-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/dropzone/dropzone.js"></script>
<!--Date Range JS-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/date-range/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/date-range/daterangepicker.js"></script>
<!--CK Editor JS-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/ckEditor/ckeditor.js"></script>
<!--Data-Table JS-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/datatables.min.js"></script>
<!--Editable JS-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/editable/editable.js"></script>
<!--Full Calendar JS-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/full-calendar/fullcalendar.min.js"></script>

<!--- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

<!-- Mirrored from wow.designgurus.in/sideNavigationLayout/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 06:12:47 GMT -->
</html>