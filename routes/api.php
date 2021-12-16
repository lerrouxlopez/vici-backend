<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| No Validation 
|--------------------------------------------------------------------------
|
| No validation is required for this links
|
*/




/*
|--------------------------------------------------------------------------
| With Validation 
|--------------------------------------------------------------------------
|
| validation is required for this links
|
*/

// Route::post("", 'UsersController@token_check');

// update 
Route::group([
    'prefix' => 'challenge'
], function () {

    Route::post("add", 'ChallengesController@insert');
    Route::post("update/{id}", 'ChallengesController@update');


});