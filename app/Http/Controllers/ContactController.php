<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // TODO: send email or store $data as needed
        // Example: Mail::to(config('mail.from.address'))->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Thanks — your message was sent.');
    }
}
