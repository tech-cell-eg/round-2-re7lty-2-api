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
        // The FormRequest will automatically validate the data
        $validated = $request->validated();

        // Store the contact request in the database
        $contactRequest = ContactRequest::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
        ]);

        // Return a response indicating success
        return response()->json([
            'message' => 'Your contact request has been submitted successfully.',
            'data' => $contactRequest
        ], 201);
    }
}
