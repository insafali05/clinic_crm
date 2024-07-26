@extends('frontend.superadmin.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Payments</h4>

                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class=" col-12">
                        <div class="box">

                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-lg invoice-archive">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Clinic Name</th>
                                                <th>Contact</th>
                                                <th>Transaction Id</th>
                                                <th>Transaction-Date</th>
                                                <th>Amount Paid</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="{{ url('superadmin/invoice') }}"
                                                            class="list-icons-item me-10"><i class="fa fa-eye"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0011</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="" class="list-icons-item me-10"><i
                                                                class="fa fa-eye"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0012</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="invoice.html" class="list-icons-item me-10"><i
                                                                class="fa fa-eye"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0013</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0014</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0015</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0025</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0025</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0025</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0025</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0025</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0025</td>
                                                <td>Apollo Hospital</td>
                                                <td>9509312567</td>
                                                <td>#123456abc</td>
                                                <td>10-07-2024</td>
                                                <td>50000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0025</td>
                                                <td>Aiims</td>
                                                <td>7009312567</td>
                                                <td>#133456abc</td>
                                                <td>11-07-2024</td>
                                                <td>60000 Rs</td>
                                                <td><span class="badge badge-pill badge-success">Success</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <a href="#" class="list-icons-item me-10"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa fa-file-text"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-download"></i>
                                                                    Download</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-print"></i> Print</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-pencil"></i> Edit</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa fa-remove"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
