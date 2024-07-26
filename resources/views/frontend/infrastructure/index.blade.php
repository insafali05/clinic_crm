@extends('frontend.infrastructure.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Machine Information</h4>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Machine Information</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">
                                    <h4 class="box-title text-info mb-0"><i class="ti-save me-15"></i>Machine
                                        Information</h4>
                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Item ID</label>
                                                <input type="text" class="form-control" placeholder="Item ID">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Machine Name/Model</label>
                                                <input type="text" class="form-control" placeholder="Machine Name/Model">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Type/Category</label>
                                                <input type="text" class="form-control" placeholder="Type/Category">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Brand/Manufacturer</label>
                                                <input type="text" class="form-control" placeholder="Brand/Manufacturer">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Date of Manufacture</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Date of Manufacture">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-date-input">Date of Purchase</label>
                                                <input class="form-control" type="date" value="2011-08-19"
                                                    id="Date of Purchase">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input">Maintenance Date </label>
                                            <input class="form-control" type="date" value="2011-08-19"
                                                id="Date of Purchase">
                                        </div>
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
