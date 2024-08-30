<?php

use App\Http\Controllers\NumerologyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SimpleNumerologyController;
use App\Http\Controllers\MobileNumerologyController;
use App\Http\Controllers\NameNumerologyController;
use App\Http\Controllers\BusinessNumerologyController;
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
    return view('welcome');
});


//home page 
Route::get('/', function () {
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

Route::get('name_numerology/create', [NumerologyController::class, 'createNameNumerology'])->name('name_numerology.create');
Route::post('name_numerology', [NumerologyController::class, 'storeNameNumerology'])->name('name_numerology.store');
// Route to display the form
Route::get('business_numerology/create', [NumerologyController::class, 'createBusinessNumerology'])->name('business_numerology.create');

// Route to handle form submission
Route::post('business_numerology', [NumerologyController::class, 'storeBusinessNumerology'])->name('business_numerology.store');
<<<<<<< HEAD

Route::get('/simple-numerology', [SimpleNumerologyController::class, 'showForm'])->name('numerology.form');
Route::post('/numerology', [SimpleNumerologyController::class, 'calculate'])->name('numerology.calculate');

// Mobile Numerology
Route::get('/mobile-numerology', [MobileNumerologyController::class, 'showMobileForm'])->name('numerology.mobile_numerology_form');
Route::post('/mobile-numerology-result', [MobileNumerologyController::class, 'processMobileForm'])->name('numerology.mobile_numerology_result');

// Name Numerology 
Route::get('/name-numerology', [NameNumerologyController::class, 'showForm'])->name('numerology.name_numerology_form');
Route::post('/name-numerology-result', [NameNumerologyController::class, 'calculateNumerology'])->name('numerology.name_numerology_result');

// Business_Numerology
Route::get('/business-numerology', [BusinessNumerologyController::class, 'showForm'])->name('business_numerology.form');
Route::post('/business-numerology', [BusinessNumerologyController::class, 'calculate'])->name('business_numerology.result');
=======
//phone_numerology
Route::get('phone_numerology/create', [NumerologyController::class, 'createPhoneNumerology'])->name('phone_numerology.create');
Route::post('phone_numerology', [NumerologyController::class, 'storePhoneNumerology'])->name('phone_numerology.store');
>>>>>>> 90280e16f9b0db69064e4526bb2121300914b5b3
