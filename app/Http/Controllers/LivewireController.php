<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LivewireController
{
    public function __invoke(): View
    {
        return view('livewire');
    }
}
