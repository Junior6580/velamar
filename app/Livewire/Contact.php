<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $pageTitle;
    public function render()
    {
        $pageTitle = 'Contacto';
        return view('livewire.contact')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
