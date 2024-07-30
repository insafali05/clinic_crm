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
                                        <input type="text" name="s" placeholder="Search...">
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
                                        @foreach ($doctors as $index => $doctor)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $doctor->name }}</td>
                                                <td>{{ $doctor->branch->name ?? 'N/A' }}</td>
                                                <td>{{ $doctor->specialization->name ?? 'N/A' }}</td>
                                                <td>{{ $doctor->contact }}</td>
                                                <td>{{ $doctor->email }}</td>
                                                <td>{{ $doctor->created_at->format('d-m-Y') }}</td>
                                                {{-- <td>
                                                    <a href="{{ route('clinicadmin.doctors.show', $doctor->id) }}">
                                                        <button class="btn btn-primary-light">View</button>
                                                    </a>
                                                </td> --}}
                                                <td>
                                                    <a href="{{ route('clinicadmin.doctors.edit', $doctor->id) }}">
                                                        <button type="button" class="btn btn-primary">Edit</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('clinicadmin.doctors.destroy', $doctor->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger-light">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
