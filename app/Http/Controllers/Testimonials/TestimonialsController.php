<?php

namespace App\Http\Controllers\Testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ResponseApiTrait;
use App\Models\Testimonial;

class TestimonialsController extends Controller
{
    use ResponseApiTrait;
    public function index()
    {
        $testimonials = Testimonial::paginate(10);
        return $this->successResponse('Testimonials fetched successfully', $testimonials);
    }
}
