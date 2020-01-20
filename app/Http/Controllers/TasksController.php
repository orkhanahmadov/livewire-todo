<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class TasksController
{
    public function index(): JsonResponse
    {
        $tasks = Task::orderBy('completed_at')->orderByDesc('id')->get();

        return response()->json([
            'incompleteTasks' => $tasks->filter(fn (Task $task) => is_null($task->completed_at)),
            'completeTasks' => $tasks->filter(fn (Task $task) => !is_null($task->completed_at)),
        ]);
    }

    public function store(StoreTaskRequest $request): Response
    {
        Task::create(['name' => $request->input('task')]);

        return response()->noContent(Response::HTTP_CREATED);
    }
}
