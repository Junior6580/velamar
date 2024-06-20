<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('jsmedinah5873@gmail.com')->send(new ContactFormMail($this->name, $this->email, $this->subject, $this->message));

        session()->flash('message', '¡El formulario se envió correctamente!');
        $this->reset();
    }
}
