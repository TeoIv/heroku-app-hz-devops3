<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph(1),
            'img_url' => 'http://loremflickr.com/800/600?lock=' .
                $this->faker->numberBetween(1, 30976),
            'excerpt' => $this->faker->paragraph(5),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(5)) . '</p>',
        ];
    }
}
