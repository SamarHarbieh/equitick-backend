<?php
use App\Http\Controllers\TradesController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Public routes
    // Register route
Route::post('/register', [AuthController::class, 'register']);
    // Login route
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function(){
    // Trades routes
    Route::get('/trades', [TradesController::class, 'index']);
    Route::get('/trades/{Deal}',[TradesController::class, 'show']);
    Route::post('/trades', [TradesController::class, 'store']);
    Route::put('/trades/{Deal}',[TradesController::class,'update']);
    Route::delete('/trades/{Deal}',[TradesController::class, 'destroy']);

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);
});