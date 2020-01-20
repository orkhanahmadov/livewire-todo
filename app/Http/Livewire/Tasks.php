<?php

namespace App\Http\Livewire;

use App\Task;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Tasks extends Component
{
    public Collection $tasks;

    protected $listeners = ['updateList' => 'fetchTasks'];

    public function mount(): void
    {
        $this->fetchTasks();
    }

    public function fetchTasks()
    {
        $this->tasks = Task::all();
    }

    public function toggleComplete(int $taskId)
    {
        $task = Task::find($taskId);

        $task->completed = !$task->completed;
        $task->save();
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
