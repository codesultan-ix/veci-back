<?php

use App\Http\Controllers\AuthController;
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

 Route::middleware('auth:sanctum')->get('auth/user', [ AuthController::class,'test']);
 Route::post('logout', [ AuthController::class, 'logout']);
 Route::post('login', [ AuthController::class, 'login' ]);

Route::get('user', [AuthController::class,'test']);
