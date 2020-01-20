<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $dates = [
        'completed_at',
    ];

    public function getFormattedCompletedAtAttribute(): ?string
    {
        return optional($this->completed_at)->timezone('Europe/Berlin')->format('d.m.Y H:i');
    }
}
