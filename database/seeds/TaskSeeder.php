<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'task' => 'Attend event',
                'completed' => true
            ],
            [
                'task' => 'Showcase Laravel Livewire',
                'completed' => false
            ],
            [
                'task' => 'Create Livewire application',
                'completed' => false
            ],
        ])->each(fn ($task) => \App\Task::create($task));

    }
}
