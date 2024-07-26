@extends('frontend.lab.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Patients</h4>

                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Patients</h4>
                                <div class="box-controls pull-right">
                                    <div class="lookup lookup-circle lookup-right">
                                        <input type="text" name="s">
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive rounded card-table">
                                    <table class="table border-no" id="example1">
                                        <thead>
                                            <tr>
                                                <th>Patient ID</th>
                                                <th>Date</th>
                                                <th>Patient Name</th>
                                                <th>Action</th>
                                                <th>File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#p245879</td>
                                                <td>14 April 2021, 10:30 AM</td>
                                                <td>Aaliyah clark</td>
                                                <td><a class="btn btn-primary" href="patient_tests.html">View</a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-group">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
