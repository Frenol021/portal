<?php
use App\Http\Controllers\MpesaController;
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



Route::post('v1/access/token', [App\Http\Controllers\MpesaController::class, 'generateAccessToken']);
Route::post('v1/hlab/stk/push', [App\Http\Controllers\MpesaController::class, 'customerMpesaSTKPush'])->name('lipa');
Route::post('v1/hlab/validation', [App\Http\Controllers\MpesaController::class, 'mpesaValidation']);
Route::post('v1/hlab/transaction/confirmation', [App\Http\Controllers\MpesaController::class, 'mpesaConfirmation']);
Route::post('v1/hlab/register/url', [App\Http\Controllers\MpesaController::class, 'mpesaRegisterUrls']);