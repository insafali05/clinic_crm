@extends('frontend.clinicadmin.layouts.main')

@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <form class="form" method="POST" action="{{ route('clinicadmin.add_branches.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Branch Name</label>
                                                <input type="text" name="branch_name" id="branch_name"
                                                    class="form-control" placeholder="Clinic Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" name="contact_number" id="contact_number"
                                                    class="form-control" placeholder="Phone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact No (Alternative)</label>
                                                <input type="text" name="alternate_number" id="alternate_number"
                                                    class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" id="address" class="form-control"
                                                    placeholder="Address" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" id="password" class="form-control"
                                                    placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Logo</label>
                                        <label class="file">
                                            <input type="file" name="logo" id="logo" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="reset" class="btn btn-warning me-1">
                                        <i class="ti-trash"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Add
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Branches List</h4>
                                <div class="box-controls pull-right">
                                    <div class="lookup lookup-circle lookup-right">
                                        <input type="text" name="s">
                                    </div>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Sr no.</th>
                                            <th>Branch Name</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($branches as $branch)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $branch->branch_name }}</td>
                                                <td>{{ $branch->contact_number }}</td>
                                                <td>{{ $branch->address }}</td>
                                                <td>Active</td>
                                                <td>
                                                    <a href="{{ route('clinicadmin.add_branches.edit', $branch->id) }}">
                                                        <button class="btn btn-primary-light">Edit</button>
                                                    </a>
                                                    <form
                                                        action="{{ route('clinicadmin.add_branches.destroy', $branch->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger-light">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
