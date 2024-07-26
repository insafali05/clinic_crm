@extends('frontend.doctor.layouts.main')
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
                                    <a href="{{ url('doctor/patient_details') }}">
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
                                    <a href="{{ url('doctor/patient_details') }}">
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
                                    <a href="{{ url('doctor/patient_details') }}">
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

                    <div class="col-md-6 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Upcoming Appointments</h4>
                            </div>
                            <div class="box-body">
                                <div id="paginator1"></div>
                            </div>
                            <div class="box-body">
                                <div class="inner-user-div4">
                                    <div>
                                        <a href="{{ url('doctor/patient_details') }}">
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="me-15">
                                                    <img src="{{ url('frontend/images/avatar/4.jpg') }}"
                                                        class="avatar avatar-lg rounded10 bg-primary-light"
                                                        alt="" />
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14">Shawn Hampton</p>
                                                    <span class="text-dark fs-16">Emergency appointment</span>
                                                </div>

                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                                <div>
                                                    <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i>
                                                        10:00</p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#"
                                                            class="base-font mx-10"><i
                                                                class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-import"></i> Import</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-export"></i> Export</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-printer"></i> Print</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ url('doctor/patient_details') }}">
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="me-15">
                                                    <img src="{{ url('frontend/images/avatar/5.jpg') }}"
                                                        class="avatar avatar-lg rounded10 bg-primary-light"
                                                        alt="" />
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14">Polly Paul</p>
                                                    <span class="text-dark fs-16">USG + Consultation</span>
                                                </div>

                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                                <div>
                                                    <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i>
                                                        10:30 </p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#"
                                                            class="base-font mx-10"><i
                                                                class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-import"></i> Import</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-export"></i> Export</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-printer"></i> Print</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/avatar/6.jpg') }}"
                                                    class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500">
                                                <p class="hover-primary text-fade mb-1 fs-14">Johen Doe</p>
                                                <span class="text-dark fs-16">Laboratory screening</span>
                                            </div>

                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i>
                                                    11:00</p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#"
                                                        class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                            Import</a>
                                                        <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                            Export</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-printer"></i> Print</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/avatar/7.jpg') }}"
                                                    class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500">
                                                <p class="hover-primary text-fade mb-1 fs-14">Harmani Doe</p>
                                                <span class="text-dark fs-16">Keeping pregnant</span>
                                            </div>

                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i>
                                                    11:30 </p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#"
                                                        class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                            Import</a>
                                                        <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                            Export</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-printer"></i> Print</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/avatar/8.jpg') }}"
                                                    class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500">
                                                <p class="hover-primary text-fade mb-1 fs-14">Mark Wood</p>
                                                <span class="text-dark fs-16">Primary doctor consultation</span>
                                            </div>

                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i>
                                                    12:00 </p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#"
                                                        class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                            Import</a>
                                                        <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                            Export</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-printer"></i> Print</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/avatar/9.jpg') }}"
                                                    class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 fw-500">
                                                <p class="hover-primary text-fade mb-1 fs-14">Shawn Marsh</p>
                                                <span class="text-dark fs-16">Emergency appointment</span>
                                            </div>

                                        </div>
                                        <div
                                            class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                            <div>
                                                <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i>
                                                    13:00 </p>
                                            </div>
                                            <div>
                                                <div class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#"
                                                        class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                            Import</a>
                                                        <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                            Export</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-printer"></i> Print</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="ti-settings"></i> Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
