<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from medical-admin-template.multipurposethemes.com/main/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 05:26:47 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <title>Medicine</title>


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
            <div class="text-start" style="padding-left: 25px; padding-bottom: 20px;">
                <h3>Medicine Panel</h>
            </div>
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <a href="{{ url('medicine/') }}">
                                    <i class="icon-Settings-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Stock</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Purchase</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ url('medicine/purchase') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Purchase</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('medicine/purchase_history') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Purchase
                                            History</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>Sell</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ url('medicine/sell') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Sell</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('medicine/sell_history') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span class="path2"></span></i>Sell
                                            History</a>
                                    </li>
                                </ul>
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
