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
Route::post('connexion', 'GestionConstruction@Login');
Route::post('inscription', 'GestionConstruction@Register');
Route::get('quincaillerie', 'GestionConstruction@index');
Route::get('nomQuincaillerie', 'GestionConstruction@nomQuincaillerie');
Route::post('/save', 'GestionConstruction@store');
