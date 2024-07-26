@extends('frontend.lab.layouts.main')
@section('main-container')
    <div class="content-wrapper rounded-0">
        <div class="container-full ">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box box-body px-35 py-30">
                            <div class="text-center">
                                <h2>Angela Martin</h2>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pb-35 ">
                                <h3 class="m-0 fw-500">Prescribe Test</h3>

                            </div>
                            <div class="mb-35 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ url('frontend/images/pdf.png') }}" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Prescription.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-35 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ url('frontend/images/pdf.png') }}" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">X-ray report.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-35 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ url('frontend/images/pdf.png') }}" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Checkup.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-15 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ url('frontend/images/pdf.png') }}" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Screening.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20 d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ url('frontend/images/pdf.png') }}" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Medical Checkup.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-25 justify-content-between align-items-center pdf-file">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ url('frontend/images/pdf.png') }}" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Sugar Checkup.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=" d-flex justify-content-between align-items-center">
                                <div class="w-p100 rounded10 justify-content-between align-items-center d-flex">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ url('frontend/images/pdf.png') }}" class="me-10 avatar" alt="">
                                        <div>
                                            <p class="m-0 fs-18 fw-600 hover-blue">Bone Scan.pdf</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
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
