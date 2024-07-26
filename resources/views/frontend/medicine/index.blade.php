@extends('frontend.medicine.layouts.main')
@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <h4 class="page-title">Medicine Inventory</h4>
                        <form method="post" enctype="multipart/form-data">
                            <label for="file-upload" class="btn btn-primary-light">
                                <i class="fa-solid fa-upload"></i>
                                Upload Stock
                            </label>
                            <input type="file" id="file-upload" name="file" style="display: none;"
                                onchange="this.form.submit()">
                        </form>
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
                                                <th>Medicine Name</th>
                                                <th>Generic Name</th>
                                                <th>Dosage Form</th>
                                                <th>Strength</th>
                                                <th>Quantity</th>
                                                <th>Batch/Lot Number</th>
                                                <th>Expiry Date</th>
                                                <th>Manufacturer</th>
                                                <th>Supplier</th>
                                                <th>Location</th>
                                                <th>Price</th>
                                                <th>Reorder Level</th>
                                                <th>Received Date</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
                                                <td>Aspirin</td>
                                                <td>Acetylsalicylic Acid</td>
                                                <td>Tablet</td>
                                                <td>500 mg</td>
                                                <td>1000</td>
                                                <td>B12345</td>
                                                <td>2025-12-31</td>
                                                <td>Bayer</td>
                                                <td>MedSupply Inc.</td>
                                                <td>Shelf B1</td>
                                                <td>500</td>
                                                <td>200</td>
                                                <td>2024-01-15</td>
                                                <td class="text-center">
                                                    <div class="list-icons d-inline-flex">
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
