@extends('frontend.clinicadmin.layouts.main')

@section('main-container')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <!-- Add Staff Type Form -->
                            <form class="form" method="POST" action="{{ route('clinicadmin.staff_master.store') }}">
                                @csrf
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Staff Type</label>
                                                <input type="text" name="type" class="form-control"
                                                    placeholder="Staff type" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="reset" class="btn btn-warning me-1">
                                        <i class="ti-trash"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ti-save-alt"></i> Add
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Staff Types</h4>
                                <div class="box-controls pull-right">
                                    <div class="lookup lookup-circle lookup-right">
                                        <input type="text" name="s">
                                    </div>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Sr no.</th>
                                            <th>Type</th>
                                            <th>Added Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        @foreach ($staffTypes as $staffType)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $staffType->type }}</td>
                                                <td>{{ $staffType->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#editModal" data-id="{{ $staffType->id }}"
                                                        data-type="{{ $staffType->type }}">Edit</button>
                                                </td>
                                                <td>
                                                    <form
                                                        action="{{ route('clinicadmin.staff_master.destroy', $staffType->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Edit Staff Type Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Staff Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('clinicadmin.staff_master.update', 'staff_id') }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="type" class="form-label">Staff Type</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                            <input type="hidden" id="staff_id" name="staff_id">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Script to handle modal data population
        var editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var type = button.getAttribute('data-type');

            var typeInput = editModal.querySelector('#type');
            var staffIdInput = editModal.querySelector('#staff_id');

            typeInput.value = type;
            staffIdInput.value = id;

            // Update the form action URL to include the ID
            var form = editModal.querySelector('form');
            form.action = form.action.replace('staff_id', id);
        });
    </script>
@endsection
