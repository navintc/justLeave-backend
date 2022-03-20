<?php

use App\Http\Controllers\WebUserController;
use App\Http\Controllers\LeavesController;
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


//me dekama ekai
//Route::get('/products', 'ProductController@index');
//Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::apiResource('/leaves', '\App\Http\Controllers\LeavesController');

Route::apiResource('/webuser', '\App\Http\Controllers\WebUserController');

Route::post('/login', [WebUserController::class,'login']);

Route::patch('/leaves', [LeavesController::class,'updateLeaveStatus']);

Route::post('/addleave', [LeavesController::class,'addLeave']);
