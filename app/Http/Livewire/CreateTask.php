<?php

namespace App\Http\Livewire;

use App\Task;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateTask extends Component
{
    public string $task = '';

    public function store(): void
    {
        $this->validate([
            'task' => 'required|string|max:255'
        ]);

        Task::create(['name' => $this->task]);
        $this->task = '';

        $this->emit('updateList');
    }

    public function render(): View
    {
        return view('livewire.create-task');
    }
}
