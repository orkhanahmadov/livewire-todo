<?php

namespace App\Http\Livewire;

use App\Task;
use Illuminate\Support\Collection;
use Livewire\Component;

class TaskList extends Component
{
    public Collection $incompleteTasks;
    public Collection $completeTasks;

    protected $listeners = ['updateList' => 'fetchTasks'];

    public function mount(): void
    {
        $this->fetchTasks();
    }

    public function fetchTasks(): void
    {
        $tasks = Task::orderBy('completed_at')->orderByDesc('id')->get();

        $this->incompleteTasks = $tasks->filter(fn (Task $task) => is_null($task->completed_at));
        $this->completeTasks = $tasks->filter(fn (Task $task) => !is_null($task->completed_at));
    }

    public function markAsComplete(int $taskId): void
    {
        $this->mark($taskId, true);
    }

    public function markAsIncomplete(int $taskId): void
    {
        $this->mark($taskId, false);
    }

    private function mark(int $taskId, bool $completed): void
    {
        $task = Task::findOrFail($taskId);

        $task->completed_at = $completed ? now() : null;
        $task->save();

        $this->fetchTasks();
    }

    public function delete(int $taskId): void
    {
        Task::findOrFail($taskId)->delete();

        $this->fetchTasks();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
