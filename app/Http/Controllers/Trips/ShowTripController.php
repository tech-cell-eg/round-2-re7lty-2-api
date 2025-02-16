<?php

namespace App\Http\Controllers\Trips;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;

class ShowTripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return response()->json($trips);
    }
}
