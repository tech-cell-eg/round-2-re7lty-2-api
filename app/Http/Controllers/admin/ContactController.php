<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplay;
class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = ContactRequest::latest()->paginate(10);
        return view('admin.messages.show', compact('messages'));
    }

    // public function reply(Request $request, $id){
    //     $request->validate([
    //         'replied' => 'required|string|max:1000',
    //     ]);

    //     $contactRequest = ContactRequest::findOrFail($id);
    //     $contactRequest->update(['replied' => $request->reply_message]);

    //     Mail::send([], [], function ($message) {
    //         $message->to('abanoubtalaat555@gmail.com')
    //                 ->subject('Test Email')
    //                 ->setBody('<h1>Hello, this is a test email!</h1>', 'text/html');
    //     });
    //     // Mail::send($request->reply_message, function ($message) use ($contactRequest) {
    //     //     $message->to($contactRequest->email)
    //     //             ->subject('Reply to your contact request');
    //     // });

    //     return redirect()->back()->with('success', 'Reply sent successfully.');
    // }
    public function reply(Request $request, $id)
    {
        $contact = ContactRequest::findOrFail($id);

        $validated = $request->validate([
            'replied' => 'required|string',
        ]);

        // Mark as replied with the message content
        $contact->markAsReplied($validated['replied']);

        // Send email
        // Mail::to($contact->email)->send(new ContactReplay($validated['replied']));
        Mail::to($contact->email)->send(new ContactReplay($contact));

        return back()->with('success', 'تم الرد على الرسالة وإرسال البريد الإلكتروني بنجاح.');
    }
    // Public function reply(Request $request, $id)
    // {
    //     $contact = ContactRequest::findOrFail($id);

    //     $validated = $request->validate([
    //         'replied' => 'required|string',
    //     ]);

    //     $contact->markAsReplied($validated['replied']);

    //     Mail::to($contact->email)->send(new ContactReplay($contact));

    //     return back()->with('success', 'تم الرد على الرسالة وإرسال البريد الإلكتروني بنجاح.');
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = ContactRequest::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
