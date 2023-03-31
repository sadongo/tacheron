<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $demo = [
            'title' => 'Mail Le tacheron',
            'body' => $request->body,
            'sender' => $request->name,
            'sender_email' => $request->email,
            'sender_subject' => $request->subject
        ];

        Mail::to($request->entreprise_email ?? "soniasadongo22@gmail.com")->send(new DemoEmail(
            $demo
        ));

        return back()->with('message', "Nous avons bien recu votre message. Merci de vore avis.");
    }
}
