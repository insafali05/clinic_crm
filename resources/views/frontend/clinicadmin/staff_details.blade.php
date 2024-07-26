@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Staff Details</h4>
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
                                            <p>Email :<span class="text-gray ps-10">prbha@schoneclinic.com</span>
                                            </p>
                                            <p>Phone :<span class="text-gray ps-10">+91 9123456789</span></p>
                                            <p>Address :<span class="text-gray ps-10">Atwal Nagar, Kota, Rajasthan,
                                                    324001</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="d-md-flex align-items-center justify-content-between mb-20">
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="btn btn-warning me-5 mb-md-0 mb-5">Temporary
                                    Pause</a>
                                <a href="javascript:void(0);" class="btn btn-outline btn-danger me-5">Terminate</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body text-end min-h-150"
                                style="background-image:url(../../images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
                            </div>
                            <div class="box-body wed-up position-relative">
                                <div class="d-md-flex align-items-center">
                                    <div class=" me-20 text-center text-md-start">
                                        <img src="{{ url('frontend/images/user3-128x128.jpg') }}"
                                            class="bg-success-light rounded10" alt="" />
                                    </div>
                                    <div class="mt-40">
                                        <h4 class="fw-600 mb-5">Prabha</h4>
                                        <h5 class="fw-400 mb-5">Receptionist</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body pt-0">
                                <h4>Information</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                    velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
