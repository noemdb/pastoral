<?php

use App\Http\Controllers\Admin\Robot\BmainController;

Route::prefix('robots')->group(function () {
    Route::resource('bmains', BmainController::class)->only([ 'index']);
});