@extends('frontend.medicine.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Medicine Information</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Medicine ID</label>
                                                <input type="text" class="form-control" placeholder="Medicine ID">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Medicine Name</label>
                                                <input type="text" class="form-control" placeholder="Medicine Name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Generic Name</label>
                                                <input type="text" class="form-control" placeholder="Generic Name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Brand Name</label>
                                                <input type="text" class="form-control" placeholder="Brand Name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Category</label>
                                                <select class="form-select">
                                                    <option>Antibiotic</option>
                                                    <option>Analgesic</option>
                                                    <option>Antipyretics</option>
                                                    <option>Antihypertensives</option>
                                                    <option>Antidiabetics</option>
                                                    <option>Antidepressants</option>
                                                    <option>Antifungals</option>
                                                    <option>Antivirals</option>
                                                    <option>Anticoagulants</option>
                                                    <option>Antipsychotics</option>
                                                    <option>Anti-inflammatory</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Form</label>
                                                <select class="form-select">
                                                    <option>Tablets</option>
                                                    <option>Capsules</option>
                                                    <option>Oral Liquids</option>
                                                    <option>Powders</option>
                                                    <option>Injections</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Strengh(Mg)</label>
                                                <input type="text" class="form-control" placeholder="Strengh">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" class="form-control" placeholder="Quantity">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Cost Price</label>
                                                <input type="text" class="form-control" placeholder="Cost Price">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Selling Price</label>
                                                <input type="text" class="form-control" placeholder="Selling Price">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Tax Rate</label>
                                                <input type="text" class="form-control" placeholder="Tax Rate">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Supplier Name</label>
                                                <input type="text" class="form-control" placeholder="Supplier Name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Supplier ID</label>
                                                <input type="text" class="form-control" placeholder="Supplier ID">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Contact Details</label>
                                                <input type="text" class="form-control" placeholder="Contact Details">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Supply Frequency</label>
                                                <input type="text" class="form-control" placeholder="Supply Frequency">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Batch Number</label>
                                                <input type="text" class="form-control" placeholder="Batch Number">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-date-input">Expiry Date</label>
                                                <input class="form-control" type="date" value="2011-08-19"
                                                    id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="example-date-input">Manufacture Date</label>
                                                <input class="form-control" type="date" value="2011-08-19"
                                                    id="example-date-input">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="button" class="btn btn-warning me-1">
                                            <i class="ti-trash"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ti-save-alt"></i> Save
                                        </button>
                                    </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
