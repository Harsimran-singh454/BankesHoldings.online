<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\paymentsController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

//    ------   Admin   ----------

Route::get('/adminlogin',[AdminController::class,'Admlogin'])->name('AdminLogin');          // login page
Route::post('/admlg',[AdminController::class,'Adminlogin'])->name('admlg');                 // login logic
Route::get('/registerAdmin',[AdminController::class,'Admregister'])->name('AdminRegister')->middleware(admin::class); // registration page
Route::post('AdminCreate',[AdminController::class,'Admcreate'])->name('admcreate');            // registration logic
Route::get('updateAdmin/{id}',[AdminController::class,'updateAdminPage'])->name('updateAdminPage')->middleware(admin::class);   // Update page
Route::POST('updated/{id}',[AdminController::class,'updateAdmin'])->name('updateAdmin');
Route::get('/adminDashboard',[AdminController::class,'dashboard'])->name('Dashboard');      // dashboard
Route::get('alogout',[AdminController::class,'logout'])->name('logout');                     // logout logic


Route::get('/updatepasswordA/{id}',[AdminController::class,'changePasswordPageA'])->name('changePasswordPageA')->middleware(admin::class);
Route::post('/proccessingpasswordA/{id}',[AdminController::class,'changePasswordA'])->name('changePasswordA');



//    ------   Client   ----------

Route::get('/registerClient',[ClientsController::class,'clientregister'])->name('clientnew')->middleware(admin::class); // registration page
Route::get('/',[ClientsController::class,'cltloginpage'])->name('cltlogin');       // login page
Route::post('/cllog',[ClientsController::class,'clientlogin'])->name('clientlogin');           // login logic
Route::get('logout',[ClientsController::class,'Clogout'])->name('Clogout');                   // logout logic
Route::get('/clientlist',[ClientsController::class,'clientlist'])->name('clientlist')->middleware(admin::class);        //All clients



// -----------clients crud---------------

Route::post('clientcreate',[ClientsController::class,'clientcreate'])->name('clientcreate');       //create
Route::get('/clientprofile',[ClientsController::class,'profile'])->name('clientprofile');     //Show data
// Route::get('updateclient/{id}',[ClientsController::class,'updateclient'])->name('updateclient');  //update page
Route::post('saveedit/{id}',[ClientsController::class,'update'])->name('update');                  //update logic
Route::any('deletesuccess/{id}',[ClientsController::class,'deleteclient'])->name('deleteclient')->middleware(admin::class);  // delete

Route::get('/updatepassword/{id}',[ClientsController::class,'changePasswordPage'])->name('changePasswordPage');
Route::post('/proccessingpassword/{id}',[ClientsController::class,'changePassword'])->name('changePassword');

Route::get('/updatedetails/{id}',[ClientsController::class,'selfUpdate'])->name('selfUpdate');
Route::post('/selfUpdateVal/{id}',[ClientsController::class,'selfUpdateVal'])->name('selfUpdateVal');

Route::post('searchres', [ClientsController::class, 'search'])->name('searchclnt');


//     ------   Accounts    -----------

Route::get('/addbankaccount', [AccountController::class,'accountRegisterpage'])->name('accountRegisterpage')->middleware(admin::class);
Route::get('/accountlist',[AccountController::class,'allAccounts'])->name('accountlist');        //All clients

// -----------clients CRUD---------------




// -------------  Accounts CRUD-------------
Route::post('/createAccount', [AccountController::class,'createAccount'])->name('createAccount')->middleware(admin::class);
Route::get('/updateaccount/{id}',[AccountController::class,'updateaccountpage'])->name('updateaccountpage')->middleware(admin::class);  //update page
Route::post('/saveaccount/{id}',[AccountController::class,'updateaccount'])->name('updateaccount');                  //update logic
Route::post('/saveaccountl2/{id}',[AccountController::class,'updateaccountl2'])->name('updateaccountl2');                  //update logic l2
Route::any('/accdeletesuccess/{id}',[AccountController::class,'deleteaccount'])->name('deleteaccount');  // delete



Route::get('/accessa/{id}',[AccountController::class,'accountDataAccessForm'])->name('accountDataAccessForm');
Route::Post('/editA/{id}',[AccountController::class,'grantAccessAccount'])->name('grantAccessAccount');


Route::get('/accessc/{id}',[ClientsController::class,'clientDataAccessForm'])->name('clientDataAccessForm');
Route::Post('/editC/{id}',[ClientsController::class,'grantAccessClient'])->name('grantAccessClient');


Route::post('account-searchres', [AccountController::class, 'search'])->name('searchacc');




// ------------------- Payments --------------------


Route::get('/paymentscard',[paymentsController::class,'paymentsCard'])->name('paymentsCard');





//  ------------------------- Messages -------------------------
Route::post('addmsg/{id}',[MessageController::class,'addMessage'])->name('addMessage')->middleware(admin::class);
//Route::get('CommentForm',[MessageController::class,'newMsg'])->name('newMsg');
