<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;


class SubscriptionController extends Controller
{

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);

        $subscriber = Subscriber::create([
            'email' => $request->input('email'),
        ]);
        // Envoyer l'e-mail de confirmation
        Mail::to($request->input('email'))->send(new SubscriptionConfirmation($request->input('email')));


        // Stockez un message dans la session
        return redirect()->back()->with('success', 'Vous êtes maintenant abonné !');
    }

}
