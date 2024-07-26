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
                                    <h4 class="box-title text-info mb-0"><i class="ti-save me-15"></i>Patient
                                        Information</h4>
                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label">Patient Name</label>
                                                <input type="text" class="form-control" placeholder="patient name">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label">Contact Number</label>
                                                <input type="text" class="form-control" placeholder="contact no">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="form-label">Dcotor Name</label>
                                                <input type="text" class="form-control" placeholder="dr Name">
                                            </div>
                                        </div>
                                    </div>


                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="form-label">Medicine</label>
                                                <input type="text" class="form-control" placeholder="Medicine">
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label class="form-label">Batch No.</label>
                                                <select class="form-select">
                                                    <option>3516</option>
                                                    <option>3516</option>
                                                    <option>3516</option>
                                                    <option>3516</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label class="form-label">HSN</label>
                                                <select class="form-select">
                                                    <option>3516</option>
                                                    <option>3516</option>
                                                    <option>3516</option>
                                                    <option>3516</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <label class="form-label">QTY</label>
                                                <input type="text" class="form-control" placeholder="qty">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label class="form-label">Price/Unit</label>
                                                <input type="text" class="form-control" placeholder="Price">
                                            </div>
                                        </div>
                                        <div class="col-1 d-flex align-items-center mt-3">
                                            <button class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i></button>
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
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Product Summary</h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Medicine</th>
                                                <th>Batch No.</th>
                                                <th>HSN</th>
                                                <th>QTY</th>
                                                <th>Price/Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Paracetamol</td>
                                                <td>3541</td>
                                                <td>1234567</td>
                                                <td>30</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>Paracetamol</td>
                                                <td>3541</td>
                                                <td>1234567</td>
                                                <td>30</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>Paracetamol</td>
                                                <td>3541</td>
                                                <td>1234567</td>
                                                <td>30</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="text-end">Total</th>
                                                <th></th>
                                                <th>900</th>
                                            </tr>

                                            <tr>
                                                <td colspan="3" align="right">GST</td>
                                                <td></td>
                                                <td>168</td>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="text-end fs-24 fw-700">Payable Amount
                                                </th>
                                                <th class="fs-24 fw-700"></th>
                                                <th class="fs-24 fw-700">1068</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
