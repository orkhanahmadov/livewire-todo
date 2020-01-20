<?php

use App\Http\Controllers\LivewireController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

Route::get('/', LivewireController::class)->name('livewire');
Route::get('/vue', VueController::class)->name('vue');

Route::get('/tasks', [TasksController::class, 'index']);
Route::post('/tasks', [TasksController::class, 'store']);
