@extends('frontend.lead.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <h4 class="page-title">Upload Bulk Lead</h4>
                        <form method="post" enctype="multipart/form-data" class="ms-3">
                            <label for="file-upload" class="btn btn-primary-light">
                                <i class="fa-solid fa-upload"></i> Upload File
                            </label>
                            <input type="file" id="file-upload" name="file" style="display: none;"
                                onchange="this.form.submit()">
                        </form>
                    </div>
                    <a href="path/to/your/template/file.xlsx" class="btn btn-secondary" download>
                        <i class="fa-solid fa-download"></i> Download Format
                    </a>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class=" col-12">
                        <div class="box">

                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-lg table-hover invoice-archive">
                                        <thead>
                                            <tr>
                                                <th>Lead No.</th>
                                                <th>Patient Name</th>
                                                <th>Contact No</th>
                                                <th>Purpose</th>
                                                <th>Address</th>
                                                <th>Enquiry Date</th>
                                                <th>Status</th>
                                                <th class="text-center">Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar, Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown">
                                                                <i class="fa-solid fa-arrows-rotate"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="fa-regular fa-folder-open"></i> Open
                                                                </a>
                                                                <a href="#" class="dropdown-item follow-up">
                                                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                                                    Follow up
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="fa-solid fa-circle-check"></i>
                                                                    Converted
                                                                </a>
                                                                <a href="#" class="dropdown-item">
                                                                    <i class="fa-solid fa-folder-closed"></i> Close
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#0011</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0012</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0013</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#0010</td>
                                                <td>Ravina</td>
                                                <td>9509312567</td>
                                                <td>Hair Treatment</td>
                                                <td>Atwal Nagar,Kota</td>
                                                <td>10-07-2024</td>
                                                <td><span class="badge badge-pill badge-primary">Open</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
                                                        <div class="list-icons-item dropdown">
                                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                                data-bs-toggle="dropdown"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-regular fa-folder-open"></i>
                                                                    Open</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-clock-rotate-left"></i>Follow
                                                                    up</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-circle-check"></i>Converted</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="fa-solid fa-folder-closed"></i>
                                                                    Close</a>
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

    <script>
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
