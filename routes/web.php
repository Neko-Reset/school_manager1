<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

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

Route::resource('teachers', TeacherController::class);

// Route::prefix('teachers') // 頭にteacherをつける
// ->controller(TeacherController::class) // コントローラ指定(laravel9から)
// ->name('teachers.') // グループ化
// ->group(function(){
//     Route::get('/', 'index')->name('index'); // 名前つきルート
//     Route::get('/create', 'create')->name('create');
//     Route::post('/', 'store')->name('store');
//     Route::get('/{id}', 'show')->name('show');
//     Route::get('/{id}/edit', 'edit')->name('edit');
//     Route::post('/{id}', 'update')->name('update');
//     Route::post('/{id}/destroy', 'destroy')->name('destroy');
// });
