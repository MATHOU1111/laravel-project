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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Logique pour traiter le formulaire, comme envoyer un email
        $data = $request->only('name', 'email', 'message');
        Mail::send('contact.email', $data, function ($message) use ($data) {
            $message->to('support@example.com')
                    ->subject('Nouveau message de contact');
        });

        return redirect()->route('contact.form')->with('success', 'Votre message a été envoyé avec succès.');
    }
}
