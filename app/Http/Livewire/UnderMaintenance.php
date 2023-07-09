<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UnderMaintenance extends Component
{
    public function render()
    {
        return view('livewire.under-maintenance')
        ->layout('layouts.custom-app3');
    }
}
