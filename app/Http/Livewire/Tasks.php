<?php

namespace App\Http\Livewire;

use App\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Tasks extends Component
{
    public Collection $tasks;

    public function mount(): void
    {
        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
