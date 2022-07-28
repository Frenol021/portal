<?php
use App\Http\Controllers\MpesaController;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



 
Route::get('/user', [MpesaController::class, 'test'])->name('test');
Route::get('v1/access/token', [App\Http\Controllers\MpesaController::class, 'generateAccessToken']);
Route::get('payment', [App\Http\Controllers\MpesaController::class, 'customerMpesaSTKPush'])->name('lipa');
Route::get('validation', [App\Http\Controllers\MpesaController::class, 'mpesaValidation']);
Route::get('confirmation', [App\Http\Controllers\MpesaController::class, 'mpesaConfirmation']);
Route::get('register/url', [App\Http\Controllers\MpesaController::class, 'mpesaRegisterUrls']);
