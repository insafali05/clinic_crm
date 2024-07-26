<!-- Content Wrapper. Contains page content -->
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
                                                <label class="form-label">Staff Type</label>
                                                <input type="text" class="form-control" placeholder="Staff type">
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
                                <h4 class="box-title">Staff Types</h4>
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
                                            <th>Type</th>
                                            <th>Added Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Receptionist</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Telemarker</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Receptionist</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Telemarketer</td>
                                            <td>27-06-2024</td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td> <button type="button" class="btn btn-danger">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Assistant</td>
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

    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Staff Type </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form inside modal -->

                    <div class="row">


                        <!-- /.box-header -->
                        <form class="form">
                            <div class="box-body">


                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Staff Type</label>
                                            <input type="text" class="form-control" placeholder="Staff Type">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                        <!-- /.box -->


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
