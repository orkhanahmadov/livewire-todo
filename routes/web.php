<?php

use App\Http\Controllers\CompletedTasksController;
use App\Http\Controllers\LivewireController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

Route::get('/', LivewireController::class);

Route::get('/vue', VueController::class);
Route::apiResource('/tasks', TasksController::class)->only('index', 'store', 'destroy');
Route::post('/tasks/{task}/completed', [CompletedTasksController::class, 'store']);
Route::delete('/tasks/{task}/completed', [CompletedTasksController::class, 'destroy']);
