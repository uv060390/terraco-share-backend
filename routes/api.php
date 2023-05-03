<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\ContactUsController;


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
Route::get('/listings', [ListingsController::class, 'getAll']);
Route::get('/listings/{id}', [ListingsController::class, 'get']);


Route::get('/contactus', [ContactUsController::class, 'getAll']);
Route::post('/contactus', [ContactUsController::class, 'create']);




