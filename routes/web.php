<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\NumerologyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SimpleNumerologyController;
use App\Http\Controllers\MobileNumerologyController;
use App\Http\Controllers\NameNumerologyController;
use App\Http\Controllers\BusinessNumerologyController;
use App\Http\Controllers\WebPagesController;
use App\Http\Controllers\PDFController;

//Admin
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ConsultantController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\Admin\NumerologyAdminController;
use App\Http\Controllers\StoreBusinessNumerologyController;
use App\Http\Controllers\StoreNameNumerologyController;
use App\Http\Controllers\StorePhoneNumerologyController;
use App\Http\Controllers\Admin\NumerologyListAdminController;
use App\Http\Controllers\AdvanceNumerologyController;
use App\Http\Controllers\Admin\PdfTemplateController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StoreAdvanceNumerologyController;
use App\Http\Controllers\StoreSimpleNumerologyController;
use App\Http\Controllers\TStorePhoneNumerologyController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\YouTubeFeedController;

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



Route::get('lang/{locale}', function ($locale) {
     if (in_array($locale, ['en', 'hi'])) {
          session(['locale' => $locale]);
     }
     return redirect()->back();
})->name('lang.switch');


Route::get('/demo', function () {
     return view('demo');
});




Route::get('/', [WebPagesController::class, 'home'])->name('Website.pages.home');


Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Route to handle the change password form submission
Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('password.change');

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
Route::post('simple_name_numerology', [StoreSimpleNumerologyController::class, 'storeSimpleNameNumerology'])->name('simple_name_numerology.store');
// Route to display the form

Route::get('business_numerology/create', [StoreBusinessNumerologyController::class, 'createBusinessNumerology'])->name('business_numerology.create');

// Route to handle form submission
Route::post('business_numerology', [StoreBusinessNumerologyController::class, 'storeBusinessNumerology'])->name('business_numerology.store');


Route::get('/simple-numerology', [SimpleNumerologyController::class, 'showForm'])->name('numerology.form');
Route::post('/simple-numerology', [SimpleNumerologyController::class, 'calculate'])->name('numerology.calculate');

// Mobile Numerology
Route::get('/mobile-numerology', [MobileNumerologyController::class, 'showMobileForm'])->name('numerology.mobile_numerology_form');
Route::post('/mobile-numerology-result', [MobileNumerologyController::class, 'viewMobileReport'])->name('numerology.mobile_numerology_result');
Route::post('/auto-mobile-report-download', [MobileNumerologyController::class, 'processMobileForm'])->name('numerology.mobile_numerology_auto-download');

Route::get('/auto-mobile-report', function () {
     return view('numerology.mobile_numerology_auto_download');
})->name('mobile_numerology_auto_download');

Route::get('/map', function () {
     return view('numerology.map.map');
})->name('numerology.map');

Route::get('/download-pdf', [MobileNumerologyController::class, 'downloadPDF'])->name('downloadPDF');


Route::post('/download-mobile-pdf', [MobileNumerologyController::class, 'downloadPDF'])->name('numerology.mobile_numerology_pdf');
// Name Numerology 
Route::get('/name-numerology', [NameNumerologyController::class, 'showForm'])->name('numerology.name_numerology_form');
Route::post('/name-numerology-result', [NameNumerologyController::class, 'viewNameReport'])->name('numerology.name_numerology_result');
Route::post('numerology/download-pdf', [NumerologyListAdminController::class, 'downloadPdf'])->name('numerology.downloadPdf');
Route::post('/download-name-pdf', [NameNumerologyController::class, 'calculateNumerology'])->name('numerology.name_numerology_pdf');

Route::get('/auto-name-report', function () {
     return view('numerology.name_numerology_auto_download');
})->name('name_numerology_auto_download');

// Business_Numerology
Route::get('/business-numerology', [BusinessNumerologyController::class, 'showForm'])->name('business_numerology.form');
Route::post('/business-numerology-result', [BusinessNumerologyController::class, 'viewBussinessReport'])->name('numerology.business_numerology_result');
// Route::post('/business-numerology-result', [BusinessNumerologyController::class, 'calculate'])->name('numerology.business_numerology.result');

Route::post('/download-bussiness-pdf', [BusinessNumerologyController::class, 'downloadPDF'])->name('numerology.bussiness_numerology_pdf');

Route::get('/auto-bussiness-report', function () {
     return view('numerology.bussiness_numerology_auto_download');
})->name('bussiness_numerology_auto_download');

Route::post('/auto-bussiness-report-download', [BusinessNumerologyController::class, 'calculate'])->name('download_bussiness');

//phone_numerology
Route::get('phone_numerology/create', [StorePhoneNumerologyController::class, 'createPhoneNumerology'])->name('phone_numerology.create');
Route::post('phone_numerology', [StorePhoneNumerologyController::class, 'storePhoneNumerology'])->name('phone_numerology.store');
//AdvanceNumerology
Route::post('Advance_numerology', [StoreAdvanceNumerologyController::class, 'storeAdvanceNumerology'])->name('advance_numerology.store');
//contact us
Route::get('/contact-us', [WebPagesController::class, 'index'])->name('webpage.contactUs');
Route::get('/numero', [WebPagesController::class, 'numero'])->name('webpage.numerology');




Route::get('/search-business', [WebPagesController::class, 'searchBusiness'])->name('search.business');


//razor-pay 
Route::post('/payment-callback', [NumerologyController::class, 'paymentCallback'])->name('payment.callback');
Route::post('/business-numerology/callback', [StoreBusinessNumerologyController::class, 'paymentCallback'])->name('business_numerology.payment.callback');
Route::post('/name-numerology/callback', [StoreNameNumerologyController::class, 'paymentCallback'])->name('name_numerology.payment.callback');
Route::post('/phone-numerology/callback', [StorePhoneNumerologyController::class, 'paymentCallback'])->name('phone_numerology.payment.callback');
Route::post('/advance-numerology/callback', [StoreAdvanceNumerologyController::class, 'paymentCallback'])->name('advance_numerology.payment.callback');
Route::post('/simple-name-numerology/callback', [StoreSimpleNumerologyController::class, 'paymentCallback'])->name('simple_name_numerology.payment.callback');
//payment page
Route::get('/payment-error', function () {
     return view('payment.notworking');
})->name('payment.error');
// Route::get('/payment', function () {
//      return view('payment.payment');
// })->name('payment.get');

Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment.get');

Route::get('/coming-soon', function () {
     return view('comingsoon.comingsoon');
})->name('comingsoon.get');





Route::get('/session_expired', function () {
     return view('payment.session_expired');
})->name('session.expired');

// Route for redirecting after successful payment (if applicable)
// Route::get('/success', function () {
//     return view('success'); // Replace with your success view
// })->name('payment.success');

/////////////////////////////
//////Advance Numerology/////
/////////////////////////////

Route::get('/advance-numerology', [AdvanceNumerologyController::class, 'showAdvanceForm'])->name('numerology.advance_numerology_form');
Route::post('/advance-numerology-result', [AdvanceNumerologyController::class, 'viewAdvanceReport'])->name('numerology.advance_numerology_result');
Route::post('/auto-advance-report-download', [AdvanceNumerologyController::class, 'processAdvanceForm'])->name('numerology.advance_numerology_auto-download');

Route::get('/auto-advance-report', function () {
     return view('numerology.advance_numerology_auto_download');
})->name('advance_numerology_auto_download');

///////////////////////////////////////////////
////////--------Admin Routes----------/////////
///////////////////////////////////////////////

//Admin Auth
Route::get('admin', [AdminAuthController::class, 'index'])->name('admin.login')->middleware('guest');
Route::post('admin/loginsubmit', [AdminAuthController::class, 'loginsubmit']);
Route::post('admin/logout', [AdminAuthController::class, 'destroy']);


Route::group(['middleware' => ['auth']], function () {

     //Admin Routes
     Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

     //user detail
     Route::get('admin/user/list', [UserListController::class, 'index'])->name('admin.userList');



     // // Route to show a single article
     // Route::get('admin/articles/{article}', [ArticleController::class, 'show'])->name('admin.articles.show');

     //////////////////////////////////////
     //--------------article-------------//
     //////////////////////////////////////
     // Route for listing articles
     Route::get('admin/articles/list', [ArticleController::class, 'index'])->name('admin.articles.list');
     // Route to edit an article
     Route::get('admin/articles/{article}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
     // Route to update an article
     Route::put('admin/articles/{article}', [ArticleController::class, 'update'])->name('admin.articles.update');
     // Route to delete an article
     Route::delete('admin/articles/{id}', [ArticleController::class, 'destroy'])->name('admin.articles.destroy');
     // Route to show the create article form
     Route::get('admin/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
     // Route to store a new article
     Route::post('admin/articles', [ArticleController::class, 'articleStore'])->name('admin.articles.store');

     //--------------article-category-------------//
     // Route for listing articles category
     Route::get('admin/articles-category/list', [ArticleCategoryController::class, 'index'])->name('admin.articles.category.list');
     // Route to edit an article category
     Route::get('admin/articles-category/{category}/edit', [ArticleCategoryController::class, 'edit'])->name('admin.articles.category.edit');
     // Route to update an article category
     Route::put('admin/articles-category/{category}', [ArticleCategoryController::class, 'update'])->name('admin.articles.category.update');
     // Route to delete an article category
     Route::delete('admin/articles-category/{id}', [ArticleCategoryController::class, 'destroy'])->name('admin.articles.category.destroy');
     // Route to show the create article category form
     Route::get('admin/articles-category/create', [ArticleCategoryController::class, 'create'])->name('admin.articles.category.create');
     // Route to store a new article category
     Route::post('admin/articles-category', [ArticleCategoryController::class, 'store'])->name('admin.articles.category.store');


     Route::prefix('admin')->name('admin.')->group(function () {
          Route::get('consultants', [ConsultantController::class, 'index'])->name('consultants.index');
          Route::get('consultants/list', [ConsultantController::class, 'getConsultants'])->name('consultants.list');
          Route::get('consultants/{id}', [ConsultantController::class, 'show'])->name('consultants.show');
          Route::delete('consultants/{id}', [ConsultantController::class, 'destroy'])->name('consultants.destroy');
     });




     Route::prefix('admin')->name('admin.')->group(function () {
          // PDF Template Routes
          Route::get('pdf-templates', [PdfTemplateController::class, 'index'])->name('pdfTemplates.index');
          Route::get('pdf-templates/list', [PdfTemplateController::class, 'getPdfTemplates'])->name('pdfTemplates.list');
          Route::get('pdf-templates/create', [PdfTemplateController::class, 'create'])->name('pdfTemplates.create');
          Route::post('pdf-templates', [PdfTemplateController::class, 'store'])->name('pdfTemplates.store');
          Route::get('pdf-templates/{id}/edit', [PdfTemplateController::class, 'edit'])->name('pdfTemplates.edit');
          Route::put('pdf-templates/{id}', [PdfTemplateController::class, 'update'])->name('pdfTemplates.update');
          Route::delete('pdf-templates/{id}', [PdfTemplateController::class, 'destroy'])->name('pdfTemplates.destroy');
     });



     // Admin Product Routes
     Route::prefix('admin/products')->name('admin.products.')->group(function () {
          // Display a listing of products
          Route::get('/', [ProductController::class, 'index'])->name('index');
          // Show the form for editing the specified product
          Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
          // Update the specified product
          Route::put('/{id}', [ProductController::class, 'update'])->name('update');
          // // Remove the specified product from storage
          // Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
          // List for DataTables
          Route::get('/list', [ProductController::class, 'list'])->name('list');
     });


     //Admin profile
     Route::get('admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
     Route::get('admin/profile/change_password', [AdminProfileController::class, 'changePassword'])->name('admin.profile.changePass');
     Route::get('admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
     Route::get('admin/profile/change_password', [AdminProfileController::class, 'changePassword'])->name('admin.profile.changePass');


     //numorology list
     Route::get('admin/name-numerology/list', [NumerologyListAdminController::class, 'nameNumerologyList'])->name('name_numerology.list');
     Route::get('admin/phone-numerology/list', [NumerologyListAdminController::class, 'phoneNumerologyList'])->name('phone_numerology.list');
     Route::get('admin/bussiness-numerology/list', [NumerologyListAdminController::class, 'businessNumerologyList'])->name('bussiness_numerology.list');
     Route::get('admin/advance-numerology/list', [NumerologyListAdminController::class, 'advanceNumerologyList'])->name('advance_numerology.list');

     Route::delete('admin/name-numerology/delete/{id}', [NumerologyListAdminController::class, 'destroyName'])->name('admin.name_numerology.destroy');
     Route::delete('admin/phone-numerology/delete/{id}', [NumerologyListAdminController::class, 'destroyPhone'])->name('admin.phone_numerology.destroy');
     Route::delete('admin/business-numerology/delete/{id}', [NumerologyListAdminController::class, 'destroyBusiness'])->name('admin.business_numerology.destroy');
     Route::delete('admin/advance-numerology/delete/{id}', [NumerologyListAdminController::class, 'destroyAdvance'])->name('admin.advance_numerology.destroy');

     // Route::delete('admin/numerology/{id}', [NumerologyController::class, 'destroy'])->name('admin.numerology.destroy');
     //numerology detail
     Route::get('admin/name-numerology/detail/{id}', [NumerologyListAdminController::class, 'nameNumerologyDetail'])->name('name_numerology.detail');
     Route::get('admin/phone-numerology/detail/{id}', [NumerologyListAdminController::class, 'phoneNumerologyDetail'])->name('phone_numerology.detail');
     Route::get('admin/bussiness-numerology/detail/{id}', [NumerologyListAdminController::class, 'busssinessNumerologyDetail'])->name('bussiness_numerology.detail');
     Route::get('admin/advance-numerology/detail/{id}', [NumerologyListAdminController::class, 'advanceNumerologyDetail'])->name('advance_numerology.detail');
});

// Route::post('admin/numerology/download-pdf/{type}', [NumerologyListAdminController::class, 'downloadPdf'])->name('numerology.downloadPdf');
Route::post('/consultant/store', [WebPagesController::class, 'consultantStore'])->name('consultant.store');
Route::get('consultant', [WebPagesController::class, 'index'])->name('Website.pages.contactus');
Route::get('numrology', [WebPagesController::class, 'numero'])->name('Website.pages.numerology');
Route::get('profile', [WebPagesController::class, 'profile'])->name('Website.pages.profile');
Route::get('error-404', [WebPagesController::class, 'error'])->name('Website.pages.error404');
Route::get('/get-area-of-struggles', [WebPagesController::class, 'getAreaOfStruggles'])->name('get.area_of_struggles');

Route::post('profile/update', [UserProfileController::class, 'update'])->name('user.profile.update');

//history
Route::get('/numerology-history', [NumerologyController::class, 'showNumerologyHistory'])->name('numerologyHistory');
Route::get('/report/download/{type}/{id}', [NumerologyController::class, 'downloadReport'])->name('downloadReport');
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

Route::get('/numerology/type/{type}', [WebPagesController::class, 'fetchNumerologyType']);



///////////////////////////
////////-----pdf---///////
//////////////////////////

// Route::post('/download-mobile-pdf', [MobileNumerologyController::class, 'downloadPDF'])->name('numerology.mobile_numerology_pdf');
Route::get('/download-mpdf', [PDFController::class, 'downloadPDF']);

/////////////Reports route//////////////////
Route::get('/report-header', [WebPagesController::class, 'reportHeader']);
Route::get('/report-footer', [WebPagesController::class, 'reportFooter']);

Route::get('/new-home-page', [WebPagesController::class, 'newHomePage']);
Route::get('/order-confirm', [WebPagesController::class, 'confirmOrder']);

Route::get('/get-cities', [WebPagesController::class, 'getCities'])->name('get.cities');

//test 
Route::get('/send-email', [EmailController::class, 'sendEmail']);
Route::get('/testmail1', [EmailController::class, 'payment1']);
Route::get('/testmail2', [EmailController::class, 'testMail2']);
Route::get('/test', function () {
     return view('test.test');
});

Route::get('/youtube-feed', [YouTubeFeedController::class, 'index']);


////////////////
///new routes///
////////////////

// Route::get('numerology/create/newNumerology', [NumerologyController::class, 'createNewNumerology'])->name('numerology.create.newNumerology');
Route::get('/products', [WebPagesController::class, 'products']);

//new forgot password
Route::get('new-forget-password', [UserController::class, 'showNewForgetPasswordForm'])->name('new.forget.password.get');
Route::get('update-password', [UserController::class, 'showUpdatePasswordForm'])->name('update.password.get');
Route::post('/delete-session', function () {
     // Clear specific session data
     session()->forget(['numerology_payment']);
     return response()->json(['success' => true]);
})->name('delete.session');
