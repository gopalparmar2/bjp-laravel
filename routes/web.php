<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\AjaxController;

use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\AssemblyConstituencyController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\QualificationController;
use App\Http\Controllers\Admin\ReligionController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Front\HomeController as FrontHomeController;

Auth::routes();

Route::controller(AjaxController::class)->group(function () {
    Route::group(['as' => 'ajax.', 'prefix' => 'ajax'], function() {
        Route::get('/get-states', 'getStates')->name('get_states');
        Route::get('/get-all-states', 'getAllStates')->name('get_all_states');
        Route::post('/get-districts-and-assemblies', 'getDistrictAndAssemblies')->name('get_districts_and_assemblies');
        Route::post('/get-pincode-details', 'getPincodeDetails')->name('get_pincode_details');
        Route::post('/check-referral-code', 'checkReferralCode')->name('check.referral.code');
    });
});

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Auth::routes();

    Route::group(['middleware' => ['auth', 'isAdmin']], function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');

        Route::controller(ProfileController::class)->group(function () {
            Route::group(['as' => 'profile.', 'prefix' => 'profile'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/update', 'update')->name('update');
                Route::post('/password/update', 'password_update')->name('password.update');
                Route::post('/check_password', 'check_password')->name('check.password');
            });
        });

        Route::controller(PermissionController::class)->group(function () {
            Route::group(['as' => 'permission.', 'prefix' => 'permission'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(RoleController::class)->group(function () {
            Route::group(['as' => 'role.', 'prefix' => 'role'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(AdminUserController::class)->group(function () {
            Route::group(['as' => 'user.', 'prefix' => 'user'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
                Route::post('/exists', 'exists')->name('exists');
            });
        });

        Route::controller(CategoryController::class)->group(function () {
            Route::group(['as' => 'category.', 'prefix' => 'category'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(ProfessionController::class)->group(function () {
            Route::group(['as' => 'profession.', 'prefix' => 'profession'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(QualificationController::class)->group(function () {
            Route::group(['as' => 'qualification.', 'prefix' => 'qualification'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(ReligionController::class)->group(function () {
            Route::group(['as' => 'religion.', 'prefix' => 'religion'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(StateController::class)->group(function () {
            Route::group(['as' => 'state.', 'prefix' => 'state'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(DistrictController::class)->group(function () {
            Route::group(['as' => 'district.', 'prefix' => 'district'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });

        Route::controller(AssemblyConstituencyController::class)->group(function () {
            Route::group(['as' => 'assemblyConstituency.', 'prefix' => 'assembly-constituency'], function() {
                Route::get('/', 'index')->name('index');
                Route::post('/datatable', 'datatable')->name('datatable');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/destroy', 'destroy')->name('destroy');
                Route::post('/change_status', 'change_status')->name('change.status');
            });
        });
    });
});

Route::group(['as' => 'front.'], function () {
    Route::controller(FrontHomeController::class)->group(function () {
        Route::group(['middleware' => ['auth', 'checkProfileCompletion']], function () {
            Route::get('/', 'index')->name('index');

            Route::get('/verify-otp', 'showVerifyOtpForm')->name('show.verify.otp.form');
            Route::post('/verify-otp', 'verifyOtp')->name('verify.otp');

            Route::get('/user-details', 'showUserDetailsForm')->name('show.user.details.form');
            Route::post('/user-details', 'storeUserDetails')->name('store.user.details');
            Route::post('/update-user-image', 'updateUserImage')->name('update.user.image');

            Route::get('/update-details', 'showUpdateDetailsForm')->name('show.update.details.form');
            Route::post('/update-details', 'updateDetails')->name('update.details');

            Route::get('/referral', 'referral')->name('refferal');
            Route::get('/thank-you', 'thankYou')->name('thankyou');
        });
    });
});
