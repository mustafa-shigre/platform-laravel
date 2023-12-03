<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get_all_users',[UserController::class,'get_all_users']);


Route::group(['middleware' => ['auth:sanctum']], function () {
   Route::post('/users',[UserController::class,'index']);
   Route::put('/users/{user}/edit',[UserController::class,'edit']);
   Route::delete('/users/{user}',[UserController::class,'destroy']);
});
