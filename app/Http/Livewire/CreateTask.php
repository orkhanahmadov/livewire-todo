<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateTask extends Component
{
    public string $task = '';

    public function create()
    {

    }

    public function render()
    {
        return view('livewire.create-task');
    }
}
