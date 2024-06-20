<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $pageTitle;
    public function render()
    {
        $pageTitle = 'Nosotros';
        return view('livewire.about')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
