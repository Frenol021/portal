<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;

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

Route::get('login', function () {
    return view('login');
});

Route::post('/login',[UserController::class, 'login']);

Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');
Route::get('/enroll',[UnitController::class,'enroll']);
Route::get('add_to_curriculum/{id}',[App\Http\Controllers\HomeController::class,'addToCurriculum'])->name('add_to_curriculum');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/enroll', [App\Http\Controllers\HomeController::class, 'enroll'])->name('enroll');

Route::get('curriculum',[App\Http\Controllers\HomeController::class,'curriculum'])->name('curriculum');
