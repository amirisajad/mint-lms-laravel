<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class TermFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name(),
            'description' => $this->faker->text(),
            'image' => $this->faker->unique()->name(),
            'is_published' => true,
            'department_id' => Department::factory(),
            'course_id' => Course::factory(),
        ];
    }
}
