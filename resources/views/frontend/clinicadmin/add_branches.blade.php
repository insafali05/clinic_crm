@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <!-- <div class="box-header with-border">
                                        <h4 class="box-title">Add Branch</h4>
                                    </div> -->
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Branch Name</label>
                                                <input type="text" class="form-control" placeholder="Clinic Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact No(Alternative)</label>
                                                <input type="text" class="form-control" placeholder="Phone">
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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Select Logo</label>
                                        <label class="file">
                                            <input type="file" id="file">
                                        </label>
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
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Branches List</h4>
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
                                            <th>Branch Name</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Start Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Schone Clinic1</td>
                                            <td>9123456789</td>
                                            <td>Atwal Nagar</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-success">Active</span></td>
                                            <td><a href="#"> <button class="btn btn-primary-light">Edit</button> </a>
                                            </td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Schone Clinic2</td>
                                            <td>9123456789</td>
                                            <td>Bajarang Nagar</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-success">Active</span></td>
                                            <td><a href="#"> <button class="btn btn-primary-light">Edit</button> </a>
                                            </td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Schone Clinic3</td>
                                            <td>9123456789</td>
                                            <td>Talwandi</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-warning">Deactive</span></td>
                                            <td><a href="#"> <button class="btn btn-primary-light">Edit</button> </a>
                                            </td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Schone Clinic4</td>
                                            <td>9123456789</td>
                                            <td>Vigyan Nagar</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-warning">Deactive</span></td>
                                            <td><a href="#"> <button class="btn btn-primary-light">Edit</button> </a>
                                            </td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Schone Clinic5</td>
                                            <td>9123456789</td>
                                            <td>Mahaveer Nagar</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-success">Active</span></td>
                                            <td><a href="#"> <button class="btn btn-primary-light">Edit</button> </a>
                                            </td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

    </div>
@endsection
