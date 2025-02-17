<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trips\TripsController;
use App\Http\Controllers\Services\OurServiceController;
use App\Http\Controllers\Plans\PlansController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Show  all trpis
Route::get('/trips', [TripsController::class, 'index']);

//Show our services
Route::get('/showservices', [OurServiceController::class, 'index']);

//Show plans
Route::get('/plans', [PlansController::class, 'index']);

