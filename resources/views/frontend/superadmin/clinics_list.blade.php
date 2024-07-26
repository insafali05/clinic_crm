@extends('frontend.superadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Clinics List</h4>
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
                                        <thead>
                                            <tr>
                                                <th>Sr no.</th>
                                                <th>Clinic Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Payment</th>
                                                <th>Start Date</th>
                                                <th>Expiry Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clinicAdmins as $admin)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $admin->clinic_name }}</td>
                                                    <td>{{ $admin->contact_number }}</td>
                                                    <td>{{ $admin->address }}</td>
                                                    <td>{{ $admin->payment }}</td>
                                                    <td>{{ $admin->start_date_time }}</td>
                                                    <td>{{ $admin->expiry_date_time }}</td>
                                                    <td><span class="badge badge-pill badge-success">Active</span></td>
                                                    <td><a
                                                            href="{{ url('superadmin/clinic_details/' . $admin->contact_number) }}">
                                                            <button class="btn btn-primary-light">View</button> </a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <div class="control-sidebar-bg"></div>
@endsection
