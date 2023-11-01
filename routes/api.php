<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiPendidikanController;

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

Route::group(['namespace' => 'Backend'], function(){
    Route::get('api_pendidikan',[ApiPendidikanController::class,'getAll']);
    Route::get('api_pendidikan/{id}',[ApiPendidikanController::class,'getPen']);
    Route::post('api_pendidikan',[ApiPendidikanController::class,'create']);
    Route::put('api_pendidikan/{id}',[ApiPendidikanController::class,'update']);
    Route::delete('api_pendidikan/{id}',[ApiPendidikanController::class,'delete']);
});
