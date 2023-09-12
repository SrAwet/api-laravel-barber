<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StylistController;
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

Route::get('/clients',[ClientController::class, 'index']);
Route::post('clients',[ClientController::class, 'store']);
Route::get('/clients/{id}',[ClientController::class, 'show']);
Route::put('/clients/{id}',[ClientController::class, 'update']);

Route::get('/drink',[DrinkController::class, 'index']);
Route::post('drink',[DrinkController::class, 'store']);
Route::get('/drink/{id}',[DrinkController::class, 'show']);
Route::put('/drink/{id}',[DrinkController::class, 'update']);

Route::get('/music',[MusicController::class, 'index']);
Route::post('music',[MusicController::class, 'store']);
Route::get('/music/{id}',[MusicController::class, 'show']);
Route::put('/music/{id}',[MusicController::class, 'update']);

Route::get('/branch',[BranchController::class, 'index']);
Route::post('/branch',[BranchController::class, 'store']);
Route::get('/branch/{id}',[BranchController::class, 'show']);
Route::put('/branch/{id}',[BranchController::class, 'update']);
Route::get('/branch/{id}/stylists', [BranchController::class, 'getStylistsByBranch']);

Route::get('/schedule',[ScheduleController::class, 'index']);
Route::post('/schedule',[ScheduleController::class, 'store']);
Route::get('/schedule/{id}',[ScheduleController::class, 'show']);
Route::put('/schedule/{id}',[ScheduleController::class, 'update']);

Route::get('/service',[ServiceController::class, 'index']);
Route::post('/service',[ServiceController::class, 'store']);
Route::get('/service/{id}',[ServiceController::class, 'show']);
Route::put('/service/{id}',[ServiceController::class, 'update']);

Route::get('/stylist',[StylistController::class, 'index']);
Route::post('/stylist',[StylistController::class, 'store']);
Route::get('/stylist/{id}',[StylistController::class, 'show']);
Route::put('/stylist/{id}',[StylistController::class, 'update']);
Route::get('/stylist/{id}/schedules', [StylistController::class, 'schedules']);

Route::get('/appointment',[AppointmentController::class, 'index']);
Route::post('/appointment',[AppointmentController::class, 'store']);
Route::get('/appointment/{id}',[AppointmentController::class, 'show']);
Route::put('/appointment/{id}',[AppointmentController::class, 'update']);