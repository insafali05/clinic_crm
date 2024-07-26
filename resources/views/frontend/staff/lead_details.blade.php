@extends('frontend.staff.layouts.main')
@section('main-container')
    <div class="content-wrapper rounded-0">
        <div class="container-full">
            <!-- Main content -->

            <section class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- <div class="box-body px-0">
                            <div>
                             <h5 class="fw-500 text-primary-light m-0 text-uppercase">Lead History</h5>
                            </div>
                           </div> -->

                        <div class="box box-body py-35">
                            <div class="inner-user-div3">
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../../images/4.jpg" class="avatar avatar-lg rounded10 bg-primary-light"
                                            alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1 fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Shakib
                                            Mirza</a>

                                        <span class="text-fade">+91 9509312786</span>
                                    </div>

                                    <div class="dropdown">
                                        <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown">
                                            <i class="ti-more-alt"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">

                                            <a class="dropdown-item" href="#">View Profile</a>

                                            <a class="dropdown-item" href="add_leads.html">Re-Assign Lead</a>

                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item flexbox" href="#">
                                                <span>Close Lead</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-20">
                                <div class="timeline timeline-single-column timeline-single-full-column">
                                    <div class="timeline-item timeline-item-arrow-sm">
                                        <div class="timeline-point timeline-point-success bg-primary">
                                            <!-- <i class="fa fa-refresh text-white" aria-hidden="true"></i> -->

                                            <i class="fa-solid fa-pen-nib text-white" aria-hidden="true"></i>
                                        </div>

                                        <div>
                                            <div class="timeline-heading d-flex justify-content-between">
                                                <h5 class="timeline-title fw-500 mb-0">Lead Assign </h5>

                                                <p class="text-fade mb-0 fw-500">July 20, 2022 </p>
                                            </div>

                                            <div class="timeline-body">
                                                <p class="text-fade mb-0 fw-500">Receptionist asign</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-item timeline-item-arrow-sm">
                                        <div class="timeline-point timeline-point-warning bg-warning">
                                            <i class="fa fa-check text-white" aria-hidden="true"></i>
                                        </div>

                                        <div>
                                            <div class="timeline-heading d-flex justify-content-between">
                                                <h5 class="timeline-title fw-500 mb-0">Pending</h5>

                                                <p class="text-fade mb-0 fw-500">May 01, 2022</p>
                                            </div>

                                            <div class="timeline-body">
                                                <p class="text-fade mb-0 fw-500">Doctor checkup</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item timeline-item-arrow-sm">
                                        <div class="timeline-point timeline-point-warning bg-warning">
                                            <i class="fa fa-check text-white" aria-hidden="true"></i>
                                        </div>

                                        <div>
                                            <div class="timeline-heading d-flex justify-content-between">
                                                <h5 class="timeline-title fw-500 mb-0">Pending</h5>

                                                <p class="text-fade mb-0 fw-500">May 01, 2022</p>
                                            </div>

                                            <div class="timeline-body">
                                                <p class="text-fade mb-0 fw-500">Lab test</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-item timeline-item-arrow-sm">
                                        <div class="timeline-point timeline-point-warning bg-warning">
                                            <i class="fa fa-check text-white" aria-hidden="true"></i>
                                        </div>

                                        <div>
                                            <div class="timeline-heading d-flex justify-content-between">
                                                <h5 class="timeline-title fw-500 mb-0">Pending</h5>

                                                <p class="text-fade mb-0 fw-500">May 01, 2022</p>
                                            </div>

                                            <div class="timeline-body">
                                                <p class="text-fade mb-0 fw-500">Treatment</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-item timeline-item-arrow-sm">
                                        <div class="timeline-point timeline-point-success bg-success">
                                            <i class="fa fa-check text-white" aria-hidden="true"></i>
                                        </div>

                                        <div>
                                            <div class="timeline-heading d-flex justify-content-between">
                                                <h5 class="timeline-title fw-500 mb-0">Closed</h5>

                                                <p class="text-fade mb-0 fw-500">May 15, 2022</p>
                                            </div>

                                            <div class="timeline-body">
                                                <p class="text-fade mb-0 fw-500">11:15am</p>
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
    </div>
@endsection
