@extends('frontend.clinicadmin.layouts.main')

@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <form class="form" method="POST"
                                action="{{ route('clinicadmin.add_branches.update', $branch->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Branch Name</label>
                                                <input type="text" name="branch_name" id="branch_name"
                                                    class="form-control" value="{{ $branch->branch_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" name="contact_number" id="contact_number"
                                                    class="form-control" value="{{ $branch->contact_number }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact No (Alternative)</label>
                                                <input type="text" name="alternate_number" id="alternate_number"
                                                    class="form-control" value="{{ $branch->alternate_number }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" id="address" class="form-control"
                                                    value="{{ $branch->address }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" id="password" class="form-control"
                                                    placeholder="Leave blank to keep current password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Logo</label>
                                        <label class="file">
                                            <input type="file" name="logo" id="logo" class="form-control">
                                        </label>
                                        @if ($branch->logo)
                                            <img src="{{ asset('logos/' . $branch->logo) }}" alt="Logo" height="50">
                                        @endif
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="reset" class="btn btn-warning me-1">
                                        <i class="ti-trash"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
