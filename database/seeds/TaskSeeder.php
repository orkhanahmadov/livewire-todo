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
                'completed' => true
            ],
            [
                'name' => 'Showcase Laravel Livewire',
                'completed' => false
            ],
            [
                'name' => 'Create Livewire application',
                'completed' => false
            ],
        ])->each(fn ($task) => \App\Task::create($task));

    }
}
