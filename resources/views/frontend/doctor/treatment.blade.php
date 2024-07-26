@extends('frontend.doctor.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Treatment</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Type of Treatment</label>
                                                <select class="form-select">
                                                    <option>Hair</option>
                                                    <option>Skin</option>
                                                    <option>Laser</option>
                                                    <option>xyz</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label">Treatment</label>
                                                <select class="form-select">
                                                    <option>Deep Conditioning Treatment</option>
                                                    <option> Keratin Treatment</option>
                                                    <option> Olaplex Treatment</option>
                                                    <option>Scalp Treatment</option>
                                                    <option>Hot Oil Treatment</option>
                                                    <option>Gloss Treatment</option>
                                                    <option>Hair Detox Treatment</option>
                                                    <option>Hair Spa Treatment</option>
                                                    <option>Hydration Treatment</option>
                                                    <option>Bond Repair Treatment</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-label">Sessions</label>
                                                <select class="form-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center mt-3">
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
                                        Add
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>


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
                                                            class="ion-person"></i></span>
                                                    <span class="hidden-xs-down">Treatment 2</span></a> </li>
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab"
                                                    href="#treatment3" role="tab"><span class="hidden-sm-up"><i
                                                            class="ion-email"></i></span>
                                                    <span class="hidden-xs-down">Treatment 3</span></a> </li>
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
                                                                                src="{{ url('frontend/images/avatar/3.jpg') }}">Angela
                                                                            Martin<br /><small>January 16th,
                                                                                2018</small></h2>
                                                                        <hr class="my-30">
                                                                        <div class="box bg-transparent no-shadow b-0">
                                                                            <div class="box-body">
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="{{ url('frontend/images/gallery/studio1.jpg') }}"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="{{ url('frontend/images/gallery/studio1.jpg') }}"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                            <div class="checkbox-wrapper">


                                                                                            </div>
                                                                                        </a>
                                                                                        <a href="{{ url('frontend/images/gallery/landscape1.jpg') }}"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="{{ url('frontend/images/gallery/landscape1.jpg') }}"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="{{ url('frontend/images/gallery/studio2.jpg') }}"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="{{ url('frontend/images/gallery/studio2.jpg') }}"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">

                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>


                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
                                                                                <div id="gallery-content">
                                                                                    <div id="gallery-content-center"
                                                                                        class="zoom-gallery">
                                                                                        <a href="../../images/gallery/studio1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio1.jpg"
                                                                                                alt="gallery"
                                                                                                class="all studio" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/landscape1.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/landscape1.jpg"
                                                                                                class="all landscape"
                                                                                                alt="gallery" />
                                                                                        </a>
                                                                                        <a href="../../images/gallery/studio2.jpg"
                                                                                            data-gallery="multiimages"
                                                                                            title="Image title will be apear here">
                                                                                            <img src="../../images/gallery/studio2.jpg"
                                                                                                class="all studio"
                                                                                                alt="gallery" />
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
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
