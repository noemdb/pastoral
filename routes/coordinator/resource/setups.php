<?php
use App\Http\Controllers\Admin\Setup\ProfileController;
use App\Http\Controllers\Admin\Setup\RoleController;
use App\Http\Controllers\Admin\Setup\UserController;

Route::prefix('setups')->group(function () {
    Route::resource('users', UserController::class)->only([ 'index']);
    Route::resource('roles', RoleController::class)->only([ 'index']);
    Route::resource('profiles', ProfileController::class)->only([ 'index']);
});