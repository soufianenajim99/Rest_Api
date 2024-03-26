<?php

use App\Http\Controllers\Api\AnnonceController;
use App\Http\Controllers\Api\OrganisateurController;
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


Route::controller(OrganisateurController::class)->group(function () {
    Route::get('/orgas','index');
    Route::get('/orgas/{id}','show');
});
Route::controller(AnnonceController::class)->group(function () {
    Route::get('/anno','index');
    Route::get('/anno/{id}','show');
});


Route::get('/hello', function () {
    return "Hello World!";
  });