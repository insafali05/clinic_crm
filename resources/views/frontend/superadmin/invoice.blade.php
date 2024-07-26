   @extends('frontend.superadmin.layouts.main')
   @section('main-container')
       <div class="content-wrapper">
           <div class="container-full">
               <!-- Content Header (Page header) -->
               <div class="content-header">
                   <div class="d-flex align-items-center">
                       <div class="me-auto">
                           <h4 class="page-title">Invoice</h4>
                       </div>
                   </div>
               </div>

               <!-- Main content -->
               <section class="invoice printableArea">
                   <div class="row">
                       <div class="col-12">
                           <div class="bb-1 clearFix">
                               <div class="text-end pb-15">
                                   <button class="btn btn-success" type="button">
                                       <span><i class="fa fa-print"></i> Save</span>
                                   </button>
                                   <button id="print2" class="btn btn-warning" type="button">
                                       <span><i class="fa fa-print"></i> Print</span>
                                   </button>
                               </div>
                           </div>
                       </div>
                       <div class="col-12">
                           <div class="page-header">
                               <h2 class="d-inline">
                                   <span class="fs-30">Invoice</span>
                               </h2>
                               <div class="pull-right text-end">
                                   <h3>10-07-2024</h3>
                               </div>
                           </div>
                       </div>
                       <!-- /.col -->
                   </div>
                   <div class="row invoice-info">
                       <div class="col-md-6 invoice-col">
                           <strong>From</strong>
                           <address>
                               <strong class="text-blue fs-24">Schone Clinic</strong><br />
                               <strong class="d-inline">Atwal Nagar, Kota, Rajasthan</strong><br />
                               <strong>8850612429 &nbsp;&nbsp;&nbsp;&nbsp; Email:
                                   info@schoneclinic.com</strong>
                           </address>
                       </div>
                       <!-- /.col -->
                       <div class="col-md-6 invoice-col text-end">
                           <strong>To</strong>
                           <address>
                               <strong class="text-blue fs-24">Apollo Hospital</strong><br />
                               Bajarang Nagar, Kota, Rajasthan<br />
                               <strong>Phone:7894561230 &nbsp;&nbsp;&nbsp;&nbsp; Email:
                                   conatct@apollohospital.com</strong>
                           </address>
                       </div>
                       <!-- /.col -->
                       <div class="col-sm-12 invoice-col mb-15">
                           <div class="invoice-details row no-margin">
                               <div class="col-md-6 col-lg-3"><b>Invoice </b>#0154879</div>
                               <div class="col-md-6 col-lg-3"><b>Order ID:</b> FC12548</div>
                               <div class="col-md-6 col-lg-3">
                                   <b>Payment:</b> 14/08/2018
                               </div>
                               <div class="col-md-6 col-lg-3">
                                   <b>Account:</b> 00215487541296
                               </div>
                           </div>
                       </div>
                       <!-- /.col -->
                   </div>
                   <div class="row">
                       <div class="col-12 table-responsive">
                           <table class="table table-bordered">
                               <tbody>
                                   <tr>
                                       <th>#</th>
                                       <th>Description</th>
                                       <th>How much Branch </th>
                                       <th>Duration</th>
                                       <th>Start Date</th>
                                       <th>Expiry Date</th>
                                   </tr>
                                   <tr>
                                       <td>1</td>
                                       <td>Clinic License</td>
                                       <td>5</td>
                                       <td>2 Year</td>
                                       <td>10-07-2024</td>
                                       <td>09-07-2026</td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                       <!-- /.col -->
                   </div>
                   <div class="row">
                       <div class="col-12 text-end">
                           <p class="lead">
                               <b>Payment</b>
                           </p>

                           <div>
                               <p>Sub - Total amount : Rs 45,000</p>
                               <p>GST(28%) : 5000</p>

                           </div>
                           <div class="total-payment">
                               <h3><b>Total :</b> Rs 50,000</h3>
                           </div>
                       </div>
                       <!-- /.col -->
                   </div>
               </section>
               <!-- /.content -->
           </div>
       </div>
       </div>
   @endsection
