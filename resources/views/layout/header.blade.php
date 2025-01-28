<!DOCTYPE html>
<?php
date_default_timezone_set('Asia/Colombo');
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CMS | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/bower_components/select2/dist/css/select2.min.css">

    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="/dist/css/skins/skin-blue.min.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <!-- My Import Styles -->
    <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link href="/css/toastr.css" rel="stylesheet">
    <link href="/css/cen.css" rel="stylesheet">
    <link href="/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/sweetalert2.css" />




    <link rel="stylesheet" href="/css/dataTables.bootstrap.min.css">
    <link href="/js/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS |                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition fixed  skin-green-light sidebar-mini  {{ Session::get('sidebarState') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">

            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>CMS</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Counter</b> System</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" id='sidebarToggle' class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"> {{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Divisional Secreatriat Manmunaipattu
                                    <small>Counter Management System</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>








    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>




            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu</li>
                <!-- Optionally, you can add icons to the links -->
                @if ((Auth::user()->role) == "Admin")
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                @endif

                @if ((Auth::user()->role) == "Admin" | (Auth::user()->role) == "Receptionist")
                <li class="{{ Request::path() == 'issue_token' ? 'active' : '' }}"><a href="/issue_token"><i class="fa fa-check"></i> <span>Issue Token</span></a></li>
                @endif


                <li class="{{ Request::path() == 'queue' ? 'active' : '' }}"><a href="/queue"><i class="fa fa-tv"></i> <span>Queue</span></a></li>


                @if ((Auth::user()->role) == "Admin" | (Auth::user()->role) == "Receptionist")
                <li class="treeview treeview {{ Request::is('public/*')? 'active' : '' }}">
                    <a href="#"><i class="fa fa-user"></i> <span>Public</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ Request::path() == 'public/add_public' ? 'active' : '' }}"><a href="/public/add_public"><i class="fa fa-circle-o"></i>Add Public Details</a></li>
                        <li class="{{ Request::path() == 'public/update_public' ? 'active' : '' }}"><a href="/public/update_public"><i class="fa fa-circle-o"></i>Update Public Details</a></li>
                        <li class="{{ Request::path() == 'public/view_public_details' ? 'active' : '' }}"><a href="/public/view_public_details"><i class="fa fa-circle-o"></i>View Public Details</a></li>

                    </ul>
                </li>
                @endif

                @if ((Auth::user()->role) == "Admin")
                <li class="{{ Request::path() == 'chart' ? 'active' : '' }}"><a href="/chart"><i class="fa  fa-pie-chart"></i> <span>Charts</span></a></li>

                <li class="{{ Request::path() == 'report' ? 'active' : '' }}"><a href="/report"><i class="fa fa-bar-chart"></i> <span>Report</span></a></li>
                @endif


                @if ((Auth::user()->role) == "Admin" | (Auth::user()->role) == "Receptionist")
                <li class="treeview {{ Request::is('branch_service/*')? 'active' : '' }}">
                    <a href="#"><i class="fa fa-bank"></i> <span>Branch/Services</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ Request::path() == 'branch_service/add_branch_service' ? 'active' : '' }}"><a href="/branch_service/add_branch_service"><i class="fa fa-circle-o"></i>Add Branch/Service</a></li>
                        <li class="{{ Request::path() == 'branch_service/update_branch_service' ? 'active' : '' }}"><a href="/branch_service/update_branch_service"><i class="fa fa-circle-o"></i>Update Branch/Service</a></li>
                        <li class="{{ Request::path() == 'branch_service/view_branch_service' ? 'active' : '' }}"><a href="/branch_service/view_branch_service"><i class="fa fa-circle-o"></i>View Branch/Service</a></li>
                    </ul>
                </li>
                @endif

                @if ((Auth::user()->role) == "Admin")

                <li class="treeview {{ Request::is('user/*')? 'active' : '' }}">
                    <a href="#"><i class="fa fa-gear"></i> <span>Users</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ Request::path() == 'user/add_user' ? 'active' : '' }}"><a href="/user/add_user"><i class="fa fa-circle-o"></i>Add User</a></li>
                        <li class="{{ Request::path() == 'user/user_management' ? 'active' : '' }}"><a href="/user/user_management"><i class="fa fa-circle-o"></i>User Management</a></li>

                    </ul>
                </li>
                @endif


                <li class="treeview {{ Request::is('settings/*')? 'active' : '' }}">
                    <a href="#"><i class="fa fa-gear"></i> <span>Settings</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        @if ((Auth::user()->role) == "Admin")
                        <li class="{{ Request::path() == 'settings/general' ? 'active' : '' }}"><a href="/settings/general"><i class="fa fa-circle-o"></i>General Settings</a></li>
                        @endif

                        <li class="{{ Request::path() == 'settings/profile_settings' ? 'active' : '' }}"><a href="/settings/profile_settings"><i class="fa fa-circle-o"></i>Profile Settings</a></li>


                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->




        </section>
        <!-- /.sidebar -->
    </aside>