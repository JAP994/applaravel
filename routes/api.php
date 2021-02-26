<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\GrupoController;
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
//USUARIOS
Route::get('users',[UserController::class, 'index']);
Route::post("users",[UserController::class,'store']);
//NIVELES
Route::get('levels',[LevelController::class, 'index']);
Route::post("levels",[LevelController::class,'store']);
//GRUPOS
Route::get('grupos',[GrupoController::class, 'index']);
Route::post("grupos-create",[GrupoController::class,'store']);