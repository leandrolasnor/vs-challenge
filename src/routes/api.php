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
    'middleware' => 'auth:api', 'prefix' => '1.0', 'name' => 'api.v1.'
], function ($router) {
    Route::post('logout', 'AuthenticateController@logout')->name('api.version1.0.LOGOUT');
    Route::post('refresh', 'AuthenticateController@refresh')->name('api.version1.0.refreshToken');
    Route::post('me', 'AuthenticateController@me')->name('api.version1.0.showUserLogged');
    Route::get('/products/search', 'ProductsController@search')->name('api.version1.0.searchProducts');
});

Route::group([
    'prefix' => '1.0', 'name' => 'api.v1.'
], function () {
    Route::get('/', function () {
        return response()->json(
            ['response' => [
                'message' => 'VeuS API',
                'status' => 'On',
                'othersVersions' => ['/1.0']
            ]],
            200
        );
    })->name('api.version.1.0.STATUS');
    Route::post('login', 'AuthenticateController@login')->name('api.version1.0.LOGIN');
});
