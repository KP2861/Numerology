<?php

use App\Http\Controllers\NumerologyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('forget-password', [UserController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [UserController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [UserController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('name_numerology/create', [NumerologyController::class, 'createNameNumerology'])->name('name_numerology.create');
Route::post('name_numerology', [NumerologyController::class, 'storeNameNumerology'])->name('name_numerology.store');
// Route to display the form
Route::get('business_numerology/create', [NumerologyController::class, 'createBusinessNumerology'])->name('business_numerology.create');

// Route to handle form submission
Route::post('business_numerology', [NumerologyController::class, 'storeBusinessNumerology'])->name('business_numerology.store');
