<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from medical-admin-template.multipurposethemes.com/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:22:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Infrastructure</title>

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
                <h3>Infrastructure Admin</h>
            </div>
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">

                            <li>
                                <a href="{{ url('infrastructure/') }}">
                                    <i class="icon-Settings-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Add Machine</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('infrastructure/machine_stock') }}">
                                    <i class="icon-Settings-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Machine Stock</span>
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
