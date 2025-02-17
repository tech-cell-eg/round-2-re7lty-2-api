<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurService;

class OurServiceController extends Controller
{
    public function index()
    {
        $services = OurService::all();

        return response()->json([
            'status' => true,
            'message' => 'All services retrieved successfully',
            'data' => $services
        ], 200);
    }
}
