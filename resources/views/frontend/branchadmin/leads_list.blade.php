@extends('frontend.branchadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Branch List</h4>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Branchs</h4>
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
                                            <th>Patient Name</th>
                                            <th>Contact</th>
                                            <th>Added Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Kiara</td>
                                            <td>9123456789</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-warning">Followup</span></td>
                                            <td><a href="{{ url('branchadmin/lead_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Kiara</td>
                                            <td>9123456789</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-warning">Followup</span></td>
                                            <td><a href="{{ url('branchadmin/lead_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Kiara</td>
                                            <td>9123456789</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-warning">Followup</span></td>
                                            <td><a href="{{ url('branchadmin/lead_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Kiara</td>
                                            <td>9123456789</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-warning">Followup</span></td>
                                            <td><a href="{{ url('branchadmin/lead_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">#01</a></td>
                                            <td>Kiara</td>
                                            <td>9123456789</td>
                                            <td>26-06-2024</td>
                                            <td><span class="badge badge-pill badge-warning">Followup</span></td>
                                            <td><a href="{{ url('branchadmin/lead_details') }}"> <button
                                                        class="btn btn-primary-light">View</button> </a></td>
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
