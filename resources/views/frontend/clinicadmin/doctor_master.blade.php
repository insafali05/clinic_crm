@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <!-- <div class="content-header">
                            <div class="d-flex align-items-center">
                                <div class="me-auto">
                                    <h4 class="page-title">Add Staff</h4>

                                </div>

                            </div>
                        </div> -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">

                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Doctor's Specialization</label>
                                                <input type="text" class="form-control" placeholder="Specialization">
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
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Doctor's Specialization</h4>
                                <div class="box-controls pull-right">
                                    <div class="lookup lookup-circle lookup-right">
                                        <input type="text" name="s">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Sr no.</th>
                                            <th>Specialization</th>
                                            <th>Added Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Cosmetology</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Cosmetology</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Cosmetology</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Cosmetology</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Cosmetology</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection