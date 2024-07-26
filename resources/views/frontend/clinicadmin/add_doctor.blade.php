@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Add Doctor</h4>

                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Doctor information</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Gender :</label>
                                                <div class="c-inputs-stacked">
                                                    <input name="gender" type="radio" id="male" value="1">
                                                    <label for="male" class="me-30">Male</label>
                                                    <input name="gender" type="radio" id="female" value="1">
                                                    <label for="female" class="me-30">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Branch</label>
                                                <select class="form-select">
                                                    <option>Schone Clinic 1</option>
                                                    <option>Schone Clinic 2</option>
                                                    <option>Schone Clinic 3</option>
                                                    <option>Schone Clinic 4</option>
                                                    <option>Schone Clinic 5</option>
                                                </select>
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
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Upload Adhar Card </label>
                                                <label class="file">
                                                    <input type="file" id="file">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Upload Certificate</label>
                                                <label class="file">
                                                    <input type="file" id="file">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Upload Photo</label>
                                                <label class="file">
                                                    <input type="file" id="file">
                                                </label>
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
                                        <i class="ti-save-alt"></i> Add
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
