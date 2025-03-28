<?php

namespace Database\Factories;

use App\Models\TodoTask;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TodoTask>
 */
class TodoTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = TodoTask::class;

    public function definition(): array
    {
        return [
            'label' => $this->faker->sentence(),
            'is_complete' => $this->faker->boolean()
        ];
    }
}
