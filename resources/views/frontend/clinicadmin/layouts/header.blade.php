<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from medical-admin-template.multipurposethemes.com/main/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:22:49 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clinic Admin</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ url('frontend/main/css/vendors_css.css') }}" />

    <!-- Style-->
    <link rel="stylesheet" href="{{ url('frontend/main/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/main/css/skin_color.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/main/css/custom.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">

        <aside class="main-sidebar">
            <!-- sidebar-->
            <div class="text-start" style="padding-left: 25px; padding-bottom: 20px;">
                <h3>{{ session('clinic_name') }}</h3>
            </div>
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="{{ url('clinicadmin/index') }}">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Dashboard</span>

                                </a>

                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Doctor</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('clinicadmin/add_doctor') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Add Doctor</a>
                                    </li>
                                    <li><a href="{{ url('clinicadmin/doctors_list') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Manage
                                            Doctor</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Staff</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('clinicadmin/add_staff') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Add
                                            Staff</a>
                                    </li>
                                    <li><a href="{{ url('clinicadmin/staffs_list') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Manage
                                            Staff</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Master</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ url('clinicadmin/add_branches') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Add
                                            Branches</a></li>
                                    <li><a href="{{ url('clinicadmin/doctor_master') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Doctor
                                            Master</a></li>
                                    <li><a href="{{ url('clinicadmin/staff_master') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Staff
                                            Master</a></li>
                                    <li><a href="{{ url('clinicadmin/lab_master') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Lab
                                            Master</a>
                                    </li>
                                    <li><a href="{{ url('clinicadmin/treatment_master') }}"><i
                                                class="icon-Commit"><span class="path1"></span><span
                                                    class="path2"></span></i>Treatment
                                            Master</a></li>
                                    <li><a href="{{ url('clinicadmin/medicine_master') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Medicine
                                            Master</a></li>
                                    <li><a href="{{ url('clinicadmin/infrastructure_master') }}"><i
                                                class="icon-Commit"><span class="path1"></span><span
                                                    class="path2"></span></i>Infrastructure Master</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('clinicadmin.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-Settings-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('clinicadmin.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </aside>
