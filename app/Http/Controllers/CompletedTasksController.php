<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Response;

class CompletedTasksController
{
    public function store(Task $task): Response
    {
        $task->completed_at = now();
        $task->save();

        return response()->noContent(Response::HTTP_CREATED);
    }

    public function destroy(Task $task): Response
    {
        $task->completed_at = null;
        $task->save();

        return response()->noContent(Response::HTTP_ACCEPTED);
    }
}
