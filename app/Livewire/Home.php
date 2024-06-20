<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $pageTitle;

    public function render()
    {
        $pageTitle = 'Inicio';
        return view('livewire.home')->extends('layouts.master', ['pageTitle'=> $pageTitle])
            ->section('content');
    }

}
