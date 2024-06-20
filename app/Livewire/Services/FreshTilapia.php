<?php

namespace App\Livewire\Services;

use Livewire\Component;

class FreshTilapia extends Component
{
    public $pageTitle = 'Tilapia Fresca';
    public function render()
    {
        $pageTitle = 'Tilapia Fresca';
        return view('livewire.services.fresh-tilapia')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
