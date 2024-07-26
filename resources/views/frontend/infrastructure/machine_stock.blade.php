@extends('frontend.infrastructure.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Machine History</h4>

                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Machine History</h4>
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
                                                <th>Item ID</th>
                                                <th>Machine Name</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Date of Purchase</th>
                                                <th>Maintenance Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View
                                                                Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View
                                                                Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View
                                                                Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View
                                                                Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="hover-primary">
                                                <td>#LT12345</td>
                                                <td>Spectra XT</td>
                                                <td>Q-Switched Nd</td>
                                                <td>Lutronic</td>
                                                <td>2024-03-22</td>
                                                <td>2024-09-22</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="hover-primary dropdown-toggle no-caret"
                                                            data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">View
                                                                Details</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
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
