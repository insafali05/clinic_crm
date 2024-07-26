@extends('frontend.doctor.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Medicine</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Medicine Name</label>
                                                <select class="form-select">
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                    <option>xyz</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Dose(mg)</label>
                                                <input type="text" class="form-control" placeholder="dose">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" class="form-control" placeholder="quantity">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Duration</label>
                                                <input type="text" class="form-control" placeholder="duration">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Take</label>
                                                <select class="form-select">
                                                    <option>Morning-Afternoon-Night</option>
                                                    <option>Morning-Night</option>
                                                    <option>Morning</option>
                                                    <option>Night</option>
                                                    <option>Afternoon</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Time<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_4">
                                                        <label for="checkbox_4">Before breakfast</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_5">
                                                        <label for="checkbox_5">After Breakfast</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_6">
                                                        <label for="checkbox_6">Before Lunch</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_7">
                                                        <label for="checkbox_7">After Lunch</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_8">
                                                        <label for="checkbox_8">Before Dinner</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_9">
                                                        <label for="checkbox_9">After Dinner</label>
                                                    </fieldset>

                                                </div>

                                            </div>
                                        </div>

                                        <!-- <div class="form-group">
                                                <label class="form-label">Additional Remark</label>
                                                <textarea rows="1" class="form-control" placeholder="Remark"></textarea>
                                            </div> -->

                                    </div>
                                    <!-- /.box-body -->
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
                        <!-- /.box -->
                    </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
