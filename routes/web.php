<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RequestFormController;

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
});

Route::get('/admin', function () {
    return view('admin.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('requestforms', RequestFormController::class);
Route::post('requestforms_create', [App\Http\Controllers\RequestFormController::class, 'create_booking'])->name('requestforms_create');
Route::post('requestforms_finish', [App\Http\Controllers\RequestFormController::class, 'payment'])->name('payment');

require __DIR__.'/auth.php';
