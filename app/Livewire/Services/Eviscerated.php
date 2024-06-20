<?php

namespace App\Livewire\Services;

use Livewire\Component;

class Eviscerated extends Component
{
    public $pageTitle = 'Eviscerado';

    public function render()
    {
        $pageTitle = 'Eviscerado';
        return view('livewire.services.eviscerated')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
