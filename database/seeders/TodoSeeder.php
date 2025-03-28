<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\TodoTask;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::all()->each(function ($user) {
            $todos = Todo::factory()->count(10)->make();
            
            $user->todos()->saveMany($todos)->each(function ($todo) {
                $tasks = TodoTask::factory()->count(10)->make();
                
                $todo->tasks()->saveMany($tasks);
            });
        });
    }
}
