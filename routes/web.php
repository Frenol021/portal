<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\Email;

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


Route::get('logout', function () {
   Auth::forget('user');

    $user=Auth::user()->id;
     return redirect('login');
 });

Route::post('/login',[UserController::class, 'login']);


Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');
//Route::get('/enroll',[UnitController::class,'enroll']);
Route::get('add_to_curriculum/{id}',[App\Http\Controllers\HomeController::class,'addToCurriculum'])->name('add_to_curriculum');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('enroll', [App\Http\Controllers\HomeController::class, 'enroll'])->name('enroll');

Route::get('curriculum',[App\Http\Controllers\HomeController::class,'curriculum'])->name('curriculum');
Route::get('removeCurriculum/{id}',[App\Http\Controllers\HomeController::class,'removeCurriculum'])->name('removeCurriculum');
Route::get('report',[App\Http\Controllers\ReportController::class,'report'])->name('report');
Route::get('/downloadReport',[App\Http\Controllers\ReportController::class,'downloadReport']);
Route::get('checkout',[App\Http\Controllers\HomeController::class,'checkout']);
Route::get('graphic',[App\Http\Controllers\ProgramController::class,'program']);
Route::get('mobile',[App\Http\Controllers\ProgramController::class,'mobile']);
Route::get('security',[App\Http\Controllers\ProgramController::class,'cyber']);
Route::get('design',[App\Http\Controllers\ProgramController::class,'design']);
Route::get('data',[App\Http\Controllers\ProgramController::class,'data']);
Route::get('software',[App\Http\Controllers\ProgramController::class,'software']);
Route::get('/designReport',[App\Http\Controllers\ProgramController::class,'designReport']);
Route::get('/mobileNotes',[App\Http\Controllers\ProgramController::class,'mobileNotes']);
Route::get('/dataNotes',[App\Http\Controllers\ProgramController::class,'dataNotes']);
Route::get('/cyberNotes',[App\Http\Controllers\ProgramController::class,'cyberNotes']);
Route::get('/graphicNotes',[App\Http\Controllers\ProgramController::class,'graphicNotes']);
Route::get('/softwareNotes',[App\Http\Controllers\ProgramController::class,'softwareNotes']);

