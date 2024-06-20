<?php

namespace App\Livewire\Services;

use Livewire\Component;

class FrozenTilapia extends Component
{
    public $pageTitle = 'Congelado de Tilapia';
    public function render()
    {
        $pageTitle = 'Congelado de Tilapia';
        return view('livewire.services.frozen-tilapia')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
