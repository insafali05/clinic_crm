 @extends('frontend.superadmin.layouts.main')
 @section('main-container')
     <div class="content-wrapper">
         <div class="container-full">
             <!-- Content Header (Page header) -->
             <!-- Main content -->
             <section class="content">
                 <div class="row">
                     <div class="col-12">
                         <div class="box">
                             <!-- <div class="box-header with-border">
                                                    <h4 class="box-title">Add Branch</h4>
                                                </div> -->
                             <!-- /.box-header -->
                             <form class="form">
                                 <div class="box-body">

                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Clinic Name</label>
                                                 <input type="text" class="form-control" placeholder="Clinic Name">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Number of Branches</label>
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
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Contact Number</label>
                                                 <input type="text" class="form-control" placeholder="Phone">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Contact No(Alternative)</label>
                                                 <input type="text" class="form-control" placeholder="Phone">
                                             </div>
                                         </div>
                                     </div>

                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Address</label>
                                                 <input type="text" class="form-control" placeholder="address">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Password</label>
                                                 <input type="password" class="form-control" placeholder="password">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Payment</label>
                                                 <input type="text" class="form-control" placeholder="Payment">
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="example-datetime-local-input">Payment date and Time</label>
                                                 <div>
                                                     <input class="form-control" type="datetime-local"
                                                         value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">Mode</label>
                                                 <select class="form-select">
                                                     <option>Online</option>
                                                     <option>Cash</option>
                                                     <option>Cheque</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="form-label">License Key</label>
                                                 <input type="text" class="form-control" placeholder="license key">
                                             </div>
                                         </div>

                                     </div>

                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="example-datetime-local-input">Start Date and time</label>
                                                 <div>
                                                     <input class="form-control" type="datetime-local"
                                                         value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="example-datetime-local-input">Expiry Date and time</label>
                                                 <div>
                                                     <input class="form-control" type="datetime-local"
                                                         value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="form-label">Select Logo</label>
                                         <label class="file">
                                             <input type="file" id="file">
                                         </label>
                                     </div>

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
     </div>
 @endsection
