@extends('frontend.lead.layouts.main')
@section('main-container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper rounded-0">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/enquiry.png') }}" alt=""
                                                    class="w-60" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Total Leads</h4>
                                                <h3 class="mb-0">100</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/pendinglead.png') }}" alt=""
                                                    class="w-60" />
                                            </div>
                                            <div>
                                                <h4 class="mb-0">Pending Leads</h4>
                                                <h3 class="mb-0">75</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-15">
                                                <img src="{{ url('frontend/images/closelead.png') }}" alt=""
                                                    class="w-60" />

                                            </div>
                                            <div>
                                                <h4 class="mb-0">Closed Leads</h4>
                                                <h3 class="mb-0">25</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 ">
                        <div class="box-body d-sm-flex justify-content-between align-items-center">

                        </div>
                        <div class="box">
                            <div class="box-body px-35 bg-lightgray">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="m-0">LEADS</h4>
                                    <div class="dropdown pull-right position-year">
                                        <button class="bg-blue btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Yearly</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item active" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last week</a>
                                            <a class="dropdown-item" href="#">Last month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-20">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-30">
                                            <h5 class="text-fade">This month</h5>
                                            <h2 class="m-0  text-blue">500</h2>
                                        </div>
                                        <div>
                                            <h5 class="text-fade">This week</h5>
                                            <h2 class="m-0 text-blue">200</h2>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart-1"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>


    <!-- Follow Up Modal -->
    <div class="modal fade" id="followUpModal" tabindex="-1" aria-labelledby="followUpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="followUpModalLabel">Follow Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="followUpDate" class="form-label">Follow Up Date</label>
                            <input type="date" class="form-control" id="followUpDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="notes" class="form-label">Notes</label>
                            <textarea class="form-control" id="notes" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    < <script>
        document.addEventListener('DOMContentLoaded', (event) => {

            // Follow up modal trigger
            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', event => {
                    if (event.target.textContent.trim() === 'Follow up') {
                        var followUpModal = new bootstrap.Modal(document.getElementById(
                            'followUpModal'));
                        followUpModal.show();
                    }
                });
            });
        });
    </script>
@endsection
