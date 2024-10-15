
<?php

use App\Http\Controllers\Web\backend\Settings\SocialMediaController;
use App\Http\Controllers\Web\backend\FaQController;
use App\Http\Controllers\Web\backend\BlogController;
use App\Http\Controllers\Web\backend\DashboardController;
use App\Http\Controllers\Web\backend\GoodCompanyController;
use App\Http\Controllers\Web\backend\GoogleSettingController;
use App\Http\Controllers\Web\backend\Settings\DynamicPageController;
use App\Http\Controllers\Web\backend\Settings\MailSettingController;
use App\Http\Controllers\Web\backend\Settings\ProfileController;
use App\Http\Controllers\Web\backend\Settings\StripeSettingController;
use App\Http\Controllers\Web\backend\Settings\SystemSettingController;
use App\Http\Controllers\Web\backend\TeamController;
use App\Http\Controllers\Web\backend\TestimonailController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    //! Route for Dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');





    //! Route for Faqs
    Route::controller(FaQController::class)->group(function () {
        Route::get('/faq', 'index')->name('admin.faq.index');
        Route::get('/faq/create', 'create')->name('admin.faq.create');
        Route::post('/faq/store', 'store')->name('admin.faq.store');
        Route::get('/faq/edit/{id}', 'edit')->name('admin.faq.edit');
        Route::post('/faq/update/{id}', 'update')->name('admin.faq.update');
        Route::post('/faq/status/{id}', 'status')->name('admin.faq.status');
        Route::post('/faq/destroy/{id}', 'destroy')->name('admin.faq.destroy');
    });

    //! Route for Teams
    Route::controller(TeamController::class)->group(function () {
        Route::get('/team', 'index')->name('admin.team.index');
        Route::get('/team/create', 'create')->name('admin.team.create');
        Route::post('/team/store', 'store')->name('admin.team.store');
        Route::get('/team/edit/{id}', 'edit')->name('admin.team.edit');
        Route::post('/team/update/{id}', 'update')->name('admin.team.update');
        Route::post('/team/status/{id}', 'status')->name('admin.team.status');
        Route::post('/team/destroy/{id}', 'destroy')->name('admin.team.destroy');
    });


    //! Route for Profile Settings
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile.setting');
        Route::patch('/update-profile', 'UpdateProfile')->name('update.profile');
        Route::put('/update-profile-password', 'UpdatePassword')->name('update.Password');
        Route::post('/update-profile-picture', 'UpdateProfilePicture')->name('update.profile.picture');
    });

    //! Route for System Settings
    Route::controller(SystemSettingController::class)->group(function () {
        Route::get('/system-setting', 'index')->name('system.index');
        Route::patch('/system-setting', 'update')->name('system.update');
    });

    //! Route for System Settings
    Route::controller(SocialMediaController::class)->group(function () {
        Route::get('/social-media-setting', 'index')->name('media.index');
        Route::post('/social-media-setting/{id}', 'update')->name('media.update');
    });

    //! Route for Mail Settings
    Route::controller(MailSettingController::class)->group(function () {
        Route::get('/mail-setting', 'index')->name('mail.setting');
        Route::patch('/mail-setting', 'update')->name('mail.update');
    });

    //! Route for Stripe Settings
    Route::controller(StripeSettingController::class)->group(function () {
        Route::get('/stripe-setting', 'index')->name('stripe.index');
        Route::patch('/stripe-setting', 'update')->name('stripe.update');
    });

    //! Route for Stripe Settings
    Route::controller(GoogleSettingController::class)->group(function () {
        Route::get('/google-setting', 'index')->name('google.index');
        Route::patch('/google-setting', 'update')->name('google.update');
    });

    //! Route for Dynamic Page Settings
    Route::controller(DynamicPageController::class)->group(function () {
        Route::get('/dynamic-page', 'index')->name('dynamic_page.index');
        Route::get('/dynamic-page/create', 'create')->name('dynamic_page.create');
        Route::post('/dynamic-page/store', 'store')->name('dynamic_page.store');
        Route::get('/dynamic-page/edit/{id}', 'edit')->name('dynamic_page.edit');
        Route::patch('/dynamic-page/update/{id}', 'update')->name('dynamic_page.update');
        Route::get('/dynamic-page/status/{id}', 'status')->name('dynamic_page.status');
        Route::delete('/dynamic-page/delete/{id}', 'destroy')->name('dynamic_page.destroy');
    });
});
