@extends('frontend.branchadmin.layouts.main')
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
                                            <th>Specialization</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Dr Reena Jain</td>
                                            <td>Cosmetologist</td>
                                            <td>9123456789</td>
                                            <td>info@shoneclinic.com</td>
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
