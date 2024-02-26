<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
        return view('pages/web/contact');
    }

    /**
     * Process the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact record
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect back to the contact form with a success message
        return redirect()->route('home')->with('success', 'Your message has been submitted successfully!');
    }
}
