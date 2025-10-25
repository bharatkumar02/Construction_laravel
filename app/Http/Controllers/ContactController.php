<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

        $adminEmail = env('ADMIN_EMAIL');
        try {
            $mailer = config('mail.default');
            if (in_array($mailer, ['log', 'array'])) {
                throw new \Exception('Mail is configured to use log driver, not actual sending.');
            }

            Mail::to($adminEmail)->send(new ContactFormMail($validatedData));
        } catch (Exception $e) {

            Log::error('Failed to send contact form email: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Sorry, we were unable to send your message. Please try again later.'
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
