<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from medical-admin-template.multipurposethemes.com/main/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:22:49 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Staff</title>

    <link rel="stylesheet" href="{{ url('frontend/main/css/vendors_css.css') }}" />

    <!-- Style-->
    <link rel="stylesheet" href="{{ url('frontend/main/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/main/css/skin_color.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/main/css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <div class="text-start" style="padding-left: 25px; padding-bottom: 20px;">
                <h3>Receptionist Staff</h>
            </div>
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="{{ url('staff/') }}">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Patient Information</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ url('staff/add_leads') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Add
                                            Information</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('staff/leads_list') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Manage
                                            Information</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('staff/appointments') }}">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Appointments</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Settings-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </aside>
