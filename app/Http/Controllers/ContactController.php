<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact.form');
    }

    public function submitContactForm(Request $request)
    {
        // Validate the request inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Ensure the variables are strings
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $message = $validatedData['message'];

        // Prepare the data array
        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ];

        // // Send the email
        // Mail::send('contact.email', $data, function ($message) use ($data) {
        //     $message->to('support@example.com')
        //             ->subject('Nouveau message de contact')
        //             ->from($data['email']);
        // });

        return redirect()->route('contact.form')->with('success', 'Votre message a été envoyé avec succès.');
    }
}