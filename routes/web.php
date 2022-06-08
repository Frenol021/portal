<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RegistrationController;

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
Route::get('/home',[UnitController::class,'home']);
Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');
Route::get('/enroll',[UnitController::class,'enroll']);