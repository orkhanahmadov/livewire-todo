<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Tasks extends Component
{
    public function render(): View
    {
        return view('livewire.tasks');
    }
}
