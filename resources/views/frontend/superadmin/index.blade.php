@extends('frontend.superadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper rounded-0">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/branch.png') }}" alt=""
                                                    class="w-80" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Total Clinic </h4>
                                                <h3 class="mb-0">100</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/active.png') }}" alt=""
                                                    class="w-80" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Active Clinic </h4>
                                                <h3 class="mb-0">75</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/expired.png') }}" alt=""
                                                    class="w-80" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Expired Clinic </h4>
                                                <h3 class="mb-0">20</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/pause.png') }}" alt=""
                                                    class="w-80" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Terminated Clinic </h4>
                                                <h3 class="mb-0">5</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxxl-8 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="">
                                    <h3 class="box-title fw-500 position-revenue">Payment</h3>
                                    <div class="dropdown pull-right position-year">
                                        <h6 class="dropdown-toggle mb-0" data-bs-toggle="dropdown">
                                            Yearly
                                        </h6>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item active" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last week</a>
                                            <a class="dropdown-item" href="#">Last month</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    </div>
@endsection
