<!DOCTYPE html>
<html lang="en">

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
                        $success =$this->session->flashdata('success');
                        if($success){
                            echo $success;
                        }
                        
                        
                        ?>
                        <form id="needs-validation" action="<?php echo base_url("admin/register-confirm") ;?>" enctype="multipart/form-data" method="post">

                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control input-lg" placeholder="Enter first name" value="<?php echo set_value('fullname'); ?>"  name="fullname" type="text" />
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