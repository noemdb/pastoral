<?php

use App\Http\Controllers\Admin\Sender\MailerController;

Route::prefix('senders')->group(function () {
    Route::resource('mailers', MailerController::class)->only([ 'index']);
});