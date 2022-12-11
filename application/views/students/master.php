<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 19:24:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Students Dashboard</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="<?php echo base_url();?>dassets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="<?php echo base_url();?>dassets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url();?>dassets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="<?php echo base_url();?>dassets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url();?>dassets/css/fontawesome.rtl.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="<?php echo base_url();?>dassets/css/app.css" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url();?>dassets/css/app.rtl.css" rel="stylesheet">


 


</head>

<body class=" layout-fluid">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" data-fixed class="mdk-header js-mdk-header mb-0">
            <div class="mdk-header__content">

                <!-- Navbar -->
                <nav id="default-navbar" class="navbar navbar-expand navbar-dark bg-primary m-0">
                    <div class="container-fluid">
                        <!-- Toggle sidebar -->
                        <button class="navbar-toggler d-block" data-toggle="sidebar" type="button">
                            <span class="material-icons">menu</span>
                        </button>

                        <!-- Brand -->
                        <a href="instructor-dashboard.html" class="navbar-brand">
                            <img src="<?php echo base_url();?>dassets/images/logo/white.svg" class="mr-2" alt="LearnPlus" />
                            <span class="d-none d-xs-md-block">LearnPlus</span>
                        </a>

                        <ul class="nav navbar-nav navbar-nav-stats d-none d-md-flex flex-nowrap">
                            <li class="nav-item">
                                <div class="nav-stats">$591 <small>GROSS</small></div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-stats">$31 <small>TAXES</small></div>
                            </li>
                            <li class="nav-item mr-3">
                                <div class="nav-stats">$560 <small>NET</small></div>
                            </li>
                        </ul>

                        <!-- Search -->
                        <form class="search-form d-none d-md-flex">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn" type="button"><i class="material-icons font-size-24pt">search</i></button>
                        </form>
                        <!-- // END Search -->

                        <div class="flex"></div>

                        <!-- Menu -->
                        <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('index');?>">Home</a>
                            </li>
                        </ul>

                        <!-- Menu -->
                        <!-- Menu -->
                        <ul class="nav navbar-nav flex-nowrap">




                            <!-- Notifications dropdown -->
                            <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                                <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="badge badge-notifications badge-danger">2</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div data-perfect-scrollbar class="position-relative">
                                        <div class="dropdown-header"><strong>Messages</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="instructor-messages.html" class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-primary"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="<?php echo base_url();?>dassets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Michelle</strong>
                                                        <span class="text-black-70">Clients loved the new design.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="instructor-messages.html" class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-primary"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="<?php echo base_url();?>dassets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Michelle</strong>
                                                        <span class="text-black-70">🔥 Superb job..</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>

                                        <div class="dropdown-header"><strong>System notifications</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="instructor-messages.html" class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">3 minutes ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="instructor-messages.html" class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 hours ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-success">group_add</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Adrian. D</strong>
                                                        <span class="text-black-70">Wants to join your private group.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="instructor-messages.html" class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">1 day ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-warning">storage</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your deploy was successful.</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- // END Notifications dropdown -->
                            <!-- User dropdown -->
                            <li class="nav-item dropdown ml-1 ml-md-3">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="<?php echo base_url();?>dassets/images/people/50/guy-6.jpg" alt="Avatar" class="rounded-circle" width="40"></a>
                                <div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="instructor-account-edit.html">
										<i class="material-icons">person</i><?php echo $this->session->userdata("name");?>
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('students/account-edit/').$this->session->userdata("id");?>">
                                        <i class="material-icons">edit</i> Edit Account
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('students/profile-view/').$this->session->userdata("id");?>">
                                        <i class="material-icons">person</i> Public Profile
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('students/logout') ;?>">
                                        <i class="material-icons">lock</i> Logout
                                    </a>
                                </div>
                            </li>
                            <!-- // END User dropdown -->
                        </ul>
                    </div>
                </nav>
                <!-- // END Navbar -->

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
                <div class="mdk-drawer-layout__content page ">
                <?php
                    

                    if(isset($content)){

                        echo $content;

                    } ;

                 ?>
                  

                </div>




                <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                    <div class="mdk-drawer__content ">
                        <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                            <div class="sidebar-p-y">
                                <div class="sidebar-heading">APPLICATIONS</div>
                                <ul class="sidebar-menu sm-active-button-bg">
                                   
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button" href="instructor-dashboard.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Student
                                        </a>
                                    </li>
                                </ul>
                                <!-- Account menu -->
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#account_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                            Account
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="account_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="guest-login.html">
                                                    <span class="sidebar-menu-text">Login</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="guest-signup.html">
                                                    <span class="sidebar-menu-text">Sign Up</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="guest-forgot-password.html">
                                                    <span class="sidebar-menu-text">Forgot Password</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-account-edit.html">
                                                    <span class="sidebar-menu-text">Edit Account</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-edit-basic.html">
                                                    <span class="sidebar-menu-text">Basic Information</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-edit-profile.html">
                                                    <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-billing-subscription.html">
                                                    <span class="sidebar-menu-text">Subscription</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-billing-upgrade.html">
                                                    <span class="sidebar-menu-text">Upgrade Account</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-billing-payment-information.html">
                                                    <span class="sidebar-menu-text">Payment Information</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-billing.html">
                                                    <span class="sidebar-menu-text">Payment History</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-invoice.html">
                                                    <span class="sidebar-menu-text">Student Invoice</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-invoice.html">
                                                    <span class="sidebar-menu-text">Instructor Invoice</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-edit-invoice.html">
                                                    <span class="sidebar-menu-text">Edit Invoice</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#messages_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Messages
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="messages_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="<?php echo base_url('students/messages');?>">
                                                    <span class="sidebar-menu-text">Conversation</span>
                                                    <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-messages-2.html">
                                                    <span class="sidebar-menu-text">Conversation - 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="sidebar-heading">Instructor</div>
                                <ul class="sidebar-menu sm-active-button-bg">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="<?php echo base_url('students/mycourse');?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> my course
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="<?php echo base_url('students/course');?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i>course
                                        </a>
                                    </li>
									<li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="<?php echo base_url('students/take_quiz');?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i>take quiz
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"  href="<?php echo base_url('students/test_quiz');?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">help</i>test Quiz 
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-earnings.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">trending_up</i> Earnings
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-statement.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">receipt</i> Statement
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#forum_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                            Community
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="forum_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-forum.html">
                                                    <span class="sidebar-menu-text">Forum</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-forum-thread.html">
                                                    <span class="sidebar-menu-text">Discussion</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-forum-ask.html">
                                                    <span class="sidebar-menu-text">Ask Question</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-profile.html">
                                                    <span class="sidebar-menu-text">Student Profile - Courses</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-profile-posts.html">
                                                    <span class="sidebar-menu-text">Student Profile - Posts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-profile.html">
                                                    <span class="sidebar-menu-text">Instructor Profile</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-help-center.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Help Center
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="<?php echo base_url('admin/logout') ;?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                        </a>
                                    </li>
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>

           
        </div>
    </div>



    <!-- jQuery -->
    <script src="<?php echo base_url();?>dassets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>dassets/vendor/popper.min.js"></script>
    <script src="<?php echo base_url();?>dassets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="<?php echo base_url();?>dassets/vendor/perfect-scrollbar.min.js"></script>

    <!-- MDK -->
    <script src="<?php echo base_url();?>dassets/vendor/dom-factory.js"></script>
    <script src="<?php echo base_url();?>dassets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="<?php echo base_url();?>dassets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="<?php echo base_url();?>dassets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="<?php echo base_url();?>dassets/js/app-settings.js"></script>






    <!-- Global Settings -->
    <script src="<?php echo base_url();?>dassets/js/settings.js"></script>

    <!-- Moment.js -->
    <script src="<?php echo base_url();?>dassets/vendor/moment.min.js"></script>
    <script src="<?php echo base_url();?>dassets/vendor/moment-range.min.js"></script>

    <!-- Chart.js -->
    <script src="<?php echo base_url();?>dassets/vendor/Chart.min.js"></script>

    <!-- UI Charts Page JS -->
    <script src="<?php echo base_url();?>dassets/js/chartjs-rounded-bar.js"></script>
    <script src="<?php echo base_url();?>dassets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="<?php echo base_url();?>dassets/js/page.instructor-dashboard.js"></script>

    <!-- List.js -->
    <script src="<?php echo base_url();?>dassets/vendor/list.min.js"></script>
    <script src="<?php echo base_url();?>dassets/js/list.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 19:24:30 GMT -->
</html>
