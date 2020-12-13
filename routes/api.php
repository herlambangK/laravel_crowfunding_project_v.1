<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register','Auth\RegisterController');
Route::post('regenerate-otp','Auth\RegenerateOtpController');
Route::post('verifikasi','Auth\VerificationController');
Route::post('update-password','Auth\UpdatePasswordController');
// Route::post('login','Auth\LoginController');
// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'Auth',
//     'namespace' => 'auth'

// ], function () {
//     Route::post('register','RegisterController');
// });

// Route::namespace('auth'->group(function(){
//     Route::prefix('Auth')->group(function(){
//         Route::post('register','Auth\RegisterController');
// // Route::post('regenerate-otp','Auth\RegenerateOtpController');
//     });
// }));