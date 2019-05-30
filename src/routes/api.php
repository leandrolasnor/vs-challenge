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

Route::group([
    'middleware' => 'auth:api','prefix' => '1.0'
], function ($router) {
    Route::post('logout', 'AuthenticateController@logout');
    Route::post('refresh', 'AuthenticateController@refresh');
    Route::post('me', 'AuthenticateController@me');
    Route::get('/products/search', 'ProductsController@search');
});

Route::group([
    'prefix' => '1.0'
], function () {
    Route::get('/', function () {
        return response()->json(
            ['response' => [
                'message' => 'VeuS API',
                'status' => 'On',
                'othersVersions' => array('/1.0')
            ]],
            200
        );
    });
    Route::post('login', 'AuthenticateController@login');
});
