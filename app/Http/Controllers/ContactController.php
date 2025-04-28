<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Store in database
        $message = Message::create($validated);

        // Optionally send email notification
        // Mail::to('your-email@example.com')->send(new ContactMessage($message));

        return back()->with('success', 'Message sent successfully! I will respond to you soon.');
    }
}
