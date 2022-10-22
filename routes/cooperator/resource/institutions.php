<?php
use App\Http\Controllers\Admin\InstitutionController;
use App\Http\Controllers\Admin\Institution\AuthorityController;
use App\Http\Controllers\Admin\Institution\PescolarController;
use App\Http\Controllers\Admin\Institution\CurriculumController;
use App\Http\Controllers\Admin\Institution\LapseController;
use App\Http\Controllers\Admin\Institution\LevelController;
use App\Http\Controllers\Admin\Institution\SectionController;
use App\Http\Controllers\Admin\Institution\CourseController;
use App\Http\Controllers\Admin\Institution\PensumController;
use App\Http\Controllers\Admin\Institution\LibraryController;

Route::resource('institutions', InstitutionController::class)->only([ 'index']);
Route::prefix('institutions')->group(function () {
    Route::resource('authorities', AuthorityController::class)->only([ 'index']);
    Route::resource('pescolars', PescolarController::class)->only([ 'index']);
    Route::resource('curricula', CurriculumController::class)->only([ 'index']);
    Route::resource('lapses', LapseController::class)->only([ 'index']);
    Route::resource('levels', LevelController::class)->only([ 'index']);
    Route::resource('sections', SectionController::class)->only([ 'index']);
    Route::resource('courses', CourseController::class)->only([ 'index']);
    Route::resource('pensums', PensumController::class)->only([ 'index']);
    Route::resource('libraries', LibraryController::class)->only([ 'index']);
});

