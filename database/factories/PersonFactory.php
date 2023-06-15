<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'occupation' => $this->faker->jobTitle,
            'job_description' => $this->faker->paragraph(5),
            'skill' => $this->faker->numberBetween(0, 5),
        ];
    }
}
