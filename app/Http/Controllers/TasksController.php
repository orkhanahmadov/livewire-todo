<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TasksController
{
    public function store(): View
    {
        return view('vue');
    }
}
