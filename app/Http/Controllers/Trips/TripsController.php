<?php

namespace App\Http\Controllers\Trips;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Traits\ResponseApiTrait;

class TripsController extends Controller
{
    use ResponseApiTrait;

    public function index()
    {
        $trips = Trip::paginate(10);
        return $this->successResponse('Trips fetched successfully', $trips);
    }
}
