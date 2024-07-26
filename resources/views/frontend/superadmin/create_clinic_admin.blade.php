@extends('frontend.superadmin.layouts.main')

@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <form class="form" method="POST" action="{{ route('clinic-admin.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <!-- Add your form fields here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Clinic Name</label>
                                                <input type="text" class="form-control" name="clinic_name"
                                                    placeholder="Clinic Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Number of Branches</label>
                                                <select class="form-select" name="number_of_branches">
                                                    @for ($i = 1; $i <= 10; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" name="contact_number"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Contact No(Alternative)</label>
                                                <input type="text" class="form-control" name="alternative_contact_number"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Payment</label>
                                                <input type="text" class="form-control" name="payment"
                                                    placeholder="Payment">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-datetime-local-input">Payment date and Time</label>
                                                <div>
                                                    <input class="form-control" type="datetime-local"
                                                        name="payment_date_time" value="2011-08-19T13:45:00"
                                                        id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Mode</label>
                                                <select class="form-select" name="payment_mode">
                                                    <option value="Online">Online</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Cheque">Cheque</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">License Key</label>
                                                <input type="text" class="form-control" name="license_key"
                                                    placeholder="license key">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-datetime-local-input">Start Date and time</label>
                                                <div>
                                                    <input class="form-control" type="datetime-local" name="start_date_time"
                                                        value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-datetime-local-input">Expiry Date and time</label>
                                                <div>
                                                    <input class="form-control" type="datetime-local"
                                                        name="expiry_date_time" value="2011-08-19T13:45:00"
                                                        id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Select Logo</label>
                                        <label class="file">
                                            <input type="file" id="file" name="logo">
                                        </label>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="btn btn-warning me-1">
                                        <i class="ti-trash"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Add
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
