@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <h4 class="page-title">Add Lead</h4>
                        <form method="post" enctype="multipart/form-data">
                            <label for="file-upload" class="btn btn-primary-light">
                                <i class="fa-solid fa-upload"></i>
                                Upload File
                            </label>
                            <input type="file" id="file-upload" name="file" style="display: none;"
                                onchange="this.form.submit()">
                        </form>
                    </div>
                </div>
            </div>


            <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Patient Information Form</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Source</label>
                                                <select class="form-select">
                                                    <option>Offline</option>
                                                    <option>Online</option>
                                                    <option>Telemarketing</option>
                                                    <option>Reference</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Asign Staff</label>
                                                <select class="form-select">
                                                    <option>Prabha</option>
                                                    <option>Shakib</option>
                                                    <option>Insaf</option>
                                                    <option>Kajal</option>
                                                    <option>Suraj</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="patient name">
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
                                                <label for="date1" class="form-label">Date of Birth :</label>
                                                <input type="date" class="form-control" id="date1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Profession</label>
                                                <input type="text" class="form-control" placeholder="Profession">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" placeholder="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact No(Alternative)</label>
                                                <input type="text" class="form-control" placeholder="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Reference(optional)</label>
                                                <input type="text" class="form-control" placeholder="reference name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">About Disease/Reason</label>
                                        <textarea rows="2" class="form-control" placeholder="about disease/reason"></textarea>
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
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
