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
use App\Http\Controllers\Admin\Competitor\EnrollmentController as AdminEnrollmentController;
use App\Http\Controllers\Admin\Competitor\InscriptionController;
use App\Http\Controllers\Admin\Competitor\RepresentantController;
use App\Http\Controllers\Admin\Competitor\ConstanciesController;
use App\Http\Controllers\Admin\Competitor\GradesController;
use App\Http\Controllers\Admin\Competitor\WithdrawalController;
use App\Http\Controllers\Admin\Competitor\GradeFixController;
use App\Http\Controllers\Admin\Institution\LibraryController;
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

use App\Http\Controllers\Admin\Sender\MailerController;

use App\Http\Controllers\Admin\Survey\PollMainController;

use App\Http\Controllers\Admin\Robot\BmainController;
use App\Http\Controllers\Admin\Setup\ProfileController;
use App\Http\Controllers\Admin\Setup\RoleController;
use App\Http\Controllers\Admin\Setup\UserController;


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

Route::get('/enrollments', [EnrollmentController::class, 'index'])->name('enrollments');

Route::middleware( [ 'auth:sanctum',config('jetstream.auth_session'),'verified'])
->group(function () {

	Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    
    // Route::group(['middleware' => ['auth', 'permission']], function() {
    Route::group(['middleware' => ['auth']], function() {
            
        Route::prefix('admin')->group(function () {

            Route::prefix('setups')->group(function () {
                Route::resource('users', UserController::class)->only([ 'index']);
                Route::resource('roles', RoleController::class)->only([ 'index']);
                Route::resource('profiles', ProfileController::class)->only([ 'index']);
                Route::resource('Permission', PermissionController::class)->only([ 'index']);
            });

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

            Route::prefix('senders')->group(function () {
                Route::resource('mailers', MailerController::class)->only([ 'index']);
            });

            Route::prefix('surveys')->group(function () {
                Route::resource('pollmains', PollMainController::class)->only([ 'index']);
            }); 

            Route::prefix('robots')->group(function () {
                Route::resource('bmains', BmainController::class)->only([ 'index']);
            });

        });
    });

});
