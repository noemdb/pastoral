<?php
use App\Http\Controllers\Admin\Professorate\TeacherController;
use App\Http\Controllers\Admin\Professorate\PevaluationController;
use App\Http\Controllers\Admin\Professorate\TopicController;
use App\Http\Controllers\Admin\Professorate\LessonController;
use App\Http\Controllers\Admin\Professorate\ExcerciseController;
use App\Http\Controllers\Admin\Professorate\ResolutionController;
use App\Http\Controllers\Admin\Professorate\EvaluationController;
use App\Http\Controllers\Admin\Professorate\PublicationController;
use App\Http\Controllers\Admin\Professorate\DocumentController;
use App\Http\Controllers\Admin\Professorate\TableclassController;

Route::prefix('professorate')->group(function () {
    Route::resource('teachers', TeacherController::class)->only([ 'index']);
    Route::resource('pevaluations', PevaluationController::class)->only([ 'index']);
    Route::resource('topics', TopicController::class)->only([ 'index']);
    Route::resource('evaluations', EvaluationController::class)->only([ 'index']);
    Route::resource('excercises', ExcerciseController::class)->only([ 'index']);
    Route::resource('resolutions', ResolutionController::class)->only([ 'index']);
    Route::resource('lessons', LessonController::class)->only([ 'index']);
    Route::resource('publications', PublicationController::class)->only([ 'index']);
    Route::resource('documents', DocumentController::class)->only([ 'index']);
    Route::resource('tableclass', TableclassController::class)->only([ 'index']);
});