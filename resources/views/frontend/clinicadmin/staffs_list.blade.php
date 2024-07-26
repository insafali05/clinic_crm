@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Staff List</h4>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Staffs</h4>
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
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Added Date</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Prabha</td>
                                            <td>Receptionist</td>
                                            <td>9123456789</td>
                                            <td>prabha@shoneclinic.com</td>
                                            <td>27-06-2024</td>
                                            <td><a href="{{ url('clinicadmin/staff_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#02</a></td>
                                            <td>Kajal</td>
                                            <td>Telemarketer</td>
                                            <td>90987654321</td>
                                            <td>kajal@shoneclinic.come</td>
                                            <td>27-06-2024</td>
                                            <td><a href="{{ url('clinicadmin/staff_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#03</a></td>
                                            <td>Shakib</td>
                                            <td>Medical Records Clerk</td>
                                            <td>9123456789</td>
                                            <td>shakib@shoneclinic.come</td>
                                            <td>27-06-2024</td>

                                            <td><a href="{{ url('clinicadmin/staff_details') }}""> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#04</a></td>
                                            <td>Insaf Ali</td>
                                            <td>Billing and Coding Specialist</td>
                                            <td>9123456789</td>
                                            <td>insaf@shoneclinic.come</td>
                                            <td>27-06-2024</td>

                                            <td><a href="{{ url('clinicadmin/staff_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#05</a></td>
                                            <td>Suraj</td>
                                            <td>Medical Secretary</td>
                                            <td>9123456789</td>
                                            <td>suraj@shoneclinic.come</td>
                                            <td>27-06-2024</td>
                                            <td><a href="{{ url('clinicadmin/staff_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
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
    <!-- /.content-wrapper -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Modal structure -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
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
                                            <select class="form-select">
                                                <option>Receptionist/Front Desk Staff</option>
                                                <option>Medical Office Manager/Administrator</option>
                                                <option>Medical Secretary</option>
                                                <option>Billing and Coding Specialist</option>
                                                <option>Medical Records Clerk</option>
                                                <option>Telemarketer</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Name">
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
                                            <label class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" placeholder="password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" placeholder="address">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Select Profile Pic</label>
                                    <label class="file">
                                        <input type="file" id="file">
                                    </label>
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
