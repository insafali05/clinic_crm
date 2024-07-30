<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Superadmin\Add_ClinicController;
use App\Http\Controllers\Frontend\Superadmin\Clinic_DetailsController;
use App\Http\Controllers\Frontend\Superadmin\Clinic_ListController;
use App\Http\Controllers\Frontend\Superadmin\IndexController;
use App\Http\Controllers\Frontend\Superadmin\InvoiceController;
use App\Http\Controllers\Frontend\Superadmin\PaymentsController;
use App\Http\Controllers\Frontend\Superadmin\Renew_LicenseController;
use App\Http\Controllers\Frontend\Superadmin\ClinicAdminController;
use App\Http\Controllers\Frontend\Superadmin\ClinicAdminAuthController;


use App\Http\Controllers\Frontend\Clinicadmin\Add_branchesController;
use App\Http\Controllers\Frontend\Clinicadmin\Add_doctorController;
use App\Http\Controllers\Frontend\Clinicadmin\Add_leadsController;
use App\Http\Controllers\Frontend\Clinicadmin\Add_staffController;
use App\Http\Controllers\Frontend\Clinicadmin\Branch_detailsController;
use App\Http\Controllers\Frontend\Clinicadmin\ClinicIndexController;
use App\Http\Controllers\Frontend\Clinicadmin\Doctor_listController;
use App\Http\Controllers\Frontend\Clinicadmin\SpecializationController;
use App\Http\Controllers\Frontend\Clinicadmin\InfrastructureMasterController;
use App\Http\Controllers\Frontend\Clinicadmin\Lab_masterController;
use App\Http\Controllers\Frontend\Clinicadmin\Lead_detailsController;
use App\Http\Controllers\Frontend\Clinicadmin\Leads_listController;
use App\Http\Controllers\Frontend\Clinicadmin\MedicineMasterController;
use App\Http\Controllers\Frontend\Clinicadmin\Staff_detailsController;
use App\Http\Controllers\Frontend\Clinicadmin\Staff_masterController;
use App\Http\Controllers\Frontend\Clinicadmin\Staffs_listController;
use App\Http\Controllers\Frontend\Clinicadmin\Treatment_masterController;



use App\Http\Controllers\Frontend\Branchadmin\Add_leadsBranchController;
use App\Http\Controllers\Frontend\Branchadmin\BranchindexController;
use App\Http\Controllers\Frontend\Branchadmin\Doctors_listController;
use App\Http\Controllers\Frontend\Branchadmin\Lead_DetailsBranchController;
use App\Http\Controllers\Frontend\Branchadmin\Leads_listBranchController;
use App\Http\Controllers\Frontend\Branchadmin\Staffs_listBranchController;


use App\Http\Controllers\Frontend\Staff\StaffindexController;
use App\Http\Controllers\Frontend\Staff\Add_leadsStaffController;
use App\Http\Controllers\Frontend\Staff\AppointmentsController;
use App\Http\Controllers\Frontend\Staff\Lead_detailsStaffController;
use App\Http\Controllers\Frontend\Staff\Leads_listStaffController;
use App\Http\Controllers\Frontend\Staff\Staff_detailsStaffController;


use App\Http\Controllers\Frontend\Doctor\DoctorindexController;
use App\Http\Controllers\Frontend\Doctor\Lab_testController;
use App\Http\Controllers\Frontend\Doctor\MedicineController;
use App\Http\Controllers\Frontend\Doctor\Patient_detailsController;
use App\Http\Controllers\Frontend\Doctor\PatientController;
use App\Http\Controllers\Frontend\Doctor\ReportsController;
use App\Http\Controllers\Frontend\Doctor\TreatmentController;

use App\Http\Controllers\Frontend\Lab\LabindexController;
use App\Http\Controllers\Frontend\Lab\Patient_listLabController;
use App\Http\Controllers\Frontend\Lab\Patient_testsController;

use App\Http\Controllers\Frontend\Infrastructure\InfraindexController;
use App\Http\Controllers\Frontend\Infrastructure\Machine_stockController;


use App\Http\Controllers\Frontend\Lead\LeadindexController;
use App\Http\Controllers\Frontend\Lead\Closed_leadsController;
use App\Http\Controllers\Frontend\Lead\Converted_leadsController;
use App\Http\Controllers\Frontend\Lead\Followup_leadsController;
use App\Http\Controllers\Frontend\Lead\Lead_add_leadsController;
use App\Http\Controllers\Frontend\Lead\Open_leadsController;

use App\Http\Controllers\Frontend\Medicine\MedicineindexController;
use App\Http\Controllers\Frontend\Medicine\Purchase_historyController;
use App\Http\Controllers\Frontend\Medicine\PurchaseController;
use App\Http\Controllers\Frontend\Medicine\Sell_historyController;
use App\Http\Controllers\Frontend\Medicine\SellController;

use App\Http\Controllers\Frontend\Treatment\TreatmentindexController;
use App\Http\Controllers\Frontend\Treatment\Treatment_patient_detailsController;
use App\Http\Controllers\Frontend\Treatment\Treatment_patientsController;
use App\Http\Controllers\HomeController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');



Route::middleware(['role:superadmin'])->group(function () {
    Route::get('superadmin/index', [IndexController::class, 'index']);
});

Route::middleware('auth:clinicadmin')->group(function () {
    Route::get('clinicadmin/index', [ClinicIndexController::class, 'index'])->name('clinicadmin.index');


    Route::get('clinicadmin/add_branches', [Add_branchesController::class, 'index'])->name('clinicadmin.add_branches.index');
    Route::post('clinicadmin/add_branches', [Add_branchesController::class, 'store'])->name('clinicadmin.add_branches.store');
    Route::get('clinicadmin/add_branches/{id}/edit', [Add_branchesController::class, 'edit'])->name('clinicadmin.add_branches.edit');
    Route::put('clinicadmin/add_branches/{id}', [Add_branchesController::class, 'update'])->name('clinicadmin.add_branches.update');
    Route::delete('clinicadmin/add_branches/{id}', [Add_branchesController::class, 'destroy'])->name('clinicadmin.add_branches.destroy');

    Route::get('clinicadmin/doctor_master', [SpecializationController::class, 'create'])->name('specializations.create');
    Route::post('clinicadmin/doctor_master', [SpecializationController::class, 'store'])->name('specializations.store');
    Route::put('clinicadmin/doctor_master/{id}', [SpecializationController::class, 'update'])->name('specializations.update');
    Route::delete('clinicadmin/doctor_master/{id}', [SpecializationController::class, 'destroy'])->name('specializations.destroy');

    Route::get('clinicadmin/staff_master', [Staff_masterController::class, 'index'])->name('clinicadmin.staff_master.index');
    Route::post('clinicadmin/staff_master', [Staff_masterController::class, 'store'])->name('clinicadmin.staff_master.store');
    Route::put('clinicadmin/staff_master/{id}', [Staff_masterController::class, 'update'])->name('clinicadmin.staff_master.update');
    Route::delete('clinicadmin/staff_master/{id}', [Staff_masterController::class, 'destroy'])->name('clinicadmin.staff_master.destroy');

    Route::get('clinicadmin/lab_master', [Lab_masterController::class, 'index'])->name('lab_master.index');
    Route::post('clinicadmin/lab_master/store', [Lab_masterController::class, 'store'])->name('lab_master.store');
    Route::post('clinicadmin/lab_master/update/{id}', [Lab_masterController::class, 'update'])->name('lab_master.update');
    Route::delete('clinicadmin/lab_master/delete/{id}', [Lab_masterController::class, 'destroy'])->name('lab_master.destroy');

    Route::get('clinicadmin/treatment_master', [Treatment_masterController::class, 'index'])->name('treatment_master.index');
    Route::post('clinicadmin/treatment_master/store', [Treatment_masterController::class, 'store'])->name('treatment_master.store');
    Route::post('clinicadmin/treatment_master/update/{id}', [Treatment_masterController::class, 'update'])->name('treatment_master.update');
    Route::delete('clinicadmin/treatment_master/delete/{id}', [Treatment_masterController::class, 'destroy'])->name('treatment_master.destroy');

    Route::get('clinicadmin/medicine_master', [MedicineMasterController::class, 'index']);
    Route::post('clinicadmin/medicine_master', [MedicineMasterController::class, 'store']);
    Route::put('clinicadmin/medicine_master/{id}', [MedicineMasterController::class, 'update']);
    Route::delete('clinicadmin/medicine_master/{id}', [MedicineMasterController::class, 'destroy']);

    Route::get('clinicadmin/infrastructure_master', [InfrastructureMasterController::class, 'index'])->name('clinicadmin.infrastructure_master.index');
    Route::post('clinicadmin/infrastructure_master/store', [InfrastructureMasterController::class, 'store'])->name('clinicadmin.infrastructure_master.store');
    Route::post('clinicadmin/infrastructure_master/update/{id}', [InfrastructureMasterController::class, 'update'])->name('clinicadmin.infrastructure_master.update');
    Route::delete('clinicadmin/infrastructure_master/destroy/{id}', [InfrastructureMasterController::class, 'destroy'])->name('clinicadmin.infrastructure_master.destroy');

    Route::get('clinicadmin/add_doctor', [Add_doctorController::class, 'index'])->name('clinicadmin.add_doctor.index');
    Route::post('clinicadmin/add_doctor', [Add_doctorController::class, 'store'])->name('clinicadmin.add_doctor.store');
    Route::get('clinicadmin/doctors_list', [Doctor_listController::class, 'index']);



    Route::get('clinicadmin/add_staff', [Add_staffController::class, 'index']);
    Route::post('clinicadmin/add_staff', [Add_staffController::class, 'store'])->name('clinicadmin.add_staff.store');

    Route::get('clinicadmin/add_leads', [Add_leadsController::class, 'index']);
    Route::get('clinicadmin/branch_details', [Branch_detailsController::class, 'index']);
    Route::get('clinicadmin/lead_details', [Lead_detailsController::class, 'index']);
    Route::get('clinicadmin/leads_list', [Leads_listController::class, 'index']);
    Route::get('clinicadmin/staff_details', [Staff_detailsController::class, 'index']);
    Route::get('clinicadmin/staffs_list', [Staffs_listController::class, 'index']);
});

// Add routes for other roles similarly...

Route::get('clinicadmin/login', [ClinicAdminAuthController::class, 'showLoginForm'])->name('clinicadmin.login');
Route::post('clinicadmin/login', [ClinicAdminAuthController::class, 'login']);
Route::post('clinicadmin/logout', [ClinicAdminAuthController::class, 'logout'])->name('clinicadmin.logout');








// Route::middleware('auth:clinicadmin')->group(function () {
//     Route::get('clinicadmin/dashboard', function () {
//         return view('clinicadmin.dashboard');
//     });
// });


Route::get('/', function () {
    return view('welcome');
});



Route::get('superadmin/', [IndexController::class, 'index']);
// Route::get('superadmin/add_clinic', [Add_ClinicController::class, 'index']);
Route::get('superadmin/clinic_details/{contact_number}', [Clinic_DetailsController::class, 'index']);
Route::get('superadmin/clinics_list', [Clinic_ListController::class, 'index']);
Route::get('superadmin/invoice', [InvoiceController::class, 'index']);
Route::get('superadmin/payments', [PaymentsController::class, 'index']);
Route::get('superadmin/renew_license', [Renew_LicenseController::class, 'index']);

Route::get('clinicadmin/doctor_master', [SpecializationController::class, 'create'])->name('specializations.create');
Route::post('clinicadmin/doctor_master', [SpecializationController::class, 'store'])->name('specializations.store');







Route::get('branchadmin/', [BranchindexController::class, 'index']);
Route::get('branchadmin/add_leads', [Add_leadsBranchController::class, 'index']);
Route::get('branchadmin/doctors_list', [Doctors_listController::class, 'index']);
Route::get('branchadmin/lead_details', [Lead_DetailsBranchController::class, 'index']);
Route::get('branchadmin/leads_list', [Leads_listBranchController::class, 'index']);
Route::get('branchadmin/staffs_list', [Staffs_listBranchController::class, 'index']);



Route::get('staff/', [StaffindexController::class, 'index']);
Route::get('staff/add_leads', [Add_leadsStaffController::class, 'index']);
Route::get('staff/appointments', [AppointmentsController::class, 'index']);
Route::get('staff/lead_details', [Lead_detailsStaffController::class, 'index']);
Route::get('staff/leads_list', [Leads_listStaffController::class, 'index']);
Route::get('staff/staff_details', [Staff_detailsStaffController::class, 'index']);


Route::get('doctor/', [DoctorindexController::class, 'index']);
Route::get('doctor/lab_test', [Lab_testController::class, 'index']);
Route::get('doctor/medicine', [MedicineController::class, 'index']);
Route::get('doctor/patient_details', [Patient_detailsController::class, 'index']);
Route::get('doctor/patients', [PatientController::class, 'index']);
Route::get('doctor/reports', [ReportsController::class, 'index']);
Route::get('doctor/treatment', [TreatmentController::class, 'index']);


Route::get('lab/', [LabindexController::class, 'index']);
Route::get('lab/patients_list', [Patient_listLabController::class, 'index']);
Route::get('lab/patient_tests', [Patient_testsController::class, 'index']);


Route::get('infrastructure/', [InfraindexController::class, 'index']);
Route::get('infrastructure/machine_stock', [Machine_stockController::class, 'index']);


Route::get('lead/', [LeadindexController::class, 'index']);
Route::get('lead/open_leads', [Open_leadsController::class, 'index']);
Route::get('lead/closed_leads', [Closed_leadsController::class, 'index']);
Route::get('lead/converted_leads', [Converted_leadsController::class, 'index']);
Route::get('lead/followup_leads', [Followup_leadsController::class, 'index']);
Route::get('lead/add_leads', [Lead_add_leadsController::class, 'index']);


Route::get('medicine/', [MedicineindexController::class, 'index']);
Route::get('medicine/purchase_history', [Purchase_historyController::class, 'index']);
Route::get('medicine/purchase', [PurchaseController::class, 'index']);
Route::get('medicine/sell_history', [Sell_historyController::class, 'index']);
Route::get('medicine/sell', [SellController::class, 'index']);


Route::get('treatment/', [TreatmentindexController::class, 'index']);
Route::get('treatment/patient_details', [Treatment_patient_detailsController::class, 'index']);
Route::get('treatment/patients', [Treatment_patientsController::class, 'index']);


Route::get('home', [HomeController::class, 'index'])->name('home');


Route::middleware('auth:clinicadmin')->group(function () {

    Route::get('clinicadmin/add_branches', [Add_branchesController::class, 'index']);
});
