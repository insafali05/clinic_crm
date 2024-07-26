@extends('frontend.lab.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="box b-0 bg-transparent no-shadow">
                            <div class="box-body pt-5 pb-0 px-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Your Patients today</h4>
                                    <a href="#" class="">All patients <i class="ms-10 fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body p-15">
                                <div class="mb-10 d-flex justify-content-between align-items-center">
                                    <div class="fw-600 min-w-120">
                                        10:30am
                                    </div>
                                    <a href="{{ url('lab/patient_tests') }}">
                                        <div
                                            class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <img src="{{ url('frontend/images/avatar/1.jpg') }}"
                                                    class="me-10 avatar rounded-circle" alt="">
                                                <div>
                                                    <h6 class="mb-0">Sarah Hostemn</h6>
                                                    <p class="mb-0 fs-12 text-mute">Diagnosis: Bronchi</p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#"><i
                                                        class="ti-more-alt rotate-90"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Details</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                        Reports</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-10 d-flex justify-content-between align-items-center">
                                    <div class="fw-600 min-w-120">
                                        11:00am
                                    </div>
                                    <a href="{{ url('lab/patient_tests') }}">
                                        <div
                                            class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <img src="{{ url('frontend/images/avatar/4.jpg') }}"
                                                    class="me-10 avatar rounded-circle" alt="">
                                                <div>
                                                    <h6 class="mb-0">Dakota Smith</h6>
                                                    <p class="mb-0 fs-12 text-mute">Diagnosis: Stroke</p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#"><i
                                                        class="ti-more-alt rotate-90"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Details</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                        Reports</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-600 min-w-120">
                                        11:30am
                                    </div>
                                    <a href="{{ url('lab/patient_tests') }}">
                                        <div
                                            class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <img src="{{ url('frontend/images/avatar/3.jpg') }}"
                                                    class="me-10 avatar rounded-circle" alt="">
                                                <div>
                                                    <h6 class="mb-0">John Lane</h6>
                                                    <p class="mb-0 fs-12 text-mute">Diagnosis: Liver</p>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#"><i
                                                        class="ti-more-alt rotate-90"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                        Details</a>
                                                    <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                        Reports</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col-md-6 col-12">
                        <div class="box">
                            <div class="box-body px-0 text-center">
                                <div style="min-height: 156px;">
                                    <div id="chart124"></div>
                                </div>
                                <div class="mt-15 d-inline-block">
                                    <div class="text-start mb-10">
                                        <span class="badge badge-xl badge-dot badge-primary me-15"></span> Woman
                                        44%
                                    </div>
                                    <div class="text-start">
                                        <span class="badge badge-xl badge-dot badge-primary-light me-15"></span>
                                        Man 55%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
