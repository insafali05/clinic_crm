@extends('frontend.superadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Clinic Details</h4>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-body box-profile">
                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <p>Email :<span class="text-gray ps-10">{{ $clinicAdmin->email }}</span> </p>
                                            <p>Phone :<span
                                                    class="text-gray ps-10">{{ $clinicAdmin->contact_number }}</span></p>
                                            <p>Address :<span class="text-gray ps-10">{{ $clinicAdmin->address }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="box">
                            <div class="box-header border-0 pb-0">
                                <h4 class="box-title">Licence History</h4>
                            </div>
                            <div class="box-body">
                                <div class="widget-timeline-icon">
                                    <ul>
                                        <li>
                                            <div class="icon bg-primary fa fa-cart-o"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <h4 class="mb-2 mt-1">Purchase</h4>
                                                <p class="fs-15 mb-0 ">{{ $clinicAdmin->start_date_time }}</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="icon bg-primary fa fa-buy-o"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <h4 class="mb-2 mt-1">Expire</h4>
                                                <p class="fs-15 mb-0 ">{{ $clinicAdmin->expiry_date_time }}</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="d-md-flex align-items-center justify-content-between mb-20">
                            <a href="renew_license.html" class="btn btn-primary me-5 mb-md-0 mb-5"><i
                                    class="fa fa-edit"></i>Renew Licence</a>
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="btn btn-warning me-5 mb-md-0 mb-5">Temporary Pause</a>
                                <a href="javascript:void(0);" class="btn btn-outline btn-danger me-5">Terminate</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body text-end min-h-150"
                                style="background-image:url({{ url('frontend/images/gallery/landscape14.jpg') }}); background-repeat: no-repeat; background-position: center;background-size: cover;">
                            </div>
                            <div class="box-body wed-up position-relative">
                                <div class="d-md-flex align-items-center">
                                    <div class=" me-20 text-center text-md-start">
                                        <img src="../../images/clinic.jpg" class="bg-success-light rounded10" alt=""
                                            style="width:200px;" />
                                    </div>
                                    <div class="mt-40">
                                        <h4 class="fw-600 mb-5">{{ $clinicAdmin->clinic_name }}</h4>
                                        <h5 class="fw-500 mb-5">#b- 01</h5>
                                        <p><i class="fa fa-clock-o"></i> Expire on {{ $clinicAdmin->expiry_date_time }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body pt-0">
                                <h4>Clinic Information</h4>
                                <p>{{ $clinicAdmin->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <div class="control-sidebar-bg"></div>
    </div>
@endsection
