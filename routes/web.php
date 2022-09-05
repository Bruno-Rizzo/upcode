<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profiles',           'index')          ->name('profiles.index');
        Route::get('/profiles/edit',      'edit')           ->name('profiles.edit');
        Route::get('/profiles/password',  'password')       ->name('profiles.password');
        Route::post('/profiles/password', 'updatePassword') ->name('profiles.password.update');
        Route::post('/profiles/edit',     'updateProfile')  ->name('profiles.update');
    });

    Route::middleware('admin')->group(function () {

        Route::resource('users',     UserController::class);
        Route::post('users/delete', [UserController::class, 'deleteUser'])->name('users.delete');

        Route::resource('roles',     RoleController::class);
        Route::post('roles/delete', [RoleController::class,             'deleteRole'])       ->name('roles.delete');
        Route::post('roles/{role}/permissions', [RoleController::class, 'assignPermission']) ->name('roles.assignPermission');

        Route::controller(AdminController::class)->group(function () {
            Route::get('/settings/password',         'password')       ->name('settings.password');
            Route::post('/settings/password',        'searchUser')     ->name('settings.search');
            Route::get('/settings/{user}/password',  'editPassword')   ->name('settings.password.edit');
            Route::post('/settings/update/password', 'updatePassword') ->name('settings.password.update');
        });
    });

});

require __DIR__ . '/auth.php';
