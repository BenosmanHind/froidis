<?php

namespace App\Http\Controllers;

use App\Mail\Devis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DevisController extends Controller
{
    //
    public function store(Request $request){
        $validated = $request->validate([
           'name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255'],
           'phone' => ['required', 'string', 'max:255'],
           'address' => ['required', 'string', 'max:255'],

        ],
        [
        'name.required' => 'ce champ est obligatoire.',
        'email.required' => 'ce champ est obligatoire.',
        'email.email' => 'e-mail doit être une adresse e-mail valide.',
        'phone.required' => 'ce champ est obligatoire.',
        'address.required' => 'ce champ est obligatoire.',
        ]
    );
        Mail::to('contact@froidis.com')->send(new Devis($request));
        return view('success-mail');
    }
}
