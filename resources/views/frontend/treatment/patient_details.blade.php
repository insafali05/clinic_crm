@extends('frontend.treatment.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Treatment</h4>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <!-- row -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="box">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs customtab2 justify-content-center" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#treatment1" role="tab"><span class="hidden-sm-up"><i
                                                            class="ion-home"></i></span> <span
                                                        class="hidden-xs-down">Treatment 1</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab"
                                                    href="#treatment2" role="tab"><span class="hidden-sm-up"><i
                                                            class="ion-person"></i></span> <span
                                                        class="hidden-xs-down">Treatment 2</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab"
                                                    href="#treatment3" role="tab"><span class="hidden-sm-up"><i
                                                            class="ion-email"></i></span> <span
                                                        class="hidden-xs-down">Treatment 3</span></a> </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="treatment1" role="tabpanel">
                                                <div class="py-15">
                                                    <div class="box">
                                                        <section class="cd-horizontal-timeline">
                                                            <div class="timeline">
                                                                <div class="events-wrapper">
                                                                    <div class="events">
                                                                        <ol>
                                                                            <li><a href="#0" data-date="16/01/2018"
                                                                                    class="selected">Session 1</a>
                                                                            </li>
                                                                            <li><a href="#0"
                                                                                    data-date="28/02/2018">Session
                                                                                    2</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="20/04/2018">Session
                                                                                    3</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="20/05/2018">Session
                                                                                    4</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="09/07/2018">Session
                                                                                    5</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="30/08/2018">Session
                                                                                    6</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="15/09/2018">Session
                                                                                    7</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="01/11/2018">Session
                                                                                    8</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="10/12/2018">Session
                                                                                    9</a></li>
                                                                        </ol> <span class="filling-line"
                                                                            aria-hidden="true"></span>
                                                                    </div>
                                                                    <!-- .events -->
                                                                </div>
                                                                <!-- .events-wrapper -->
                                                                <ul class="cd-timeline-navigation">
                                                                    <li><a href="#0" class="prev inactive">Prev</a>
                                                                    </li>
                                                                    <li><a href="#0" class="next">Next</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- .cd-timeline-navigation -->
                                                            </div>
                                                            <!-- .timeline -->
                                                            <div class="events-content">
                                                                <ol>
                                                                    <li class="selected" data-date="16/01/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>January 16th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Result</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Result">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="form-label">Remark</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Remark">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="28/02/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>Feb 28th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="20/04/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>March 20th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="20/05/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>May 20th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="09/07/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>July 9th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="30/08/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>August 30th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="15/09/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>September 15th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="01/11/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>November 01st,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="10/12/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>December 10th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ol>
                                                            </div>
                                                            <!-- .events-content -->
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="treatment2" role="tabpanel">
                                                <div class="py-15">
                                                    <div class="box">
                                                        <section class="cd-horizontal-timeline">
                                                            <div class="timeline">
                                                                <div class="events-wrapper">
                                                                    <div class="events">
                                                                        <ol>
                                                                            <li><a href="#0" data-date="16/01/2018"
                                                                                    class="selected">Session 1</a>
                                                                            </li>
                                                                            <li><a href="#0"
                                                                                    data-date="28/02/2018">Session
                                                                                    2</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="20/04/2018">Session
                                                                                    3</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="20/05/2018">Session
                                                                                    4</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="09/07/2018">Session
                                                                                    5</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="30/08/2018">Session
                                                                                    6</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="15/09/2018">Session
                                                                                    7</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="01/11/2018">Session
                                                                                    8</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="10/12/2018">Session
                                                                                    9</a></li>
                                                                        </ol> <span class="filling-line"
                                                                            aria-hidden="true"></span>
                                                                    </div>
                                                                    <!-- .events -->
                                                                </div>
                                                                <!-- .events-wrapper -->
                                                                <ul class="cd-timeline-navigation">
                                                                    <li><a href="#0" class="prev inactive">Prev</a>
                                                                    </li>
                                                                    <li><a href="#0" class="next">Next</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- .cd-timeline-navigation -->
                                                            </div>
                                                            <!-- .timeline -->
                                                            <div class="events-content">
                                                                <ol>
                                                                    <li class="selected" data-date="16/01/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>January 16th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="28/02/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>Feb 28th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="20/04/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>March 20th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="20/05/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>May 20th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="09/07/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>July 9th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="30/08/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>August 30th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="15/09/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>September 15th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="01/11/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>November 01st,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="10/12/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>December 10th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ol>
                                                            </div>
                                                            <!-- .events-content -->
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="treatment3" role="tabpanel">
                                                <div class="py-15">
                                                    <div class="box">
                                                        <section class="cd-horizontal-timeline">
                                                            <div class="timeline">
                                                                <div class="events-wrapper">
                                                                    <div class="events">
                                                                        <ol>
                                                                            <li><a href="#0" data-date="16/01/2018"
                                                                                    class="selected">Session 1</a>
                                                                            </li>
                                                                            <li><a href="#0"
                                                                                    data-date="28/02/2018">Session
                                                                                    2</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="20/04/2018">Session
                                                                                    3</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="20/05/2018">Session
                                                                                    4</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="09/07/2018">Session
                                                                                    5</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="30/08/2018">Session
                                                                                    6</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="15/09/2018">Session
                                                                                    7</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="01/11/2018">Session
                                                                                    8</a></li>
                                                                            <li><a href="#0"
                                                                                    data-date="10/12/2018">Session
                                                                                    9</a></li>
                                                                        </ol> <span class="filling-line"
                                                                            aria-hidden="true"></span>
                                                                    </div>
                                                                    <!-- .events -->
                                                                </div>
                                                                <!-- .events-wrapper -->
                                                                <ul class="cd-timeline-navigation">
                                                                    <li><a href="#0" class="prev inactive">Prev</a>
                                                                    </li>
                                                                    <li><a href="#0" class="next">Next</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- .cd-timeline-navigation -->
                                                            </div>
                                                            <!-- .timeline -->
                                                            <div class="events-content">
                                                                <ol>
                                                                    <li class="selected" data-date="16/01/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>January 16th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="28/02/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>Feb 28th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="20/04/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>March 20th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="20/05/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>May 20th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="09/07/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>July 9th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="30/08/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>August 30th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="15/09/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">Angela
                                                                            Martin<br /><small>September 15th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="01/11/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>November 01st,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li data-date="10/12/2018">
                                                                        <h2><img class="img-responsive rounded pull-left me-20 mb-10"
                                                                                width="60" alt="user"
                                                                                src="../../images/avatar/3.jpg">
                                                                            Angela Martin<br /><small>December 10th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <form action="#" class="dropzone">
                                                                                    <div class="fallback">
                                                                                        <input name="file"
                                                                                            type="file" multiple />
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ol>
                                                            </div>
                                                            <!-- .events-content -->
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>


                    </div>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
