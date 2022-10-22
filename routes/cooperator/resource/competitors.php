<?php
use App\Http\Controllers\Admin\Competitor\EstudiantController;
use App\Http\Controllers\Admin\Competitor\EnrollmentController as AdminEnrollmentController;
use App\Http\Controllers\Admin\Competitor\InscriptionController;
use App\Http\Controllers\Admin\Competitor\RepresentantController;
use App\Http\Controllers\Admin\Competitor\ConstanciesController;
use App\Http\Controllers\Admin\Competitor\GradesController;
use App\Http\Controllers\Admin\Competitor\WithdrawalController;
use App\Http\Controllers\Admin\Competitor\GradeFixController;

Route::prefix('competitors')->group(function () {
    Route::resource('estudiants', EstudiantController::class)->only([ 'index']);
    Route::resource('enrollments', AdminEnrollmentController::class)->only([ 'index']);
    Route::resource('inscriptions', InscriptionController::class)->only([ 'index']);
    Route::resource('representants', RepresentantController::class)->only([ 'index']);
    Route::resource('constancies', ConstanciesController::class)->only([ 'index']);
    Route::resource('grades', GradesController::class)->only([ 'index']);
    Route::resource('withdrawals', WithdrawalController::class)->only([ 'index']);
    Route::resource('gradefixs', GradeFixController::class)->only([ 'index']);
});