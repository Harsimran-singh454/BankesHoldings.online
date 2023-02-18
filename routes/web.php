<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\paymentsController;
use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

//    ------   Admin   ----------

Route::get('/adminlogin',[AdminController::class,'Admlogin'])->name('AdminLogin');          // login page
Route::post('/admlg',[AdminController::class,'Adminlogin'])->name('admlg');                 // login logic
Route::get('/registerAdmin',[AdminController::class,'Admregister'])->name('AdminRegister'); // registration page
Route::post('AdminCreate',[AdminController::class,'Admcreate'])->name('admcreate');            // registration logic
Route::get('updateAdmin/{id}',[AdminController::class,'updateAdminPage'])->name('updateAdminPage');   // Update page
Route::POST('updated/{id}',[AdminController::class,'updateAdmin'])->name('updateAdmin');
Route::get('/adminDashboard',[AdminController::class,'dashboard'])->name('Dashboard');      // dashboard
Route::get('alogout',[AdminController::class,'logout'])->name('logout');                     // logout logic




//    ------   Client   ----------

Route::get('/registerClient',[ClientsController::class,'clientregister'])->name('clientnew'); // registration page
Route::get('/',[ClientsController::class,'cltloginpage'])->name('cltlogin');       // login page
Route::post('/cllog',[ClientsController::class,'clientlogin'])->name('clientlogin');           // login logic
Route::get('logout',[ClientsController::class,'Clogout'])->name('Clogout');                   // logout logic
Route::get('/clientlist',[ClientsController::class,'clientlist'])->name('clientlist');        //All clients

// -----------clients crud---------------

Route::post('clientcreate',[ClientsController::class,'clientcreate'])->name('clientcreate');       //create
Route::get('/clientprofile',[ClientsController::class,'profile'])->name('clientprofile');     //Show data
// Route::get('updateclient/{id}',[ClientsController::class,'updateclient'])->name('updateclient');  //update page
Route::post('saveedit/{id}',[ClientsController::class,'update'])->name('update');                  //update logic
Route::any('deletesuccess/{id}',[ClientsController::class,'deleteclient'])->name('deleteclient');  // delete





//     ------   Accounts    -----------

Route::get('/addbankaccount', [AccountController::class,'accountRegisterpage'])->name('accountRegisterpage');
Route::get('/accountlist',[AccountController::class,'allAccounts'])->name('accountlist');        //All clients

// -----------clients CRUD---------------




// -------------  Accounts CRUD-------------
Route::post('/createAccount', [AccountController::class,'createAccount'])->name('createAccount');
Route::get('/updateaccount/{id}',[AccountController::class,'updateaccountpage'])->name('updateaccountpage');  //update page
Route::post('/saveaccount/{id}',[AccountController::class,'updateaccount'])->name('updateaccount');                  //update logic
Route::any('/accdeletesuccess/{id}',[AccountController::class,'deleteaccount'])->name('deleteaccount');  // delete




Route::get('/accessa/{id}',[AccountController::class,'accountDataAccessForm'])->name('accountDataAccessForm');
Route::Post('/editA/{id}',[AccountController::class,'grantAccessAccount'])->name('grantAccessAccount');


Route::get('/accessc/{id}',[ClientsController::class,'clientDataAccessForm'])->name('clientDataAccessForm');
Route::Post('/editC/{id}',[ClientsController::class,'grantAccessClient'])->name('grantAccessClient');






// ------------------- Payments --------------------


Route::get('/paymentscard',[paymentsController::class,'paymentsCard'])->name('paymentsCard');
