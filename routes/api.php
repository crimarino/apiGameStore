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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('game', 'Game\GameController@game');
Route::get('game/{id}', 'Game\GameController@gameById');
Route::post('game', 'Game\GameController@gameSave');
Route::put('game/{game}', 'Game\GameController@gameUpdate');
Route::delete('game/{game}', 'Game\GameController@gameDelete');