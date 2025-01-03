<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    // game
    Route::get('/games', [GameController::class, 'shows']);
    Route::post('/game/add', [GameController::class, 'store']);
    Route::post('/game/{id}/update', [GameController::class, 'update']);
    Route::delete('/game/{id}/delete', [GameController::class, 'delete']);
    Route::post('/search', [GameController::class, 'search']);

    // logout
    Route::post('/logout', [AuthController::class, 'logout']);
});