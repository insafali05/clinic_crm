@extends('frontend.staff.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Appointments</h4>

                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="box">
                            <div class="box-body p-10">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box no-border no-shadow">
                            <div class="box-header with-border">
                                <h4 class="box-title">Draggable Events</h4>
                            </div>
                            <div class="box-body p-0">
                                <!-- the events -->
                                <div id="external-events">
                                    <div class="external-event m-15 bg-primary" data-class="bg-primary"></i>Patient
                                        Checkup</div>
                                    <div class="external-event m-15 bg-warning" data-class="bg-warning">Doctor
                                        Prescribe test</div>
                                    <div class="external-event m-15 bg-info" data-class="bg-info">Patient reschedule
                                        checkup</div>
                                    <div class="external-event m-15 bg-success" data-class="bg-success">Make a bill
                                        of prescribe test </div>
                                    <div class="external-event m-15 bg-danger" data-class="bg-danger">Check a report
                                    </div>
                                </div>
                                <div class="event-fc-bt mx-15 my-20">
                                    <!-- checkbox -->
                                    <div class="checkbox">
                                        <input id="drop-remove" type="checkbox">
                                        <label for="drop-remove">
                                            Remove after drop
                                        </label>
                                    </div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-events"
                                        class="btn btn-success w-p100 my-10">
                                        <i class="ti-plus"></i> Add New Event
                                    </a>
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
