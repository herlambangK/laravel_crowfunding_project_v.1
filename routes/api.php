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

// Route::post('register','Auth\RegisterController');
// Route::post('regenerate-otp','Auth\RegenerateOtpController');
// Route::post('verifikasi','Auth\VerificationController');
// Route::post('update-password','Auth\UpdatePasswordController');

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

Route::namespace('Auth')->group(function(){
    Route::post('register','RegisterController');
    Route::post('regenerate-otp','RegenerateOtpController');
    Route::post('verifikasi','VerificationController');
    Route::post('update-password','UpdatePasswordController');

    Route::post('login','LoginController');
     Route::post('logout', 'LogoutController')->middleware('auth:api');
     Route::post('check-token', 'CheckTokenController')->middleware('auth:api');

     Route::get('auth/social/{provider}', 'SocialiteController@redirectToProvider');
     Route::get('auth/social/{provider}/callback', 'SocialiteController@handleProviderCallback');
});


Route::group([
    'middleware' => ['api','email_verified','auth:api'],
    ], function () {
        Route::get('profile/show', 'ProfileController@show');
        Route::post('profile/update', 'ProfileController@update');
    });

    
// Route::group(['middleware' => ['api', 'email_verified', 'auth:api'],], function () {
//     Route::get('profile/show', 'ProfileController@show');
//     Route::post('profile/update', 'ProfileController@show');
// });

Route::group([
    'middleware' =>'api',
    'prefix' => 'campaign',
], function () {
    Route::get('random/{count}', 'CampaignController@random');
    Route::post('store', 'CampaignController@store');
    Route::get('/', 'CampaignController@index');
    Route::get('/{id}', 'CampaignController@detail');
    Route::get('search/{keyword}', 'CampaignController@search');
   
});

Route::group([
    'middleware' =>'api',
    'prefix' => 'blog',
], function () {
    Route::get('random/{count}', 'BlogController@random');
    Route::post('store', 'BlogController@store');
});