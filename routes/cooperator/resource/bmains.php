<?php

use App\Http\Controllers\Admin\Robot\BmainController;

Route::prefix('coordinator')->name('coordinator.')->group(function () {
Route::prefix('robots')->group(function () {
    Route::resource('bmains', BmainController::class)->only([ 'index']);
});
});