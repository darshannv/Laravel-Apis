<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Santum Api
Route::post("login", [UserController::class, 'index']);


// Passport Api 
Route::post("register", [ApiController::class, 'register']);          

Route::post("loginPage", [ApiController::class, 'loginPage']);  

Route::middleware('auth:api')->get('/usersDetails', [ApiController::class, 'getUserList']);