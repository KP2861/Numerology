<?php

use App\Http\Controllers\NumerologyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SimpleNumerologyController;
use App\Http\Controllers\MobileNumerologyController;
use App\Http\Controllers\NameNumerologyController;
use App\Http\Controllers\BusinessNumerologyController;
use App\Http\Controllers\WebPagesController;

//Admin
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\Admin\NumerologyAdminController;
use App\Http\Controllers\StoreBusinessNumerologyController;
use App\Http\Controllers\StoreNameNumerologyController;
use App\Http\Controllers\StorePhoneNumerologyController;
use App\Http\Controllers\Admin\NumerologyListAdminController;
use App\Http\Controllers\StoreAdvanceNumerologyController;
use App\Http\Controllers\TStorePhoneNumerologyController;

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

Route::get('/', function () {
     return view('Website.pages.home');
});


//home page 
Route::get('/home', function () {
     return view('home');
});


Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('forget-password', [UserController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [UserController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [UserController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//add numerology type 
Route::get('numerology/create', [NumerologyController::class, 'createNumerology'])->name('numerology.create');
Route::post('numerology', [NumerologyController::class, 'storeNumerology'])->name('numerology.store');
//show select numerology types
Route::get('numerology_type', function () {
     return view('selectNumerology');
})->name('numerology.selectNumerology');

Route::get('name_numerology/create', [StoreNameNumerologyController::class, 'createNameNumerology'])->name('name_numerology.create');
Route::post('name_numerology', [StoreNameNumerologyController::class, 'storeNameNumerology'])->name('name_numerology.store');
// Route to display the form

Route::get('business_numerology/create', [StoreBusinessNumerologyController::class, 'createBusinessNumerology'])->name('business_numerology.create');

// Route to handle form submission
Route::post('business_numerology', [StoreBusinessNumerologyController::class, 'storeBusinessNumerology'])->name('business_numerology.store');


Route::get('/simple-numerology', [SimpleNumerologyController::class, 'showForm'])->name('numerology.form');
Route::post('/simple-numerology', [SimpleNumerologyController::class, 'calculate'])->name('numerology.calculate');

// Mobile Numerology
Route::get('/mobile-numerology', [MobileNumerologyController::class, 'showMobileForm'])->name('numerology.mobile_numerology_form');
Route::post('/mobile-numerology-result', [MobileNumerologyController::class, 'processMobileForm'])->name('numerology.mobile_numerology_result');
Route::post('/download-pdf', [MobileNumerologyController::class, 'downloadPDF'])->name('numerology.mobile_numerology_pdf');
// Name Numerology 
Route::get('/name-numerology', [NameNumerologyController::class, 'showForm'])->name('numerology.name_numerology_form');
Route::post('/name-numerology-result', [NameNumerologyController::class, 'calculateNumerology'])->name('numerology.name_numerology_result');
Route::post('numerology/download-pdf', [NumerologyListAdminController::class, 'downloadPdf'])->name('numerology.downloadPdf');

// Business_Numerology
Route::get('/business-numerology', [BusinessNumerologyController::class, 'showForm'])->name('business_numerology.form');
Route::post('/business-numerology', [BusinessNumerologyController::class, 'calculate'])->name('business_numerology.result');

//phone_numerology
Route::get('phone_numerology/create', [StorePhoneNumerologyController::class, 'createPhoneNumerology'])->name('phone_numerology.create');
Route::post('phone_numerology', [StorePhoneNumerologyController::class, 'storePhoneNumerology'])->name('phone_numerology.store');
//AdvanceNumerology
Route::post('Advance_numerology', [StoreAdvanceNumerologyController::class, 'storeAdvanceNumerology'])->name('advance_numerology.store');
//contact us
Route::get('/contact-us', [WebPagesController::class, 'index'])->name('webpage.contactUs');
Route::get('/numero', [WebPagesController::class, 'numero'])->name('webpage.numerology');

//razor-pay 
Route::post('/payment-callback', [NumerologyController::class, 'paymentCallback'])->name('payment.callback');
Route::post('/business-numerology/callback', [StoreBusinessNumerologyController::class, 'paymentCallback'])->name('business_numerology.payment.callback');
Route::post('/name-numerology/callback', [StoreNameNumerologyController::class, 'paymentCallback'])->name('name_numerology.payment.callback');
Route::post('/phone-numerology/callback', [StorePhoneNumerologyController::class, 'paymentCallback'])->name('phone_numerology.payment.callback');

//payment page
Route::get('/payment-error', function () {
     return view('payment.notworking');
})->name('payment.error');
Route::get('/payment', function () {
     return view('payment.payment');
})->name('payment.get');

// Route for redirecting after successful payment (if applicable)
// Route::get('/success', function () {
//     return view('success'); // Replace with your success view
// })->name('payment.success');

////////////////////////////////////////////
/////--------Admin Routes----------/////////
////////////////////////////////////////////

//Admin Routes
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

//user detail
Route::get('admin/user/list', [UserListController::class, 'index'])->name('admin.userList');

//Admin profile
Route::get('admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
Route::get('admin/profile/change_password', [AdminProfileController::class, 'changePassword'])->name('admin.profile.changePass');
Route::get('admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
Route::get('admin/profile/change_password', [AdminProfileController::class, 'changePassword'])->name('admin.profile.changePass');


//numorology list
Route::get('admin/name-numerology/list', [NumerologyListAdminController::class, 'nameNumerologyList'])->name('name_numerology.list');
Route::get('admin/phone-numerology/list', [NumerologyListAdminController::class, 'phoneNumerologyList'])->name('phone_numerology.list');
Route::get('admin/bussiness-numerology/list', [NumerologyListAdminController::class, 'businessNumerologyList'])->name('bussiness_numerology.list');

//numerology detail
Route::get('admin/name-numerology/detail/{id}', [NumerologyListAdminController::class, 'nameNumerologyDetail'])->name('name_numerology.detail');
Route::get('admin/phone-numerology/detail/{id}', [NumerologyListAdminController::class, 'phoneNumerologyDetail'])->name('phone_numerology.detail');
Route::get('admin/bussiness-numerology/detail/{id}', [NumerologyListAdminController::class, 'busssinessNumerologyDetail'])->name('bussiness_numerology.detail');


// Route::post('admin/numerology/download-pdf/{type}', [NumerologyListAdminController::class, 'downloadPdf'])->name('numerology.downloadPdf');

Route::get('consultant', [WebPagesController::class, 'index'])->name('Website.pages.contactus');
Route::get('numrology', [WebPagesController::class, 'numero'])->name('Website.pages.numerology');
Route::get('profile', [WebPagesController::class, 'profile'])->name('Website.pages.profile');
// Route::post('admin/numerology/download-pdf/{type}', [NumerologyListAdminController::class, 'downloadPdf'])->name('numerology.downloadPdf');

// Route::post('/tphone-numerology/store', [TStorePhoneNumerologyController::class, 'storePhoneNumerology'])
//      ->name('numerology.tphone_numerology_store');

// // Route to handle form submission for advance numerology
// Route::post('/tadvance-numerology/store', [TStorePhoneNumerologyController::class, 'storeAdvanceNumerology'])
//      ->name('numerology.tadvance_numerology_store');

// // Route to handle payment callback
// Route::post('/tpayment/callback', [TStorePhoneNumerologyController::class, 'paymentCallback'])
//      ->name('phone_numerology.tpayment.callback');


Route::get('/pay', function () {
     return view('payment.pay');
})->name('payment.pay');
