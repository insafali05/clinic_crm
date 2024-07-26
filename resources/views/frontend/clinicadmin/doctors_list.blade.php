@extends('frontend.clinicadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Doctor List</h4>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Doctors</h4>
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
                                            <th>Branch</th>
                                            <th>Specialization</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Added Date</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Schone Clinic 3</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                            <td>27-06-2024</td>
                                            <td><a href="#"> <button class="btn btn-primary-light">View</button> </a>
                                            </td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Schone Clinic 2</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                            <td>27-06-2024</td>
                                            <td><a href="#"> <button class="btn btn-primary-light">View</button> </a>
                                            </td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Schone Clinic 3</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                            <td>27-06-2024</td>
                                            <td><a href="#"> <button class="btn btn-primary-light">View</button> </a>
                                            </td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Schone Clinic 5</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                            <td>27-06-2024</td>
                                            <td><a href="#"> <button class="btn btn-primary-light">View</button> </a>
                                            </td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
                                            <td><a href="#"> <button class="btn btn-danger-light">Delete</button> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Schone Clinic 1</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                            <td>27-06-2024</td>
                                            <td><a href="#"> <button class="btn btn-primary-light">View</button> </a>
                                            </td>
                                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Edit</button></td>
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
                    <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
