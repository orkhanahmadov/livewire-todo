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
                'name' => 'Attend event',
                'completed_at' => now()
            ],
            [
                'name' => 'Showcase Laravel Livewire'
            ],
            [
                'name' => 'Create Livewire application'
            ],
        ])->each(fn ($task) => \App\Task::create($task));

    }
}
