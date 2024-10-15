<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Web\backend\AdminController;
use App\Http\Controllers\Web\user_dashboard\ClientController;
use App\Http\Controllers\Web\front_end\HomeController;
use App\Http\Controllers\Web\user_dashboard\TaxPrepareController;
use App\Http\Controllers\Web\user_dashboard\TaxPrepareProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// front end landing page routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/join', [HomeController::class, 'join'])->name('home.join');
Route::get('/join-as-prepare', [HomeController::class, 'join_tax_prepare'])->name('home.prepare');
Route::get('/start-questions', [HomeController::class, 'start_questions'])->name('home.start_questions');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/categories', [HomeController::class, 'category'])->name('home.category');


Auth::routes();


// admin routes
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
// }); 


// client routes
Route::middleware(['auth', 'role:client'])->group(function () {

    Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/bookmarks', [ClientController::class, 'bookmark'])->name('client.bookmarks');
    Route::get('/client/bookings', [ClientController::class, 'booking'])->name('client.booking');
    Route::get('/client/profile-bookings', [ClientController::class, 'profile_booking'])->name('client.profile_booking');
    Route::get('/client/document-center', [ClientController::class, 'document_center'])->name('client.document_center');

});


// tax prepare dashboard routes
Route::middleware(['auth', 'role:tax_prepare'])->group(function () {

    Route::get('/tax-prepare/dashboard', [TaxPrepareController::class, 'index'])->name('tax_prepare.index');
    Route::get('/tax-prepare/appointment', [TaxPrepareController::class, 'appointment'])->name('tax_prepare.appointment');


    // tax prepare profile routes

    Route::get('/tax-prepare/profile-setup', [TaxPrepareProfileController::class, 'index'])->name('tax_prepare.profile.index');
    Route::get('/tax-prepare/profile', [TaxPrepareProfileController::class, 'profile'])->name('tax_prepare.profile.profile');
    Route::get('/tax-prepare-stepform', [TaxPrepareProfileController::class, 'tax_prepare_stepform'])->name('tax_prepare.tax_prepare_stepform');

    Route::post('/tax-prepare/store', [TaxPrepareProfileController::class, 'store'])->name('tax_prepare.store');

    Route::post('/tax-prepare/profile/update', [TaxPrepareProfileController::class, 'update'])->name('tax_prepare.profile.update');

});
