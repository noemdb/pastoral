<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Preinscription\EnrollmentController;

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

// Route::get('/enrollments', [EnrollmentController::class, 'index'])->name('enrollments.index');
// Route::post('/enrollments/store', [EnrollmentController::class, 'store'])->name('enrollments.store');

Route::resource('enrollments', EnrollmentController::class)->only([
    'index', 'store'
]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
