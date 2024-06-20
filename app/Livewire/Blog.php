<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public $pageTitle;
    public function render()
    {
        $pageTitle = 'Blog';
        return view('livewire.blog')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
