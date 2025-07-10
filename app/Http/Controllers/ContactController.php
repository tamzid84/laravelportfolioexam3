<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        // Log the input
        Log::info('New contact form submitted Successfully:', $validated);

        // Store submitted data in session
        session()->flash('success', 'Your message has been sent successfully!');

        return redirect()->route('contact.confirmation')->with('data', $contact);
    }

    public function showConfirmation()
    {
        $data = session('data');
        return view('contact-confirmation', compact('data'));
    }
}


