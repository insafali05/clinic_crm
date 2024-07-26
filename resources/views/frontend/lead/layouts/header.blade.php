<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from medical-admin-template.multipurposethemes.com/main/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:26:47 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <title>Lead Management </title>

    <link rel="stylesheet" href="{{ url('frontend/main/css/vendors_css.css') }}" />

    <!-- Style-->
    <link rel="stylesheet" href="{{ url('frontend/main/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/main/css/skin_color.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/main/css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <style>
        .sidebar-menu .badge {
            vertical-align: middle;
            margin-left: 10px;
            /* Adjust this value as needed for spacing */
            font-size: 0.9em;
            /* Adjust the size of the badge text */
        }

        .sidebar-menu .treeview-menu a {
            display: flex;
            align-items: center;
        }

        #file-upload+label {
            cursor: pointer;
        }

        .sidebar-menu .badge {
            vertical-align: middle;
            margin-left: 10px;
            /* Adjust this value as needed for spacing */
            font-size: 0.9em;
            /* Adjust the size of the badge text */
        }

        .sidebar-menu .treeview-menu a {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">



        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <div class="text-start" style="padding-left: 25px; padding-bottom: 20px;">
                <h3>Lead Panel</h>
            </div>
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="{{ url('lead/') }}">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="treeview active">
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Leads</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ url('lead/open_leads') }}">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span>Open</span>
                                                <span
                                                    class="badge bg-primary d-flex align-items-center justify-content-center">10</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('lead/followup_leads') }}">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span>Followup</span>
                                                <span
                                                    class="badge bg-warning d-flex align-items-center justify-content-center">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('lead/converted_leads') }}">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span>Converted</span>
                                                <span
                                                    class="badge bg-success d-flex align-items-center justify-content-center">8</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('lead/closed_leads') }}">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <span>Closed </span>
                                                <span
                                                    class="badge bg-danger d-flex align-items-center justify-content-center">8</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('lead/add_leads') }}">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Add Lead
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
