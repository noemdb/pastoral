<?php
use App\Http\Controllers\Admin\Survey\PollMainController;

Route::prefix('surveys')->group(function () {
    Route::resource('pollmains', PollMainController::class)->only([ 'index']);
}); 