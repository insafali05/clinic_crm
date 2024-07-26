@extends('frontend.staff.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

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
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
