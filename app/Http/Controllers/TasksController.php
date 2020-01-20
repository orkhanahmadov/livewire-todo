<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Task;
use Illuminate\Http\Response;

class TasksController
{
    public function store(StoreTaskRequest $request): Response
    {
        Task::create(['name' => $request->input('task')]);

        return response()->noContent(Response::HTTP_CREATED);
    }
}
