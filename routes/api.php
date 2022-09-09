<?php
use App\Http\Controllers\TradesController;
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
Route::get('/trades', [TradesController::class, 'index']);
// Route::get('/trades/{Deal}',[TradesController::class, 'show']);
Route::post('/trades', [TradesController::class, 'store']);
Route::put('/trades/{Deal}',[TradesController::class,'update']);
Route::delete('/trades/{Deal}',[TradesController::class, 'destroy']);

// Route::resource('trades', TradesController::class);


Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/trades/{Deal}',[TradesController::class, 'show']);
});