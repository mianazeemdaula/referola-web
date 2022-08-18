<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SellerController;
use App\Http\Controllers\Api\SellerUserController;
use App\Http\Controllers\Api\CampainController;
use App\Models\SellerProfile;
use App\Models\User;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('test/{id}', function ($id) {
    $data = User::find($id)->sellers;
    return response()->json($data);
});



Route::middleware('auth:sanctum')->group(function () {

    Route::resource('seller', SellerController::class);
    Route::post('seller-user-register', [SellerUserController::class, 'register']);
    Route::resource('seller-user', SellerUserController::class);
    Route::resource('campain', CampainController::class);
});
