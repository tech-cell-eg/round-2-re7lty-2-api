<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trips\ShowTripController;
use App\Http\Controllers\Services\OurServiceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Show  all trpis
Route::get('/showtrips', [ShowTripController::class, 'index']);

//Show our services
Route::get('/showservices', [OurServiceController::class, 'index']);
