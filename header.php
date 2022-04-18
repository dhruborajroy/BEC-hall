<?php 
   session_start();
   session_regenerate_id();
   require('./inc/constant.inc.php');
   require('./inc/connection.inc.php');
   require('./inc/function.inc.php');
   isAdmin();
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BEC HALL | Developed by Dhrubo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="css/toastr.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
                    data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <!-- <span class="flaticon-search" aria-hidden="true"></span> -->
                                </button>
                            </span>
                            <!-- <input type="text" class="form-control" placeholder="Find Something . . ."> -->
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">Dhrubo</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Welcome Dhrubo</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="profile.php"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Maria Zaman</span>
                                                <span class="item-time">18:30</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item.
                                            Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-language">
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.php"><img src="img/logo1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link <?php // echo  $index_active?>"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Users</span></a>
                            <ul class="nav sub-group-menu <?php // echo  $application_group_active?>">
                                <li class="nav-item">
                                    <a href="users.php" class="nav-link <?php // echo  $application_sub_group_active?>"><i class="fas fa-angle-right"></i>All
                                    Users</a>
                                </li>
                                <li class="nav-item">
                                    <a href="manageStudentProfile.php" class="nav-link <?php // echo  $manage_application_sub_group_active?>"><i
                                            class="fas fa-angle-right"></i>Add new Application</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="managePayment.php" class="nav-link <?php // echo  $index_active?>"><i class="flaticon-dashboard"></i><span>Manage Payment</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="mealCheck.php" class="nav-link <?php // echo  $index_active?>"><i class="flaticon-dashboard"></i><span>Meal Check</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="mealStatus.php" class="nav-link <?php // echo  $index_active?>"><i class="flaticon-dashboard"></i><span>Meal Status</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="mealOnOffRequests.php" class="nav-link <?php // echo  $index_active?>"><i class="flaticon-dashboard"></i><span>Meal On Off Requests</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="contigency.php" class="nav-link <?php // echo  $index_active?>"><i class="flaticon-dashboard"></i><span>Contegency</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="electricityBill.php" class="nav-link <?php // echo  $index_active?>"><i class="flaticon-dashboard"></i><span>Electricity Bill</span></a>
                        </li> -->
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Fees</span></a>
                            <ul class="nav sub-group-menu <?php // echo  $application_group_active?>">
                                <li class="nav-item">
                                    <a href="fees.php" class="nav-link <?php // echo  $application_sub_group_active?>"><i class="fas fa-angle-right"></i>All
                                    Fees</a>
                                </li>
                                <li class="nav-item">
                                    <a href="manageFees.php" class="nav-link <?php // echo  $manage_application_sub_group_active?>"><i
                                            class="fas fa-angle-right"></i>Add new Fees</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Departments</span></a>
                            <ul class="nav sub-group-menu <?php // echo  $application_group_active?>">
                                <li class="nav-item">
                                    <a href="depts.php" class="nav-link <?php // echo  $application_sub_group_active?>"><i class="fas fa-angle-right"></i>All
                                    Departments</a>
                                </li>
                                <li class="nav-item">
                                    <a href="manageDepts.php" class="nav-link <?php // echo  $manage_application_sub_group_active?>"><i
                                            class="fas fa-angle-right"></i>Add new Department</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->