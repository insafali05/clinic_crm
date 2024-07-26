@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Renew License</h4>

                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Branch information</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Branch</label>
                                                <input type="text" class="form-control" placeholder="Branch Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Specialization</label>
                                                <select class="form-select">
                                                    <option>Neurology</option>
                                                    <option>Orthopedic</option>
                                                    <option>Dental</option>
                                                    <option>Dermatology</option>
                                                    <option>Gastroenterology</option>
                                                    <option>Ophthalmology</option>
                                                    <option>ENT(Otolaryngology)</option>
                                                    <option>Urology</option>
                                                    <option>Endocrinology</option>
                                                    <option>Rheumatology</option>
                                                    <option>Psychiatry</option>
                                                    <option>Allergy and Immunology</option>
                                                    <option>Pediatrics</option>
                                                    <option>Obstetrics and Gynecology (OB/GYN)</option>
                                                    <option>Pulmonology</option>
                                                    <option>Oncology</option>
                                                    <option>Nephrology</option>
                                                    <option>Physical Therapy</option>
                                                    <option>Pain Management</option>
                                                    <option>Podiatry</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">E-mail</label>
                                                <input type="email" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">License Key</label>
                                                <input type="text" class="form-control" placeholder="license key">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Number of Staff</label>
                                                <input type="text" class="form-control" placeholder="number of staff">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-datetime-local-input">Start Date and time</label>
                                                <div>
                                                    <input class="form-control" type="datetime-local"
                                                        value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-datetime-local-input">Expiry Date and time</label>
                                                <div>
                                                    <input class="form-control" type="datetime-local"
                                                        value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-warning me-1">
                                        <i class="ti-trash"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Renew
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
