<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/marketplace', function () {
    return view('marketplace');
});
Route::get('/become-member', function () {
    return view('become-member');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/details', function () {
    return view('details');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/buyer-signup', function () {
    return view('buyer-signup');
});
Route::get('/buyer-login-information', function () {
    return view('buyer-login-information');
});
Route::get('/seller-register', function () {
    return view('seller-register');
});
Route::get('/seller-login-information', function () {
    return view('seller-login-information');
});
Route::get('/australian-only', function () {
    return view('australian-only');
});

Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/inbox-compose', function () {
    return view('inbox-compose');
});
Route::get('/mydashboard', function () {
    return view('mydashboard');
});
Route::get('/edit-profile1', function () {
    return view('edit-profile1');
});
Route::get('/edit-profile2', function () {
    return view('edit-profile2');
});
Route::get('/edit-sell1', function () {
    return view('edit-sell1');
});
Route::get('/edit-sell2', function () {
    return view('edit-sell2');
});
Route::get('/edit-purchase', function () {
    return view('edit-purchase');
});
Route::get('/edit-favorite', function () {
    return view('edit-favorite');
});
Route::get('/edit-selling', function () {
    return view('edit-selling');
});
Route::get('/edit-promote', function () {
    return view('edit-promote');
});
Route::get('/sell-1', function () {
    return view('sell1');
});
Route::get('/sell-2', function () {
    return view('sell2');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('buyer-signup-information', [RegistrationController::class, 'buyerRegistrationInformation'])->name('buyer-signup-information');
Route::post('buyer-signup', [RegistrationController::class, 'buyerRegistrationForm'])->name('buyer-signup');

Route::post('seller-signup-information1', [RegistrationController::class, 'sellerRegistrationInformation1'])->name('seller-signup-information1');
Route::post('seller-signup-information2', [RegistrationController::class, 'sellerRegistrationInformation2'])->name('seller-signup-information2');
Route::post('seller-signup', [RegistrationController::class, 'sellerRegistrationForm'])->name('seller-signup');
