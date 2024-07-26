@extends('frontend.lead.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class=" col-12">
                        <div class="box">

                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-lg table-hover invoice-archive">
                                        <thead>
                                            <tr>
                                                <th>Lead No.</th>
                                                <th>Patient Name</th>
                                                <th>Contact No</th>
                                                <th>Purpose</th>
                                                <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>#0011</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td><span class="badge badge-pill badge-danger">Mar 19, 2018<span><i
                                                                class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                title="Patient not intrested"></i></span></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0011</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td><span class="badge badge-pill badge-danger">Mar 19, 2018<span><i
                                                                class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                title="Patient not intrested"></i></span></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0011</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td><span class="badge badge-pill badge-danger">Mar 19, 2018<span><i
                                                                class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                title="Patient not intrested"></i></span></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0011</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td><span class="badge badge-pill badge-danger">Mar 19, 2018<span><i
                                                                class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                title="Patient not intrested"></i></span></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0011</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td><span class="badge badge-pill badge-danger">Mar 19, 2018<span><i
                                                                class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                title="Patient not intrested"></i></span></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0011</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td><span class="badge badge-pill badge-danger">Mar 19, 2018<span><i
                                                                class="fa-solid fa-circle-info" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                title="Patient not intrested"></i></span></span>
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

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
        });
    </script>
@endsection
