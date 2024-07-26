@extends('frontend.branchadmin.layouts.main')
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
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Prabha</td>
                                            <td>Receptionist</td>
                                            <td>9123456789</td>
                                            <td>prabha@shoneclinic.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#02</a></td>
                                            <td>Kajal</td>
                                            <td>Telemarketer</td>
                                            <td>90987654321</td>
                                            <td>kajal@shoneclinic.come</td>

                                        </tr>
                                        <tr>
                                            <td><a href="#">#03</a></td>
                                            <td>Shakib</td>
                                            <td>Medical Records Clerk</td>
                                            <td>9123456789</td>
                                            <td>shakib@shoneclinic.come</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#04</a></td>
                                            <td>Insaf Ali</td>
                                            <td>Billing and Coding Specialist</td>
                                            <td>9123456789</td>
                                            <td>insaf@shoneclinic.come</td>

                                        </tr>
                                        <tr>
                                            <td><a href="#">#05</a></td>
                                            <td>Suraj</td>
                                            <td>Medical Secretary</td>
                                            <td>9123456789</td>
                                            <td>suraj@shoneclinic.come</td>
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
