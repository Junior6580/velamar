<?php

namespace App\Livewire;

use Livewire\Component;

class Developers extends Component
{
    public $pageTitle;
    public function render()
    {
        $pageTitle = 'Desarrollador';
        return view('livewire.developers')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
