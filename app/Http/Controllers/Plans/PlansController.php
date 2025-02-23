<?php

namespace App\Http\Controllers\Plans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ResponseApiTrait;

use App\Models\Plan;

class PlansController extends Controller
{
    use ResponseApiTrait;

    public function index()
    {

        $plans = Plan::paginate(10);
        return $this->successResponse('Testimonials fetched successfully', $plans);

    }
    
}

