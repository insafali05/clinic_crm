@extends('frontend.doctor.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Lab Reports</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Lab Reports
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Radiology List</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="bb-2">No.</th>
                                                <th class="bb-2">Test</th>
                                                <th class="bb-2">Lab</th>
                                                <th class="bb-2">Priority</th>
                                                <th class="bb-2">Cost</th>
                                                <th class="bb-2">Handling</th>
                                                <th class="bb-2">Coll. By</th>
                                                <th class="bb-2">Status</th>
                                                <th class="bb-2">Result</th>
                                                <th class="bb-2">Signed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Blood Count</td>
                                                <td>Microbiology</td>
                                                <td>
                                                    <span class="badge badge-warning">Law</span>
                                                </td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td>
                                                    <span class="badge badge-success">Result Added</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>CMS</td>
                                                <td>Microbiology</td>
                                                <td>
                                                    <span class="badge badge-danger">High</span>
                                                </td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td>
                                                    <span class="badge badge-success">Result Added</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Covid</td>
                                                <td>Microbiology</td>
                                                <td>
                                                    <span class="badge badge-warning">Law</span>
                                                </td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td>
                                                    <span class="badge badge-success">Result Added</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Urin</td>
                                                <td>Microbiology</td>
                                                <td>
                                                    <span class="badge badge-danger">High</span>
                                                </td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td>
                                                    <span class="badge badge-success">Result Added</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Blood Count</td>
                                                <td>Microbiology</td>
                                                <td>
                                                    <span class="badge badge-danger">High</span>
                                                </td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td>
                                                    <span class="badge badge-success">Result Added</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>HB</td>
                                                <td>Microbiology</td>
                                                <td>
                                                    <span class="badge badge-warning">Law</span>
                                                </td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td>
                                                    <span class="badge badge-success">Result Added</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>MD</td>
                                                <td>Microbiology</td>
                                                <td>
                                                    <span class="badge badge-warning">Law</span>
                                                </td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td>
                                                    <span class="badge badge-success">Result Added</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result
                                                    </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!--Model Popup Area-->
    <!-- result modal content -->
    <div class="modal fade" id="result">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="result-popup">
                        Radiology Investigations - Result
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-between">
                        <div class="col-md-7 col-12">
                            <h4>Test Name - Neck Scan</h4>
                        </div>
                        <div class="col-md-5 col-12">
                            <h4 class="text-end">Lab Order Id : L0000002821</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-secondary">
                                <tr>
                                    <th scope="col">Test</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">Range</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Swelling Diameter</td>
                                    <td>45 - 1000</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="comment">
                        <p>
                            <span class="fw-600">Comment</span> :
                            <span class="comment-here text-mute">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.
                            </span>
                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th colspan="2" class="b-0">Test By</th>
                                    <th colspan="2" class="b-0">Signed By</th>
                                </tr>
                                <tr class="bg-secondary">
                                    <td>Donald jr</td>
                                    <td>Time : 11-8-2017 04:22</td>
                                    <td>Lous Clark</td>
                                    <td>Time : 11-8-2017 04:22</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-info pull-right">
                        Print
                    </button>
                    <button type="button" class="btn btn-success pull-right">
                        Save
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- comment modal content -->
    <div class="modal fade" id="comment-dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="comment-popup">
                        Radiology Investigations - Comment
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <h4>Comment</h4>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" id="comment-area" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-success pull-right me-10">
                        Save
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
