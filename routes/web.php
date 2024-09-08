<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\http\Controllers\LawyerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('welcome', function () {
//     return view('welcome');
// });

// Route::get('welcome', [AuthController::class, 'indexx'])->name('login');


// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/allusers', function () {
//     return view('manage-users');
// });

//auth
Route::any('login', [AuthController::class, 'indexx'])->name('login');
Route::post('logins', [AuthController::class, 'login'])->name('logindata');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




// admin related
Route::get('/document', [UserController::class, 'document'])->name('document');
Route::get('/admin', [UserController::class, 'getAdminIndex'])->name('getAdminIndex');
Route::get('/document-data',[AdminController::class,'getLawyerDocumentData'])->name('getLawyerDocumentData');
Route::post('/hire-lawyer/{id}',[AdminController::class,'hireLawyer'])->name('hireLawyer');

//this is for client related
Route::get('/', [ClientController::class, 'indexing'])->name('indexing');
Route::get('/practice', [ClientController::class, 'practice'])->name('practice');
Route::get('/client', [ClientController::class, 'client'])->name('client');
Route::get('/resources', [ClientController::class, 'resources'])->name('resources');
Route::get('/registration', [ClientController::class, 'registration'])->name('registrationss');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/case', [ClientController::class, 'case'])->name('case');
Route::get('/donation', [ClientController::class, 'donation'])->name('donation');
Route::get('/clients', [ClientController::class, 'getClients'])->name('getClients');
Route::get('/status', [ClientController::class, 'getCaseStatus'])->name('status');
Route::get('/user', [UserController::class, 'index']);
Route::get('/get-payment-billing', [ClientController::class, 'getPaymentBilling'])->name('getPaymentBilling');
Route::get('/Messaging', [ClientController::class, 'getMessaging'])->name('getMessaging');
Route::get('/Document', [ClientController::class, 'getDocument'])->name('getDocument');
Route::get('/get-artical', [ClientController::class, 'getArtical'])->name('getArtical');
Route::get('/my-post',[ClientController::class, 'getMyPost'])->name('my-post');
Route::post('/post-artical', [ClientController::class, 'postArtical'])->name('postArtical');
Route::get('/fetch-artical', [ClientController::class, 'fetchArtical'])->name('fetchArtical');
Route::get('/payment',[ClientController::class,'payment'])->name('payment');







Route::get('/registrations', [AuthController::class, 'index'])->name('registrations');
Route::post('register', [AuthController::class, 'register'])->name('registration');

Route::get('/viewuser', [UserController::class, 'index'])->name('viewuser');
Route::delete('/viewusers/{id}', [UserController::class, 'destroy'])->name('destroy');

//lawyer
    // Route::get('/lawyers', [LawyerController::class, 'view'])->name('lawyers.index');
Route::get('/lawyerIndex', [LawyerController::class,'lawyerIndex'])->name('lawyerIndex');
Route::get('/lawyers/create', [LawyerController::class,'create'])->name('lawyers.create');
Route::post('/lawyers', [LawyerController::class,'store'])->name('lawyers.store');
Route::get('/lawyers/{id}/edit', [LawyerController::class,'edit'])->name('lawyers.edit');
Route::put('/lawyers/{id}',[LawyerController::class,'update'])->name('lawyers.update');
Route::delete('/lawyers/{id}',[LawyerController::class,'destroy'])->name('lawyers.destroy');
Route::get('/case-management', [LawyerController::class,'caseManagement'])->name('caseManagement');
Route::get('/document-management', [LawyerController::class,'documentManagement'])->name('documentManagement');
Route::post('/post-documents',[LawyerController::class,'postDocuments'])->name('postDocuments');
Route::get('/chat-box', [LawyerController::class,'chatBox'])->name('chatBox');
Route::get('/billing', [LawyerController::class,'billing'])->name('billing');
Route::get('/profile', [LawyerController::class,'profile'])->name('profile');
Route::get('/dashboard', [LawyerController::class,'dashboard'])->name('dashboard');
Route::get('/applied-cases',[LawyerController::class,'myAppliedCases'])->name('myAppliedCases');
Route::post('/status', [LawyerController::class, 'postCaseStatus'])->name('postCaseStatus');
Route::any('/lawyer-status', [LawyerController::class, 'lawyerStatus'])->name('lawyerStatus');
Route::delete('/remove-article', [LawyerController::class, 'remove'])->name('remove_article');
// Route::get('/remove_job/{id}', [AppliedController::class, 'remove'])->name('remove_job');





// Route::prefix('clients')->group(function () {
//     Route::get('/anuj', [ClientController::class, 'getCaseStatus'])->name('anuj');
// });

// Route::get('/users', 'UserController@index')->name('users.index');
// Route::get('/search',[LawyerController::class,'search'])->name('search');

Route::get('/get-case-management', [AdminController::class,'getCaseManagement'])->name('getCaseManagement');
Route::delete('/get-case-managements/{case_id}', [AdminController::class, 'caseDestroy'])->name('caseDestroy');
Route::get('/legal-status',[AdminController::class,'getLegalStatus'])->name('getLegalStatus');
Route::delete('/remove-status', [AdminController::class, 'remove'])->name('remove_status');
Route::get('/hire-lawyer',[AdminController::class, 'getHireLawyer'])->name('getHireLawyer');
Route::post('/Donation',[AdminController::class, 'getDonationReq'])->name('getDonationReq');
Route::post('/donation-req',[AdminController::class, 'donationReq'])->name('donationReq');
Route::get('/donate-report',[AdminController::class, 'getDonateReporting'])->name('getDonateReporting');

Route::get('/viewuser', [UserController::class, 'index'])->name('viewuser');
Route::delete('/viewusers/{id}', [UserController::class, 'destroy'])->name('destroy');


