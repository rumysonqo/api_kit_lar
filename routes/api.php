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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/mostrar_todo','App\Http\Controllers\Ctrl_kit@mostrar_todo');
Route::get('/buscar_todo/{cad}','App\Http\Controllers\Ctrl_kit@buscar_todo');
Route::get('/programas','App\Http\Controllers\Ctrl_kit@programas');
Route::get('/kit_por_programa/{prg}','App\Http\Controllers\Ctrl_kit@kit_por_programa');
Route::get('/kit_por_programa_cadena/{prg}/{cad}','App\Http\Controllers\Ctrl_kit@kit_por_programa_cadena');
Route::get('/prog_metas/{prg}','App\Http\Controllers\Ctrl_kit@prog_metas');
Route::get('/kit_por_programa_meta/{prg}/{met}','App\Http\Controllers\Ctrl_kit@kit_por_programa_meta');
