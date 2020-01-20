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
        $name = trim($this->task);

        if (strlen($name) === 0) {
            return;
        }

        Task::create(compact('name'));
        $this->task = '';

        $this->emit('updateList');
    }

    public function render(): View
    {
        return view('livewire.create-task');
    }
}
