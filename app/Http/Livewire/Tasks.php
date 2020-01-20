<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tasks extends Component
{
    public array $tasks = [];

    public function mount(): void
    {
        $this->tasks = [
            'Attend event',
            'Showcase Laravel Livewire',
            'Create Livewire application',
        ];
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
