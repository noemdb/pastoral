<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Preinscription\EnrollmentController;
use App\Http\Controllers\Institution\PastoralController;
use App\Http\Controllers\Admin\InstitutionController;
use App\Http\Controllers\Admin\Institution\AuthorityController;

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
		});
	});   

});
