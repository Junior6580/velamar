<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact-form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('jsmedinah5873@gmail.com')->send(new ContactFormMail(
            $request->name,
            $request->email,
            $request->subject,
            $request->message
        ));

        session()->flash('message', '¡El formulario se envió correctamente!');
        return redirect()->back();
    }
}
