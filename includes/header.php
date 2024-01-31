<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesdesign.in/drixo/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 09:53:30 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>SOP Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="ThemeDesign" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/logo.png" style="width:90px;height:50px"><!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/summernote/summernote-bs4.css" rel="stylesheet">
</head>
<?php
    include_once "db.php";
?>
<body class="fixed-left"><!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div><!-- Begin page -->
    <div id="wrapper"><!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu"><button type="button"
                class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i
                    class="ion-close"></i></button>
            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center"><a href="index.html" class="logo"><img src="assets/logo.png"
                            height="20" style="width:90px;height:50px" alt="logo"></a></div>
            </div>
            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li><a href="index.php" class="waves-effect"><i class="dripicons-meter"></i> <span>Home
                                    </span></a></li>
                        <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                    class="dripicons-briefcase"></i> <span>SOP </span><span
                                    class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="hiring.php">Hiring</a><li>
                                <li><a href="employee.php">Employee On-Boarding</a></li>
                                <li><a href="vacancy.php">Vacancy</a></li>
                                <li><a href="Bootstrap_Php/index.php">Employee List</a></li>
                                <li><a href="hrpolicy.php">HR Policies</a></li>
                               
                            </ul>
                        </li>
                        
                        
                    
                        
                       
                    
                        
                        
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div><!-- end sidebarinner -->
        </div><!-- Left Sidebar End --><!-- Start right Content here -->
        <div class="content-page"><!-- Start content -->
            <div class="content"><!-- Top Bar Start -->
                <div class="topbar">
                    <div class="topbar-left	d-none d-lg-block">
                        <div class="text-center"><a href="index.html" class="logo"><img src="assets/logo.png"
                                    height="20" style="width:90px;height:50px" alt="logo"></a></div>
                    </div>
                    <nav class="navbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0"><input type="text" class="form-control"
                                            placeholder="Search.."> <button type="submit"><i
                                                class="fa fa-search"></i></button></div>
                                </form>
                            </li>
                            
                            
                            <li class="list-inline-item dropdown notification-list"><a
                                    class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false"><img src="assets/images/users/user-7.JPEG" alt="user"
                                        class="rounded-circle"></a>
                                <!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" href="#"><i
                                            class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a> <a
                                        class="dropdown-item" href="#"><span
                                            class="badge badge-success mt-1 float-right">5</span><i
                                            class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a> <a
                                        class="dropdown-item" href="#"><i
                                            class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a> <a
                                        class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i>
                                        Logout</a>
                                    </div> -->
                            </li>
                        </ul>
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item"><button type="button"
                                    class="button-menu-mobile open-left waves-effect"><i
                                        class="ion-navicon"></i></button></li>
                        </ul>
                        <div class="clearfix"></div>
                    </nav>
                </div><!-- Top Bar End -->