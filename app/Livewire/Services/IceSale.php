<?php

namespace App\Livewire\Services;

use Livewire\Component;

class IceSale extends Component
{
    public $pageTitle = 'Hielo';
    public function render()
    {
        $pageTitle = 'Hielo';
        return view('livewire.services.ice-sale')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
