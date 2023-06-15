<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => Course::factory(),
            'course_name' => Course::factory(),
            'exam' => $this->faker->paragraph(1),
            'lowest_passing_grade' => $this->faker->numberBetween(3, 5),
            'best_grade' => $this->faker->numberBetween(5, 10),
        ];
    }
}
