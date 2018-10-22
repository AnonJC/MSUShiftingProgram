<?php

Route::group(
    [
        'middleware' => 'web',
        'domain' => 'staff.'.\config('app.domain'),
        'namespace' => 'MnkyDevTeam\Staff\Http\Controllers'
    ],
    function () {
        Route::group(['middleware' => 'guest', 'namespace' => "Auth"], function () {
            Route::view('login', 'staff::login')->name('staff.login');
            Route::post('login', "LoginController")->name('staff.login.submit');
        });

        Route::group(['middleware' => 'auth:staff'], function () {
            Route::get('/', function () {
                return \redirect(\route('staff.user.dashboard'));
            })->name('staff.home');

            Route::get('dashboard', "User\DashboardController")->name('staff.user.dashboard');

            Route::post('logout', "Auth\LogoutController")->name('staff.logout');
        });

        Route::group(['middleware' => 'auth:staff', 'prefix' => 'student', 'namespace' => 'Student'], function () {
            Route::group(['prefix' => 'general', 'namespace' => 'General'], function () {
                Route::get('/', "GeneralStudentDataPageController")->name('staff.student.general');
            });

            Route::group(['prefix' => 'upload', 'namespace' => 'Upload'], function () {
                Route::get('/', "UploadStudentDataController")->name('staff.student.upload');
            });
        });
    }
);
