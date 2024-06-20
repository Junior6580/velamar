<?php

namespace App\Livewire;

use Livewire\Component;

class Products extends Component
{
    public $pageTitle;
    public function render()
    {
        $pageTitle = 'Productos';
        return view('livewire.products')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
