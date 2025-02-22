<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequestForm;
use App\Models\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(ContactRequestForm $request)
    {

        $contactRequest = ContactRequest::create($request->validated());

        Mail::raw('You will be contacted soon', function ($message) use ($contactRequest) {
            $message->to($contactRequest->email)
                    ->subject('Thank you for contacting us');
        });

        return response()->json([
            'message' => 'Your contact request has been submitted successfully.',
            'data' => $contactRequest
        ], 201);
    }
}
