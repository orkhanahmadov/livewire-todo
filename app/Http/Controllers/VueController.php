<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class VueController
{
    public function __invoke(): View
    {
        return view('vue');
    }
}
