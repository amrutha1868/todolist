<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Route::group(["prefix"=>"todo"],function(){
    Route::get("/get/{id}",[TodosController::class,"get"]);
    Route::get("/gets",[TodosController::class,"gets"]);
    Route::post("/store",[TodosController::class,"store"]);
    Route::put("/update/{id}",[TodosController::class,"update"]);
    Route::delete("/delete/{id}",[TodosController::class,"delete"]);
});
