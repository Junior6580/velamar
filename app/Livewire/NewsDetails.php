<?php

namespace App\Livewire;

use Livewire\Component;

class NewsDetails extends Component
{
    public $pageTitle;
    public function render()
    {
        $pageTitle = 'Detalles de noticia';
        return view('livewire.news-details')->extends('layouts.master', ['pageTitle'=> $pageTitle])
        ->section('content');
    }
}
