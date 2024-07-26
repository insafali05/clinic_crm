@extends('frontend.doctor.layouts.main')
@section('main-container')
    <div class="content-wrapper rounded-0">
        <div class="container-full ">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xxxl-3 col-xl-12 ">
                        <div class="box-body px-0">
                            <div>
                                <h5 class="fw-500 text-primary-light m-0">PATIENT DETAILS</h5>
                            </div>
                        </div>
                        <div class="box bg-lightgray">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-12">
                                            <a href="{{ url('doctor/lab_test') }}">
                                                <div class="box pull-up">
                                                    <div class="box-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-15">
                                                                <img src="{{ url('frontend/images/lab.png') }}"
                                                                    alt="" class="w-80">
                                                            </div>
                                                            <div>
                                                                <h3 class="mb-0 fw-600 border-success  text-success">
                                                                    Lab Test</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <a href="{{ url('doctor/treatment') }}">
                                                <div class="box pull-up">
                                                    <div class="box-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-15">

                                                                <img src="{{ url('frontend/images/treatment.png') }}"
                                                                    alt="" class="w-80">
                                                            </div>
                                                            <div>
                                                                <h3 class="mb-0 fw-600 border-success text-success">
                                                                    Treatment</h3>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <a href="{{ url('doctor/medicine') }}">
                                                <div class="box pull-up">
                                                    <div class="box-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-15">
                                                                <img src="{{ url('frontend/images/medicine.png') }}"
                                                                    alt="" class="w-80">
                                                            </div>
                                                            <div>
                                                                <h3 class="mb-0 fw-600 border-success text-success">
                                                                    Medicine</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxxl-12 col-xl-6 col-lg-6">
                                    <div class="box-body px-35">
                                        <div>
                                            <h5 class="fw-500 text-primary-light bb-2 pb-10 m-0">DETAILS</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pb-15 pt-30">
                                            <p class="m-0  fw-600 text-fade">Age</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">27</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">Gender</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">Female</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">Martial Status</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">Single</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">Children</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">Nil</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">Blood Group</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">O+ve</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">Height(m)</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">1.78</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">Weight(kg)</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">65</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">BMI(kg/m2)</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">20.5</h5>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-15">
                                            <p class="m-0  fw-600 text-fade">BF Percentage</p>
                                            <h5 class="m-0  fw-700 text-lightgreen">27%</h5>
                                        </div>
                                        <div>
                                            <h5 class="fw-500 text-primary-light bb-2 mt-20 pb-10 m-0">ALLERGIES
                                            </h5>
                                        </div>
                                        <span class="badge badge-dot badge-success me-10 my-20"> </span><span
                                            class="me-20 fw-500">Eggs</span>
                                        <span class="badge badge-dot badge-success me-10"> </span><span
                                            class="me-20 fw-500">Peanuts</span>
                                        <span class="badge badge-dot badge-success me-10"> </span><span
                                            class="me-20 fw-500">Dust</span><br>
                                        <span class="badge badge-dot badge-success me-10 my-20"> </span><span
                                            class="me-20 fw-500">Pollen</span>
                                    </div>
                                </div>
                                <div class="col-xxxl-12 col-xl-6 col-lg-6">
                                    <div class="card-body px-30">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="card-title fw-600">Angela Martin</h3>
                                        </div>
                                        <h5><span> <i class="fa-solid fa-phone text-primary"></i> </span><a
                                                href="tel:9509312786"
                                                class="card-text fw-500 fs-16 pb-20 text-primary">9509312786</a>
                                        </h5>

                                    </div>
                                    <div class="card-img-top dr-image " alt="Card image cap">
                                        <div class="flexbox px-20 pt-20">
                                            <label class="toggler toggler-danger text-white"></label>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="box">
                            <div class="box-body">
                                <div class="d-flex justify-content-between align-items-center pb-25">
                                    <h3 class="m-0 fw-500">Appointment History</h3>
                                    <span class="float-end "><a class="btn btn-rounded  btn-light fw-500 w-90"
                                            href="appointments.html">View all</a></span>
                                </div>
                                <div class="mb-25 d-flex justify-content-between align-items-center">
                                    <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <i
                                                class="mdi mdi-calendar-range me-10 avatar bg-light rounded fs-16 text-purple"></i>
                                            <div>
                                                <a href="appointments.html">
                                                    <p class="m-0 fs-18 fw-600 hover-blue ">Madical Checkup</p>
                                                </a>
                                                <p class="m-0 text-mute">Mach 14 - 10:30 am</p>
                                            </div>
                                        </div>
                                        <a href="appointments.html"><span
                                                class="glyphicon glyphicon-menu-right"></span></a>
                                    </div>
                                </div>
                                <div class="mb-25 d-flex justify-content-between align-items-center">
                                    <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <i
                                                class="mdi mdi-qrcode-scan avatar me-10 bg-light rounded fs-16 text-purple"></i>
                                            <div>
                                                <a href="#">
                                                    <p class="m-0 fs-18 fw-600 hover-blue">Screening</p>
                                                </a>
                                                <p class="m-0 text-mute">April 10 - 9:30 am</p>
                                            </div>
                                        </div>
                                        <a href="#"><span class="glyphicon glyphicon-menu-right"></span></a>
                                    </div>
                                </div>
                                <div class="mb-25 d-flex justify-content-between align-items-center">
                                    <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <i
                                                class="mdi mdi-comment-processing-outline me-10 avatar bg-light rounded fs-16 text-purple"></i>
                                            <div>
                                                <a href="contact_app_chat.html">
                                                    <p class="m-0 fs-18 fw-600 hover-blue">Chat Consultation</p>
                                                </a>
                                                <p class="m-0 text-mute">May 22 - 12:30 pm</p>
                                            </div>
                                        </div>
                                        <a href="contact_app_chat.html"><span
                                                class="glyphicon glyphicon-menu-right"></span></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <i class="mdi mdi-video me-10 avatar bg-light rounded fs-18 text-purple"></i>
                                            <div>
                                                <a href="#">
                                                    <p class="m-0 fs-18 fw-600 hover-blue">Video call Consultation
                                                    </p>
                                                </a>
                                                <p class="m-0 text-mute">Jan 14 - 10:32 am</p>
                                            </div>
                                        </div>
                                        <a href="#"><span class="glyphicon glyphicon-menu-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="box box-body px-35 py-30">
                            <div class="d-flex justify-content-between align-items-center pb-35 ">
                                <h3 class="m-0 fw-500">Patient File</h3>
                                <span class="float-end "><a class="btn btn-rounded  btn-light fw-500 w-90"
                                        href="patient_details.html">View all</a></span>
                            </div>
                            <div class="mb-35 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="../../images/pdf.png" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Prescription.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#"><i class="fa fa-download bg-light rounded p-5 me-5 text-dark"
                                                aria-hidden="true"></i></a>
                                        <a data-bs-toggle="dropdown" href="#" aria-expanded="false"
                                            class=""><i class="ti-more-alt rotate-90"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                Details</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-35 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="../../images/pdf.png" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">X-ray report.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#"><i class="fa fa-download bg-light rounded p-5 me-5 text-dark"
                                                aria-hidden="true"></i></a>
                                        <a data-bs-toggle="dropdown" href="#" aria-expanded="false"
                                            class=""><i class="ti-more-alt rotate-90"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                Details</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-35 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="../../images/pdf.png" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Checkup.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#"><i class="fa fa-download bg-light rounded p-5 me-5 text-dark"
                                                aria-hidden="true"></i></a>
                                        <a data-bs-toggle="dropdown" href="#" aria-expanded="false"
                                            class=""><i class="ti-more-alt rotate-90"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                Details</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-15 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="../../images/pdf.png" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Screening.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#"><i class="fa fa-download bg-light rounded p-5 me-5 text-dark"
                                                aria-hidden="true"></i></a>
                                        <a data-bs-toggle="dropdown" href="#" aria-expanded="false"
                                            class=""><i class="ti-more-alt rotate-90"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                Details</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="../../images/pdf.png" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Medical Checkup.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#"><i class="fa fa-download bg-light rounded p-5 me-5 text-dark"
                                                aria-hidden="true"></i></a>
                                        <a data-bs-toggle="dropdown" href="#" aria-expanded="false"
                                            class=""><i class="ti-more-alt rotate-90"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                Details</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-25 justify-content-between align-items-center pdf-file">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="../../images/pdf.png" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Sugar Checkup.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#"><i class="fa fa-download bg-light rounded p-5 me-5 text-dark"
                                                aria-hidden="true"></i></a>
                                        <a data-bs-toggle="dropdown" href="#" aria-expanded="false"
                                            class=""><i class="ti-more-alt rotate-90"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                Details</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                Reports</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="../../images/pdf.png" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Bone Scan.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#"><i class="fa fa-download bg-light rounded p-5 me-5 text-dark"
                                                aria-hidden="true"></i></a>
                                        <a data-bs-toggle="dropdown" href="#" aria-expanded="false"
                                            class=""><i class="ti-more-alt rotate-90"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                Details</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                Reports</a>
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
