<?php

namespace App\Http\Livewire;

use App\Task;
use Livewire\Component;

class CreateTask extends Component
{
    public string $task = '';

    public function store()
    {
        Task::create(['name' => $this->task]);
        $this->task = '';

        $this->emit('updateList');
    }

    public function render()
    {
        return view('livewire.create-task');
    }
}
