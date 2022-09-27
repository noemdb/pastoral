<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Preinscription\EnrollmentController;
use App\Http\Controllers\Institution\PastoralController;
use App\Http\Controllers\Admin\InstitutionController;
use App\Http\Controllers\Admin\Institution\AuthorityController;
use App\Http\Controllers\Admin\Institution\PescolarController;
use App\Http\Controllers\Admin\Institution\CurriculumController;
use App\Http\Controllers\Admin\Institution\LapseController;
use App\Http\Controllers\Admin\Institution\LevelController;
use App\Http\Controllers\Admin\Institution\SectionController;
use App\Http\Controllers\Admin\Institution\CourseController;
use App\Http\Controllers\Admin\Institution\PensumController;

use App\Http\Controllers\Admin\Competitor\EstudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('enrollments', EnrollmentController::class)->only([
    'index', 'store'
]);

Route::middleware( [ 'auth:sanctum',config('jetstream.auth_session'),'verified'])
->group(function () {

	Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::prefix('admin')->group(function () {
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
        });

        Route::prefix('competitors')->group(function () {
            Route::resource('estudiants', EstudiantController::class)->only([ 'index']);
        });
    });

});
