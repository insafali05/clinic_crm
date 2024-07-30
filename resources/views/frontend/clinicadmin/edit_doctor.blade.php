@extends('frontend.clinicadmin.layouts.main')

@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Edit Doctor</h4>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Doctor Information</h4>
                            </div>
                            <form class="form" method="POST"
                                action="{{ route('clinicadmin.doctors.update', $doctor->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name"
                                                    value="{{ old('name', $doctor->name) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Gender :</label>
                                                <div class="c-inputs-stacked">
                                                    <input name="gender" type="radio" id="male" value="male"
                                                        {{ $doctor->gender == 'male' ? 'checked' : '' }} required>
                                                    <label for="male" class="me-30">Male</label>
                                                    <input name="gender" type="radio" id="female" value="female"
                                                        {{ $doctor->gender == 'female' ? 'checked' : '' }} required>
                                                    <label for="female" class="me-30">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Branch</label>
                                                <select name="branch_id" class="form-select" required>
                                                    @foreach ($branches as $branch)
                                                        <option value="{{ $branch->id }}"
                                                            {{ $branch->id == $doctor->branch_id ? 'selected' : '' }}>
                                                            {{ $branch->branch_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Specialization</label>
                                                <select name="specialization_id" class="form-select" required>
                                                    @foreach ($specializations as $specialization)
                                                        <option value="{{ $specialization->id }}"
                                                            {{ $specialization->id == $doctor->specialization_id ? 'selected' : '' }}>
                                                            {{ $specialization->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" name="contact_number" class="form-control"
                                                    placeholder="Phone"
                                                    value="{{ old('contact_number', $doctor->contact) }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email" value="{{ old('email', $doctor->email) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Password">
                                                <small class="text-muted">Leave blank if you don't want to change the
                                                    password.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Address" value="{{ old('address', $doctor->address) }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Adhar Card</label>
                                                <input type="file" name="adhar_card" class="form-control">
                                                @if ($doctor->adhar_card)
                                                    <small class="text-muted">Current: <a
                                                            href="{{ asset('storage/' . $doctor->adhar_card) }}"
                                                            target="_blank">View</a></small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Certificate</label>
                                                <input type="file" name="certificate" class="form-control">
                                                @if ($doctor->certificate)
                                                    <small class="text-muted">Current: <a
                                                            href="{{ asset('storage/' . $doctor->certificate) }}"
                                                            target="_blank">View</a></small>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Photo</label>
                                                <input type="file" name="photo" class="form-control">
                                                @if ($doctor->photo)
                                                    <small class="text-muted">Current: <a
                                                            href="{{ asset('storage/' . $doctor->photo) }}"
                                                            target="_blank">View</a></small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('clinicadmin.doctors.index') }}"
                                        class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
