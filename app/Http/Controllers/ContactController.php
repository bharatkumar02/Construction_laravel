<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:255',
            'message'    => 'required|string',
        ]);

        // Send email
        $adminEmail = 'kumarbharat9416@gmail.com';
        Mail::to($adminEmail)->send(new ContactFormMail($validatedData));

        // Return JSON response for AJAX
        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
