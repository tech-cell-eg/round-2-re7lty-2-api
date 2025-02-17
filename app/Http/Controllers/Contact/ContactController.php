<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequestForm;
use App\Models\ContactRequest;

class ContactController extends Controller
{
    public function submitForm(ContactRequestForm $request)
    {
    
        $contactRequest = ContactRequest::create($request->validated());

        return response()->json([
            'message' => 'Your contact request has been submitted successfully.',
            'data' => $contactRequest
        ], 201);
    }
}
