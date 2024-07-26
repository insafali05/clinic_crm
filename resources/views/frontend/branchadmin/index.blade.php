@extends('frontend.branchadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper rounded-0">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/enquiry.png') }}" alt=""
                                                    class="w-60" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Total Leads</h4>
                                                <h3 class="mb-0">100</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/pendinglead.png') }}" alt=""
                                                    class="w-60" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Pending Leads</h4>
                                                <h3 class="mb-0">75</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/closelead.png') }}" alt=""
                                                    class="w-60" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Closed Leads</h4>
                                                <h3 class="mb-0">25</h3>
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
